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