<?php
$names = ["Andy", "Betty", "Carol"];

// 要素の入れ替え

// 入れ替えた時点でもともとの要素がなくなってしまうため、仮の変数を用意する
$temp = $names[0];
// 0と2を入れ替える
$names[0] = $names[2];
// 仮要素から呼び出し代入する
$names[2] = $temp;

var_dump($names);