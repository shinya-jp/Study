<?php

$countires = [
	"Japan" => ["Tokyo", "Osaka", "Nagoya"],
	"England" => ["London", "Birmingha", "Glasgrow"],
	"France" => ["paris", "Marseille", "Lyon"]
];

$cities = $countires["England"];

for ($i = 0; $i < count($countires); $i++) {
	echo $cities[$i] . PHP_EOL;
}