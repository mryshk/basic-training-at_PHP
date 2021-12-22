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
?><br>
<!-- 入れ子の配列の分解も可能 -->
<?php
$data = [1,2,[31,32,33]];
[$a,$b,$c] = $data;
print_r($b);
print_r($c);

[$x,$y,[$z1,$z2,$z3]] = $data;
print_r($z1);
print_r($z2);
?>
<!-- 比較演算 -->
<?php
var_dump("3.14"==3.14000);
var_dump('13xyz' == 13);
?>
<!-- 配列比較 -->
<?php
$data01 = [1,2,3];
$data02 = [1,5];
var_dump($data01 < $data02);

$data11 = [1,2,3];
$data12 = [1,5,1];
var_dump($data11<$data12);

$data21 =[1,2,3];
$data22 =[1,2,'3'];
var_dump($data21==$data22);
var_dump($data21 === $data22);
?>
<!-- 条件演算子 -->
<?php
$score = 75;
print $score >= 70?'合格':'不合格'
?>