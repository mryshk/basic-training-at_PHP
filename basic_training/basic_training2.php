<!-- 分割代入 -->
<?php
$data = [1,2,3,4,5];
[$_,$a,$_,$b,$c] = $data;
print $a;
print $b;
?>
<!-- インデックス代入 -->
<!-- 指定したインデックスに値を代入する -->
<?php
$data = [1,2,3,4,5];
[1 => $a,3=>$b]=$data;
print $b;
?>
<!-- 連想配列の１部分の取り出し -->
<?php
$map = ['title'=>"独習","price"=>3000];
["title"=>$title,"price"=>$price ]=$map;
print $title;
?>
<!-- 変数のスワッピング -->
<?php
$x = 15;
$y = 38;
[$y,$x] = [$x,$y];
print $x;
print $y;
?>
