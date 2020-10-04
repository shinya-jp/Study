<?php
$i = 0;
// 繰り返し処理
// while ($i = 3) {
// 	echo $i . PHP_EOL;
// 	$i++;
// }

// while ($i <= 0) {
// 	echo $i . PHP_EOL;
// 	$i++;
// }
// 0のみ出力される

// while ($i > 5) {
// 	echo $i . PHP_EOL;
// 	$i++;
// }
// iは５より小さいのでなにも実行されない

while (true) {
	echo $i . PHP_EOL;
	$i++;
}
// 常にtrueなので無限に実行されてしまう