<!-- if文 -->
<?php
$dot = "。";
$x = 3;
if ($x === 1) {
  print "{$x}は1です{$dot}";
} else {
  print "{$x}は1ではありません{$dot}";
}
?>
<?php
$data = [1, 2, 3, 4, "山田", "鈴木"];
[4 => $s, 5 => $r] = $data;
print "{$s}<br/>";
print $data[4];
?>

<!-- 条件演算子 -->
<?php
$message = "lll";
print $message ?: "空です";
?>
<!-- foreach分 -->
<?php
$data = ["田中", "鈴木", "佐藤", "山田", "相田"];
foreach ($data as $value) {
  print "{$value}になります";
}
?>
<?php
$data = ["田中", "鈴木", "佐藤", "山田", "相田"];
foreach ($data as $key => $value) {
  print "{$key}は{$value}になります。";
}
?>
<!-- for文 -->
<?php
for ($i = 0; $i < 4; $i++) {
  print "{$i}になります。<br/>";
}
?>
<!-- while文 -->
<?php
$s = 1;
while ($s < 5) {
  print "{$s}になります";
}
?>