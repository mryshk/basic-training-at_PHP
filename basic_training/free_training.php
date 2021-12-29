<!-- if文 -->
<?php
$dot = "。";
$x = 3;
if ($x === 1){
  print "{$x}は1です{$dot}";
}else{
  print "{$x}は1ではありません{$dot}";
}
?>
<?php
$data = [1,2,3,4,"山田","鈴木"];
[4 => $s, 5 => $r] = $data;
print "{$s}<br/>";
print $data[4];
?>

<!-- 条件演算子 -->
<?php
$message = "lll";
print $message?:"空です";
?>