<?php

// Make sure your secret keys could not be seen by unauthorized people
// Do not push config.php to your repository!
require 'config.php';

// Timezone: only if you want to set it
date_default_timezone_set('Asia/Manila');

// Composer stuff
// We are using Composer here
require 'vendor/autoload.php';

// Other settings for other stuff you will require
// 1. Database
// 2. Email sending
// 3. Other endpoints you need to hit

// Since  this is simple integration,
// check for existence of two things:
// 1. Token (magpie_token)
// 2. Email (magpie_email)

$reply = array();

// Check $_POST
if (empty($_POST)) {
  $reply["title"] = "Error";
  $reply["message"] = "No POST data passed.";
} else {
  // Check token existence
  $token = "";
  if (isset($_POST["magpie_token"])) {
    $token = $_POST["magpie_token"];
  } else {
    $reply["title"] = "Error";
    $reply["message"] = "Token not found";
  }

  // Check email
  $email = "";
  if (isset($_POST["magpie_email"])) {
    $email = $_POST["magpie_email"];
  } else {
    $reply["title"] = "Error";
    $reply["message"] = "Email not supplied";
  }

  // Check amount
  $amount = 0;
  if (isset($_POST["amount"])) {  // Match with the input name from HTML
    $amount = $_POST["amount"];
    $amount = (int)$amount;
    if ($amount <= 0) {
      $reply["title"] = "Error";
      $reply["messge"] = "Amount must be greater than zero.";
    }
  } else {
    $reply["title"] = "Error";
    $reply["message"] = "Amount not supplied";
  }
  
  // Check currency
  $currency = "PHP";  // Default
  if (isset($_POST["currency"])) {  // Match with the input name from HTML
    $currency = $_POST["currency"];
  }

  // Check description
  $description = "";
  if (isset($_POST["description"])) { // Match with the input name from HTML
    $description = $_POST["description"];
  } // If you want this to be mandatory, do an else and populate $reply array

  // Check store name
  $store = "";
  if (isset($_POST["name"])) {  // Match with the input name from HTML
    $store = $_POST["name"];
  } // If you want this to be mandatory, do an else and populate $reply array

  // $reply variable is empty, so everything's OK
  if (empty($reply)) {
    // Please read up on the Magpie PHP SDK
    // Check out https://github.com/flairlabs/magpie-php-sdk
    
    // Create the instance
    $magpie = new MagpieApi\Magpie($magpie_public_key, $magpie_secret_key, false, 'v1.1');
    
    // Create charge
    $response = $magpie->charge->create(
      $amount,
      $currency,
      $token,
      $description,
      $statement_descriptor,
      true
    );

    // Populate the responses into an array
    $magpie_reply = $response->toArray();
    $full_reply = json_encode($magpie_reply, JSON_PRETTY_PRINT);
    $full_reply = trim($full_reply);
    
    if ($response->isSuccess()) {
      // Record transaction in your database.
      // Send an email to your customer. Make it nice. :)

      // Use variable from the $magpie_reply array for data in your email, etc.

      $item = $description;
      $value = $amount/100;
      $value = number_format($value, 2, ".", ",");
      $transaction_id = $magpie_reply["id"];

      $reply["title"] = "Success - Payment Received";
      $reply["message"] = "<b><em>Thanks for your purchase!</em></b><br><br>Item: <b>$item</b><br>Amount Paid: <b>$currency $value</b><br>Transaction #: <b>$transaction_id</b><br>This will appear in your card statement as <b>$statement_descriptor</b>.";
    } else {
      // Something went wrong with the processing
      $reply["title"] = "Payment Processing Error";
      $reply["message"] = $magpie_reply["message"];  // Error response from gateway
    }
  }
}

// // Take the POST data and trigger a popup modal
// $post = json_encode($_POST, JSON_PRETTY_PRINT);
// $post2 = nl2br($post);
// $post2 = trim(preg_replace('/\s+/', ' ', $post2));

$content = "<h3>".$reply["title"]."</h3><br>";
$content .= $reply["message"]."<br>";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Process</title>
    <script src="assets/tingle/tingle.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/tingle/tingle.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.12.0/build/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
  </head>
  <body onload="modal.open();">

  <script>
  var modal = new tingle.modal({
      footer: true,
      stickyFooter: true,
      closeMethods: []
  });
  modal.setContent('<?php echo $content; ?>');

  modal.addFooterBtn('Back', 'tingle-btn tingle-btn--pull-right', function() {
    window.history.back();
});

  </script>
  <!-- Inspect content of request and magpie's reply
  <?php
      $post_request = json_encode($_POST, JSON_PRETTY_PRINT);
      echo "POST REQUEST:\n$post_request\n";
      echo "--------------------\n";
      echo "MAGPIE REPLY:\n$full_reply\n";
    ?>
  -->
  </body>
</html>

