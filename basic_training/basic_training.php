  <!-- Hello -->
  <?php
  print "Hello World";
  ?><br>
  <!-- 変数 -->
  <?php
  $msg = "こんにちは！";
  print $msg;
  ?><br>
  <!-- 定数 -->
  <!-- 定数定義はconst or defineを使用する -->
  <div style="margin:10px;">
    <?php
    const PRICE = 1000;
    $tax = 1.08;
    $sum = PRICE * $tax;
    print $sum;
    ?>
  </div>
  <?php
  define("TAX", 1.6);
  $price = 2000;
  print TAX * $price;
  ?>
  <!-- 定義済みの定数 -->
  <?= __FILE__ ?><br>
  <?= __LINE__ ?><br>
  <!-- ダブルクォーテーション -->
  <!-- シングルクォーテーションは文字列のみ。
  ダブルクォーテーションは変数展開が必要な際に使用する。 -->
  <?php
  $title = 'サーバーサイド技術の学び舎';
  $data1 = "サポートサイト\n「{$title}」へ";
  print $data1;
  ?><br />
  <!-- ヒアドキュメント -->
  <?php
  $str = 'PHP (PHP:Hypertext Preprocessor)';
  $msg = <<<"EOD"
  {$str}は、サーバーサイドで動作する簡易なスクリプト言語です。
  まずは、本書でじっくり基礎固めしましょう。<br/>
  "Let's start everyone!!"
  EOD;
  print $msg;
  ?>
  <!-- null型 -->
  <?php
  $nl1;
  $nl2 = null;
  ?><br>
  <!-- array型 -->
  <?php
  $data = ['ok', 'yes', 'No'];
  print $data[0];
  ?>
  <?php
  $data = ['山田', '鈴木', '田中'];
  print $data[2];
  ?><br>

  <!-- エスケープ処理確認 -->
  <!-- シングルクォーテーションはエスケープ処理されずそのまま表示される -->
  <!-- 変数展開の際はダブリュークォーテーションを使用する。 -->
  <?php
  $data = "こんにちは";
  print "山田さん、\n{$data}"
  ?><br>

  <!-- 配列ブラケット構文 -->
  <?php
  $a = ["山田", "山田"];
  $a[2] = "鈴木";
  $a[4] = "青木";
  print_r($a);
  print $a[4];
  ?><br>

  <!--連想配列（ハッシュ）-->
  <!-- 対応表を引き出す際に使用 -->
  <?php
  $member = [
    "山田" => "大阪府",
    "鈴木" => "兵庫県",
    "青木" => "埼玉県"
  ];
  print $member["鈴木"];
  ?><br>
  <?php
  $price = [
    "本" => "890",
    "日用品" => "400",
    "食品" => "300"
  ];
  $tax = 1.08;
  print $price["日用品"] * $tax;
  ?><br>
  <?php
  $price["お菓子"]= "500";
  print $price["お菓子"] * $tax;
  ?><br>
<!-- 多次元配列 -->
<?php
$data1=[
  ["X-1","X-2","X-3"],
  ["Y-1","Y-2","Y-3"],
  ["Z-1","Z-2","Z-3"],
];
print $data1[1][2];
?><br>
<!-- 2次元配列 dimention -->
<?php
$member1 =[
  [
    "name"=>"Yamada",
    "age"=>"35",
    "sex"=>"man"
  ],
  [
    "name"=>"suzuki",
    "age"=>"30",
    "sex"=>"man"
  ],
  [
    "name"=>"satou",
    "age"=>"24",
    "sex"=>"women"
  ],
];
print $member1[1]["name"];
?>
<!-- 配列のインデックスの割り振り -->
<?php
$data3 =[
  1 => "yamada",
  2 => "suzuki",
  8 => "satou"
  ];
  print_r($data3);
?><br>
<!-- 割り振りをしない場合はインデックス番号が０からになる -->
<?php
$data4 =["yamada","suzuki","satou"];
print_r($data4);
?><br>
<!-- 配列の追加 -->
<?php
$data4 = [
  "name"=>"Yamada",
  "age"=>"24",
  "Suzuki"
];
print_r($data4["name"])
?>
<!-- インクリメント加算 -->
<?php
$x = 4;
print $y = ++$x;
?>
<!-- デクリメント減算-->
<?php
$x = 3;
print $z = --$x;
?><br>
<!-- インクリメント加算 (後値)-->
<?php
$x = 4;
$y = $x++;
print $x;
print $y;
?>
<!-- 配列加算 -->
<!-- keyが重複していない要素のみ加算される -->
<!-- 下のコードではkeyのnameが重複しているため加算されていない -->
<?php
$assoc1 = [
  "name"=>"yamada",
  "age"=>"35"
];
$assoc2 =[
  "name"=>"suzuki",
  "sex"=>"man",
];
$result = $assoc1 + $assoc2;
print_r($result);
?>
<!-- 通常配列はkey=indexが重複するため基本加算されない -->
<!-- $a1にkey=index[3]が存在しなかっため$a2のindex[3]が加算された -->
<?php
$a1 = ["yamada","suzuki","sato"];
$a2 = ["24","35","45","34"];
$result = $a1 + $a2;
print_r($result);
?>
<!-- 代入演算子 -->
<?php
$x = 1;
$y = $x;
$x = 5;
print $x;
print $y;
?>