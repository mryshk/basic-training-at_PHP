<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?= "こんにちは、世界！" ?><br />
  <?= "こんにちは、皆さん！" ?><br />
  <?php
  print "Hello World";
  ?><br>
  <?php
  $msg = "こんにちは！";
  print $msg;
  ?><br>
  <?php
  const TAX = 1.1;
  $price = 1000;
  $sum = $price * TAX;
  print $sum;
  ?>
</body>

</html>