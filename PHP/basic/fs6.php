<?php
/* fwrite - バイナリセーフなファイル(文字データだけでなく画像や音声データなど)書き込み処理
書き込み処理なのでアクセス形式は "w" */

$names = ["Andy", "Betty"];
$file = "names.txt";
$handle = fopen($file, "w");
for ($i = 0; $i < count($names); $i++) { 
	fwrite($handle, $names[$i] . PHP_EOL);
}
fclose($handle);