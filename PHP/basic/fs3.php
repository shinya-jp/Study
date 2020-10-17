<?php
// file ファイル全体を読み込んで配列に格納する

// $file = "hello.txt";
// $array = file($file);
// print_r($array);

// 配列で格納されるのでprint_r関数を使用する
// file_get_contentsとの違いである


$file = "hello.txt";
// FILE_IGNORE_NEW_LINES 改行コード(NEW_LINEWS)を無視(IGNORE)する
$array = file($file, FILE_IGNORE_NEW_LINES);
print_r($array);