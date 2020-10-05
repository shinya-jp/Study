<?php
$points = [10, 20, 30];
$total = 0;

for ($i = 0; $i < count($points); $i++) {
	// $totalに上書きする
	$total = $total + $points[$i];
}
echo $total; #60