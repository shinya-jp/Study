<?php
$score = ["english" => 90, "math" => 88, "science" => 80];

// $total = $score["english"] + $score["math"] + $score["science"];
// echo $total;

// 上記のコードforeach文で書くと（railsのeach文みたいな）
$total = 0;
// $配列データ as $keyはenglishなどの要素が入る $valueに90などの値が入る
foreach ($score as $key => $value) {
	$total = $total + $value;
}
echo $total;

