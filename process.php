<?php
// Take the POST data and trigger a popup modal
$post = json_encode($_POST, JSON_PRETTY_PRINT);
$post2 = nl2br($post);
$post2 = trim(preg_replace('/\s+/', ' ', $post2));

$content = "<h3>Checkout Data</h3><br>";
// $content .= "<strong>POST variables:</strong><br>magpie_token: " . $_POST['magpie_token'] . "<br>magpie_email: "  . $_POST['magpie_email'] . "<br><br>";
$content .= "<strong>In JSON:</strong><br><pre><code class=\"json\">$post2</code></pre>";
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
  </body>
</html>