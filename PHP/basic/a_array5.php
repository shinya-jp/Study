<?php
$student = [
	["name" => "Andy", "age" => 20],
	["name" => "Betty", "age" => 19],
	["name" => "Carol", "age" => 21],
];

for ($i = 0; $i < count($student); $i++) {
	if ($student[$i]["age"] >= 20) {
		echo "Hello";
		echo $student[$i]["name"] . PHP_EOL;
	}
}