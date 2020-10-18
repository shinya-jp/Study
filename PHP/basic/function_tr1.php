<?php

function double($x) {
	return $x * 2;
}

$scores = [90, 72, 58];
for ($i=0; $i < count($scores); $i++) { 
	echo double($scores[$i]) . PHP_EOL;
}