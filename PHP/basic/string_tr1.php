<?php
// strtoupper

$colors = ["Red", "Green", "Blue"];

for ($i = 0; $i < count($colors); $i++) { 
	$color = strtoupper($colors[$i]);
	echo $color . PHP_EOL;
}