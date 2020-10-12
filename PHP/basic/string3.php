<?php
// substr 文字列の一部を返す

$str = "Hello World";

// 戻り値　＝　substr(取得したい変数, 開始位置を指定)；
// $sub = substr($str, 6); #World

// 戻り値　＝　substr(取得したい変数, 開始位置を指定,　終わり位置を指定)；
$sub = substr($str, 6, 3); #Wor

echo $sub;