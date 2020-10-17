<?php
// file_put_contents関数 文字列をファイルに書き込む
// $str = "Hello World" . PHP_EOL; #書き込む内容
// $file = "hello.txt"; #ファイル名
// file_put_contents($file, $str);

// hello.tztファイルが作成され中身にHello Worldと書き込まれている

// ↓上書き
// $str = "Hello PHP" . PHP_EOL; #書き込む内容
// $file = "hello.txt"; #ファイル名
// file_put_contents($file, $str);

// hello/txtファイルにHello PHPと上書きされる

// 追記する
$str = "Hello World" . PHP_EOL; #書き込む内容
$file = "hello.txt"; #ファイル名
file_put_contents($file, $str, FILE_APPEND);

// ２行目にHello Worldと追記される