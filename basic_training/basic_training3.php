<!-- 条件分岐 -->
<?php
$x = 10;
if ($x === 10) {
  print '変数$xは10です。';
} else {
  print '変数$xは10ではありません。';
}
?>
<!-- elsif条件分岐 -->
<!-- 実行されるのは最初に合致したプロックのみ -->
<?php
$x = 0;
if ($x>20){
  print '変数$xは20より大きいです。';
}elseif ($x >10){
  print '変数$xは10より大きいです。';
}else{
  print '変数$xは10以下です。';
}
?>
<!-- ifの入れ子構造 -->
<?php
$x = 1;
$y = 0;
if ($x ===1){
  if ($y === 1){
    print '変数$x,$yは1です。';
  }else{
    print '変数$xは１ですが、$yは1ではありません。';
  }
}else {
  print '変数$xは1ではありません。';
}
?>
<!-- ifの中かっこ{}は省略可能 -->
<!-- ただし、中かっこを省略した場合、elseブロックは直近のif命令に対応する -->
<?php
$x = 10;
if ($x === 1)
  print '変数$xは10です。';
else
  print '変数$xは10ではありません。';
?>
<!-- bool型の条件分岐 -->
<?php
$flag = "";
if ($flag){
  print 'OK';
}elseif(!$flag){
  print "No";
}
?>
<!-- switch条件分岐 -->
<!-- 等価演算子の条件分岐の際に最適 -->
<?php
$rank = 'NO';
switch ($rank){
  case 'OK':
    print 'OK';
    break;
  case "NO":
    print "NG";
    break;
  case "Yes":
    print "YEs";
    break;
  default :
    print "???";
    break;
}
?><br>
<?php
$rank = "NO";
switch ($rank){
  case "NO":
    print "NO";
    break;
  case "OK":
    print "OK";
    break;
}
?>