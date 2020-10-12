<?php
$str = "Hyper-Text-Markup-Language";

$array = explode("-", $str);
// print_r($array);

for ($i = 0; $i < count($array); $i++) {
	$answer = substr($array[$i], 0, 1);
	echo $answer;
}