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
<?php
for ($i = 4; $i < 9; $i++) {
  print "{$i}になります。";
}
?>
<!-- while文 -->
<?php
$s = 1;
while ($s < 5) {
  print "{$s}になります";
}
?>
<?php
$i = 3;
do {
  print "{$i}です。<br/>";
  $i++;
} while ($i < 6)
?>
<!-- switch文 -->
<?php
$rank = "OK";
switch ($rank) {
  case "NO":
    print "Noです。";
    break;
  case "OK":
    print "OKです。";
    break;
}
?>
<!-- match -->
<?php
$rank = "OK";
$result = match ($rank) {
  "OK" => "いいね＝",
  "NO" => "あかん",
  "MM" => "MO"
};
print $result;
?>
<!-- match関数2 -->
<?php
$onigiri = "おかか";
$result = match ($onigiri) {
  "おかか", "さけ", "和風ツナ" => "すきだな〜",
  "梅", "肉", "明太子" => "う〜ん。"
};
print "私は{$onigiri}の具は{$result}。";
?>