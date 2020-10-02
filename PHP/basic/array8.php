<?php
// 要素の削除

$names = ["Andy", "Betty", "Carol"];

/* わるいパターン
$names[1] = "";
これは空文字データが代入されてるだけで、要素はある */

// unset($names[1]);
// // 削除関数だが、要素番号はそのまま
// var_dump($names); 0 Andy, 2 Carol となる

array_splice($names, 1, 1);
// 削除対象の配列を指定 $names
// 削除対象の要素番号指定 Bettyなので１
// 削除対象の要素数 Bettyのみなので１、Carolも削除したい場合は２となる
var_dump($names); #0 Andy, 1 Carol