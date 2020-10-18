<?php

function repeat($hello, $count) {
	$result = "";
	for ($i = 0; $i < $count; $i++) {
		$result = $result . $hello;
	}
	return $result;
}

$hello2 = repeat("Hello", 2);
echo $hello2 . PHP_EOL;

$hello3 = repeat("Hello", 3);
echo $hello3 . PHP_EOL;

// str_repeatの既存の関数あり
$hello4 = repeat("Hello", 4);
echo $hello4 . PHP_EOL;