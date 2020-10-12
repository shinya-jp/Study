<?php
// strlen 文字列の長さを得る
// 日本語の場合は使えない　日本語専用の関数がある

$str = "Hello World";
$length = strlen($str);

echo $length . PHP_EOL;