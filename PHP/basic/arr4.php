<?php
$array = ["Andy", "Bety", "Carol"];

// array_slice 配列の一部を展開する
// array_slice(変数, 開始位置, 必要なら終わり位置);
$sliced_array = array_slice($array, 1, 1);

print_r($sliced_array);