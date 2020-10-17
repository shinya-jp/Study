<?php

// $file = "score.txt";
// $line = file($file, FILE_IGNORE_NEW_LINES);

// $total = array_sum($line);

// echo $total;

// 別方法

$file = "score.txt";
$handle = fopen($file, "r");
$line = fgets($handle);
$scores = [];

while ($line !== false) {
	$scores[] = trim($line); #trim 改行コードを除去する
	$line = fgets($handle); #２行目3行目と読み込めるように
}

fclose($handle);

$total = array_sum($scores);
echo $total;