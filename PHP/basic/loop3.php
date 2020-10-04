<?php
$names = ["Andy", "Betty", "Carol", "Mike"];

// $i = 0; 初期化処理
// // while ($i < 3) {　反復処理
// // count変数を使用する方法もある
// while ($i < count($names)) {
// 	echo "Hello ";
// 	echo $names[$i] . PHP_EOL;
// 	$i++;　増分処理
// }

// for文を使用すると
// for (初期化処理; 反復条件; 増分処理) {
// for ($i = 0; $i < 3; $i++) {
// count変数の使用
for ($i = 0; $i < count($names); $i++) {
	echo "Hello ";
	echo $names[$i] . PHP_EOL;
}

