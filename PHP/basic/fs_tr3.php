<?php
$file = "score.csv";

$handle = fopen($file, "r");
// fgets($handle);
$line = fgetcsv($handle); #ファイルから一行読み込み　戻り値は配列で返す
$scores = [];

while ($line !== false) {
	$scores[] = $line;
	$line = fgetcsv($handle);
}
fclose($handle);


// $lines = file($file, FILE_IGNORE_NEW_LINES);
// $scores = []; #最終的に代入されるもの　[["90", "88", "80"],[...],[...]]

// for ($i = 0; $i < count($lines); $i++) {
// 	$line = $lines[$i]; #"90,88,80,"
// 	$score = explode(",", $line); #["90", "88", "80"]
// 	$scores[] = $score; #[["90", "88", "80"],[...]]
// }

$total = 0;
for ($i = 0; $i < count($scores); $i++) {
	$score  = $scores[$i]; #["90", "88", "80"]をさらにforで計算
	for ($j = 0; $j < count($score); $j++) {
		$total = $total + $score[$j];
	}
}

echo $total . PHP_EOL;