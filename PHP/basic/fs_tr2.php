<?php
$scores = [
	[90, 88, 80],
	[64, 72, 72],
	[90, 92, 94]
];

$file = "score.csv";

$handle = fopen($file, "w");

for ($i=0; $i < count($scores); $i++) { 
	$score = $scores[$i];
	// $line = implode(",", $score); #implodeのおかげで"90,88,80"と読み込まれる
	// fwrite($handle, $line . PHP_EOL);
	// 簡略化すると
	fputcsv($handle, $score);
}

fclose($handle);