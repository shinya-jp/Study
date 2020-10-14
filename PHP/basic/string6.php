<?php
$message = "ハローワールド";
// マルチバイト文字列関数
$length = mb_strlen($message);

echo $length . PHP_EOL;
// 7文字なので7と表示される