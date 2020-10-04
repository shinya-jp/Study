<?php
// カウンター変数はi ,j ,kを使用するのが一般的
for ($i = 0; $i < 3; $i++) {
	for ($j = 0; $j < 3; $j++) {
		echo $i + $j;
		echo " ";
	}
	echo PHP_EOL;
}
