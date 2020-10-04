<?php
$names = ["Andy", "Betty", "Carol"];

$i = 0;
// while ($i < 3) {
// count変数を使用する方法もある
while ($i < count($names)) {
	echo "Hello ";
	echo $names[$i] . PHP_EOL;
	$i++;
}