<?php
$scores = [
	["engilish" => 90, "math" => 88, "science" => 80],
	["engilish" => 64, "math" => 72, "science" => 72],
	["engilish" => 90, "math" => 92, "science" => 94]
];

// $total = $scores[0]["math"] + $scores[1]["math"] + $scores[2]["math"];

// 上記のコードをfor文で書くと

$math_total = 0;
for ($i=0; $i < count($scores); $i++) { 
	$score = $scores[$i];
	$math_total = $score["math"] + $math_total;
}

echo $math_total;