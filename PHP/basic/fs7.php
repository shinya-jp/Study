<?php
// ファイルの読み込みができない（存在しないなど）とき

$file = "heloo.php";
// @をつけるとエラー制御演算子といってPHPエラーメッセージがでない
$handle = @fopen($file, "r");
if ($handle === false) {
	// die 異常があった場合プログラムを終了させる()にはメッセージ
	die("can't open file");
}

while (($line = fgets($handle)) !== false) {
	echo $line;
}

fclose($handle);