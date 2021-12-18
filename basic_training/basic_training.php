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
?>