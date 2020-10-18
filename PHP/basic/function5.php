<?php
// 戻り値の定義

/* 入力として受け取るデータを引数
返却するデータを戻り値
returnを使うことで戻り値を指定することができる
returnキーワードを使わない場合、戻り地のない関数となる */

function greet($name) {
	return "Hello $name" . PHP_EOL;
}

$message = greet("Andy");
echo $message;