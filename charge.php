<?php

require 'config.php';

// Timezone
date_default_timezone_set('Asia/Manila');

// Statement descriptor to use, appears in credit card statement
// Limit to 21 characters
$statement_descriptor = 'YOUR_STATEMENT_DESCRIPTOR';

// Composer stuff
require 'vendor/autoload.php';

// This progams eventual output
$reply = array();

/// Start
if (empty($_POST)) {

  $reply['title'] = 'Server Error';
  $reply['message'] = 'You are not allowed to access this.';
  
} else {

  // Token
  $token = '';
  if (isset($_POST['token']['id'])) {
    $token = $_POST['token']['id'];
  } else {
    $reply['title'] = 'Error';
    $reply['message'] = 'Token not found.';
  }

  // Amount
  $amount = 0;
  if (isset($_POST['amount'])) {
    $amount = $_POST['amount'];
    if ($amount < 50) {
      $reply['title'] = 'Amount Error';
      $reply['message'] = 'Amount must not be less than P50.';
    }
  } else {
    $reply['title'] = 'Payment Error';
    $reply['message'] = 'Amount must not be less than P50.';
  }

  // Product description
  $description = '';
  if (isset($_POST['description'])) {
    $description = $_POST['description'];
  } else {
    $reply['title'] = 'Purchase Error';
    $reply['message'] = 'Item/s not found. This order was not processed.';
  }


  $phone = '';
  if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
  } else {
    $reply['title'] = 'Incomplete Data';
    $reply['message'] = 'Mobile number required.';
  }
  

  $currency = '';
  if (isset($_POST['currency'])) {
    $currency = $_POST['currency'];
  } else {
    $reply['title'] = 'Currency Error';
    $reply['message'] = 'Must set currency.';
  }


  if (empty($reply)) {
    $magpie = new MagpieApi\Magpie($magpie_public_key, $magpie_secret_key, false, 'v1.1');
    $response = $magpie->charge->create(
      $amount,
      $currency,
      $token,
      $description,
      $statement_descriptor,
      true
    );

    $magpieReply = $response->toArray();
    $test_mode = '';
    if (!$magpieReply['livemode']) {
      $test_mode = "TEST MODE ONLY.";
    }

    if ($response->isSuccess()) {
      // Create entry in queue
      $entry = R::dispense('queue');

      $entry->livemode = $magpieReply['livemode'];

      $entry->payment_ref_num = $payment_ref_num = 'MGP-' . $magpieReply['id'];

      $entry->quantity = $quantity = $_POST['quantity'];

      $entry->amount_paid_cents = (int)$_POST['amount'];

      $entry->created = date('Y-m-d H:i:s');

      $entry->email = $email = $_POST['token']['email'];
      $entry->mobile = $mobile = $_POST['phone'];

      $entry->payer_name = $payer_name = $_POST['token']['card']['name'];
      $entry->payer_card = $payer_card = $_POST['token']['card']['brand'] . '-' . $_POST['token']['card']['last4'];
      $entry->payer_billing_address = $payer_billing_address = $_POST['args']['billing']['address'] . ' ' . $_POST['args']['billing']['city'] . ' ' . $_POST['args']['billing']['postcode'] . ' ' . $_POST['args']['billing']['country'];

      $entry->delivery_option = $delivery_option = $_POST["ship_or_pickup"];

      $entry->address = $address = $_POST["ship_or_pickup"];
      $entry->recipient_name = $recipient_name = $payer_name;
      if ($_POST["ship_or_pickup"] == 'ship') {
        $entry->recipient_name = $recipient_name = $_POST['args']['shipping']['name'];
        $entry->address = $address = $_POST["args"]["shipping"]["address"] . " " . $_POST["args"]["shipping"]["city"] . " " . $_POST["args"]["shipping"]["postcode"] . " " . $_POST["args"]["shipping"]["country"];
      }

      $entry->tracking_num = '';
      $entry->serial_num = '';

      $entry->raw_request = json_encode($_POST);
      $entry->raw_reply = json_encode($magpieReply);

      $id = R::store( $entry );

      $message = '';

      if ($id) {
        $confirmation_code = 'CW18-' . $id;

        $batch = 0; // Batch
        $delivery_date = 'June 20, 2018'; // Delivery date of Batch 5

        // Get array of quantities
        $all_orders = R::getCol( 'SELECT quantity FROM queue WHERE livemode=1' );

        // Sum of orders
        $total_orders = array_sum($all_orders);
        $total_orders = (int)$total_orders;

        // What batch is this order?
        $per_batch = 50;
        $first_batch = 5;
        $date_increment = 10;

        // Determine the batch
        if ($total_orders > $per_batch) {
          // Means it's batch 1 onwards
          $batch = $total_orders/$per_batch;
          $batch = (int)$batch;
          if (($total_orders%$per_batch) == 0) {
            $batch = $batch-1;
          }
          $date_increment = $batch*$date_increment;      
          $d = strtotime("$delivery_date + $date_increment days");
          $delivery_date = date('M j, Y', $d);
        }
        $batch = $batch + $first_batch;


        // Send email
        $mail = new PHPMailer(true);

        try {

          $mail->SMTPDebug = false;
          $mail->isSMTP();
          $mail->Host = 'email-smtp.us-west-2.amazonaws.com';
          $mail->SMTPAuth = true;
          $mail->Username = $email_user;
          $mail->Password = $email_pass;
          $mail->SMTPSecure = 'tls';
          $mail->Port = 587;

          $mail->setFrom('do-not-reply@magpie.im', 'nowhereToGoButUP Foundation');
          $mail->addAddress($_POST['token']['email'], $_POST['token']['card']['name']);
          // Add BCC
          $mail->addBCC('upcharterwatch@gmail.com');
          $mail->Subject = 'THE CHARTER WATCH - Thank you for your order! ' .  $test_mode;

          // Get email template into a string
          $email = file_get_contents('assets/email/email.html');
          // Now that we have email as a string, replace

          $email = str_replace('%%code%%', $confirmation_code, $email);
          $email = str_replace('%%name%%', $payer_name, $email);
          $email = str_replace('%%batch%%', $batch, $email);
          $email = str_replace('%%delivery_date%%', $delivery_date, $email);

          $mail->isHTML(true);

          $mail->Body = $email;

          $mail->AltBody = "CONFIRMATION CODE: $confirmation_code\n\nThank you very much, $payer_name!\n\nYour order is now being processed.\nYour confirmation code is $confirmation_code, which is part of Batch $batch.\nEstimated delivery date is $delivery_date.\nYou will be informed when your batch is already in process.";

          $mail->send();

          $message = "<br><span class=\"mbri-smile-face\" style=\"font-size: 50px;color: #b3bbc9;\"></span><br>CONFIRMATION CODE: <strong>$confirmation_code</strong><br>Your order, part of Batch $batch, is now being processed.<br>Estimated delivery date is $delivery_date.<br>You will be informed when your batch is already in process.";

        } catch (Exception $e) {
          $reply['message'] = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
          $reply['title'] = 'Mail error';
        }
      }

      $reply['title'] = "<h4>Thank you, $payer_name!</h4><hr>";
      $reply['message'] = $message . "<br><strong>$test_mode</strong>";
    } else {
      $reply['title'] = '<h4>Payment Processing Error</h4><hr>';
      $mensahe = $magpieReply["message"];
      $reply['message'] = "<br><span class=\"mbri-sad-face\" style=\"font-size: 50px;color: #b3bbc9;\"></span><br>$mensahe";
    }
  }

}

echo json_encode($reply, JSON_PRETTY_PRINT);

?>