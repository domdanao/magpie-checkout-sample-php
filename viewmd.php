<?php
require __DIR__ . '/vendor/autoload.php';

$string = file_get_contents($_REQUEST['f']);

$parser = new \cebe\markdown\GithubMarkdown();


// echo $parser->parse($string);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Code</title>
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?skin=desert"></script>

    <!-- <link rel="stylesheet" href="assets/css/popup.css"> -->
  </head>
  <body>
  <?prettify?>
    <?php echo $parser->parse($string); ?>
  </body>
</html>