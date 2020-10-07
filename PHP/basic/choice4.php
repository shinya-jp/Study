<?php
// 論理演算 &&は論理積(かつ、AND),||は論理和(あるいは,OR)
// ！は否定を意味する
$diceA = 4;
$diceB = 3;

// diceAが４以上　かつ　$diceBが４以上のとき
if ($diceA >= 4 && $diceB >= 4) {
	echo "Win";
// それ以外は
} else {
	echo "Lose";
}