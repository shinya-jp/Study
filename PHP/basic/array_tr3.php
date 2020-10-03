<?php
$colors = ["Red", "Green", "Blue"];

// TODO $colorsからRed削除

array_splice($colors, 0, 1);

var_dump($colors);