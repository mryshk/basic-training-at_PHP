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
  define("TAX", 1.6);
  $price = 2000;
  print TAX * $price;
  ?>
  <?= __FILE__ ?><br>
  <?= __LINE__ ?><br>
  <?php
  $title = 'サーバーサイド技術の学び舎';
  $data1 = "サポートサイト\n「{$title}」へ";
  print $data1;
  ?>

</body>

</html>