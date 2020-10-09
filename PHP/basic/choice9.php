<?php
$diceA = 6;
$diceB = "6";

// int型（整数型）を代入してあげる
$diceC = (int)$diceB;

// 互いに整数型なのでwin
if ($diceA === $diceC) {
	echo "Win";
} else {
	echo "Lose";
}