<?php
// Take the POST data and trigger a popup modal
$post = json_encode($_POST, JSON_PRETTY_PRINT);
$post2 = nl2br($post);
$post2 = trim(preg_replace('/\s+/', ' ', $post2));

$content = "<h3>Here is what Checkout generated</h3><br>";
$content .= "<strong>POST variables:</strong><br>magpie_token: " . $_POST['magpie_token'] . "<br>magpie_email: "  . $_POST['magpie_email'] . "<br><br>";
$content .= "<strong>In JSON:</strong><br><pre>$post2</pre>";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Process</title>
    <script src="assets/tingle/tingle.js"></script>
    <link rel="stylesheet" href="assets/tingle/tingle.css">
  </head>
  <body onload="modal.open();">

  <script>
  var modal = new tingle.modal({
      footer: true,
      stickyFooter: true,
      closeMethods: [],
      cssClass: ['custom-class-1', 'custom-class-2'],
      onOpen: function() {
          console.log('modal open');
      },
      onClose: function() {
          console.log('modal closed');
      },
      beforeClose: function() {
          // here's goes some logic
          return false; // nothing happens
      }
  });
  modal.setContent('<?php echo $content; ?>');

  modal.addFooterBtn('Back', 'tingle-btn tingle-btn--pull-right', function() {
    window.history.back();
});

  </script>
  </body>
</html>