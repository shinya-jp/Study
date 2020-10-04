<?php
// continueを使うと次の反復処理に進む
for ($i = 0; $i < 10; $i++) {
	$x = $i % 2;
	// 奇数のときは実行しない
	if ($x == 1) {
		continue;
	}
	echo $i . PHP_EOL;
}

echo "end" . PHP_EOL;