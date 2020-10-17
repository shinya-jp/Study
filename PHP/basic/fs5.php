<?php
/* アクセス形式 r 読み込みモード w 書き込みモード( 上書き) a 書き込みモード(追記)
fopen - ファイルまたはURLをオープンする
fgets - ファイルポインタから１行取得する
fclose - オープンされたファイルポインタをクローズ(削除)する */


// $file = "hello.txt";
// // (読み込むファイル, アクセス形式）
// $handle = fopen($file, "r");

// $line = fgets($handle);
// echo $line;

// fclose($handle);

$file = "hello.txt";
$handle = fopen($file, "r");
while (($line = fgets($handle)) !== false) {
	echo $line;
}

fclose($handle);