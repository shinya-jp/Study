<?php
$name = "Andy";

$message1 = 'Hello $name';
echo $message1; #Hello $nameと出力される

$message2 = "Hello $name";
echo $message2; #Hello Andyと出力される
// ""を使用すると変数が使える、''では変数が使われずそのまま出力される