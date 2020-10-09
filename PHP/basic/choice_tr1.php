<?php
$score = $argv[1];

if ($score >= 80) {
	echo "$score : A";
} elseif ($score >= 60) {
	echo "$score : B";
} else {
	echo "$score : C";
}