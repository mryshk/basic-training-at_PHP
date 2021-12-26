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
<!-- switch文には必ずbreakがいる。自動で止まる性能を持っていないから。 -->
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
<!-- switchのフォールスルー -->
<!-- caseを列挙する。orのような意味。 -->
<?php
$drink = "ビール";
switch ($drink){
  case "日本酒":
  case "ビーす":
  case "ビール":
  case "お酒":
    print "日本酒です。";
    break;
  default :
   print "お酒？";
}
?>
<!-- match式-->
<!-- あるパターンの値を変数に入れ込むことができる。 -->
<?php
$rank = "OK";
$result = match($rank){
  'OK'=>'OKですね〜',
  "NO"=> "NO",
  "YES"=> "YES",
  default => "???"
};
$tt = "。";
print $result.$tt;
?>
<!-- match複数 -->
<?php
$drink = "ワイン";
$result = match($drink){
  "ビール","日本酒","お酒" => "ビールです",
  "ブランデー","ワイン" => "西洋酒です"
};
print $result.$tt;
?>
<!-- match関数2 -->
<?php
$onigiri = "かやく";
$result = match($onigiri){
  "しゃけ","こんぶ","おかか" => "OK",
  "明太子","梅干し","かやく" => "NO"
};
print $result.$tt;
?>
<!-- while -->
<?php
$i = 1;
while ($i < 4){
  print "{$i}番目のループです。<br/>";
  $i++;
}
?>
<?php
$i =4;
do {
  print "{$i}番目のループです。<br/>";
  $i++;
}while ($i<4);
?>
<!-- for文 -->
<?php
for ($i=1; $i<4; $i++){
  print "{$i}番目のループです。<br/>";
}
?>
<?php
for($i=1,$j=1; $result = $i*$j,$i<8;$i++,$j++){
  print "{$i}×{$j}={$result}<br/>";
}
?>
<?php
for ($i=2,$j=3;$result=$i+$j,$i<5;$i++){
  print "{$i}番目になりまして、あと{$j}を足して{$result}。<br/>";
}
?>
<!-- foreach文 -->
<?php
$data = ["田中","鈴木","佐藤","山田","相田"];
foreach ($data as $value){
  print "{$value}になります。<br/>";
}
?>
<!-- foreach 連想配列Ver -->
<?php
$data =["田中"=>"24","山田"=>"97"," suzuki"=>"34"];
foreach($data as $key => $value){
  print "{$key}は年齢{$value}歳です。<br/>";
}
?>
<!-- 通常配列でもkey&valueは使用可能 -->
<!-- ただしkeyがインデック番号になる -->
<?php
$data =["田中","鈴木","佐藤","山田","相田"];
foreach ($data as $key => $value){
  print "{$value}は年齢{$key}歳です。<br/>";
}
?>