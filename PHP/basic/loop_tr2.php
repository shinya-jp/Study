<?php
$colors = ["Red", "Green", "Blue"];

$i = 0;
// while ($i < count($colors)) {
// 	$number = $i + 1;
// 	echo $number;
// 	echo ":";
// 	echo $colors[$i] . PHP_EOL;
// 	$i++;
// }

// 解
for ($i=0; $i < count($colors); $i++) {
	$no = $i + 1;
	echo $no . ":" . $colors[$i] . PHP_EOL;
}