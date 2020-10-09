<?php
// ==演算子は型の相互変換が発生する
$diceA =6; #整数型
$diceB ="6"; #文字列型


if ($diceA == $diceB) {
	echo "Win";
} else {
	echo "Lose";
}
// win