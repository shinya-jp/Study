<?php
$diceA = 4;
$diceB = 3;
// diceAが４以上　もしくは　diceBが４以上
if ($diceA >= 4 || $diceB >= 4) {
	echo "Win";
} else {
	echo "Lose";
}