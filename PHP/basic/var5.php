<?php
$name = "Andy";
echo $name;
// この時点ではAndyが出力される
$name = "Betty";
// プログラムは上から読まれるので上書きされBettyになる
echo $name;
// 結果Bettyのみが出力される