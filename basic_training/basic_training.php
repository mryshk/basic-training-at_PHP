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
  <?php
  define("TAX", 1.6);
  $price = 2000;
  print TAX * $price;
  ?>
  <!-- 定数の予約後 -->
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
  $data = ['ok','yes','No'];
  print $data[0];
  ?>
  <?php
  $data = ['山田', '鈴木', '田中'];
  print $data[2];
  ?>
