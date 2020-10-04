<?php
// break反復処理を終了する
for ($i=0; $i < 10; $i++) { 
	if ($i == 5) {
		// iが5のときに終了する
		break;
	}
	echo $i . PHP_EOL;
}

echo "end" . PHP_EOL;