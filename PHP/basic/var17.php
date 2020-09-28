<?php
// .演算子は文字列を連結する
// 整数型データなど異なるデータ型も文字列として連結できる
// 改行コードはPHP_EOL定数

$message = "Hello ";
$name = "Andy";
$message = $message . $name;
echo $message; #Hello Andy