<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
  <?php if(isset($this->blocks['block1'])) : ?>
    <?=$this->blocks['block1']?>
  <?php else : ?>
    <h2>hello common</h2>
  <?php endif ?>
  <?=$content;?>
</body>
</html>