<?php
$names = ["Andy", "Betty", "Carol"];
// 指定した要素番号を変更する
$names[1] = "Dave";


// 存在しない要素番号を指定すると、指定した要素番号で追加される
$names[5] = "Jack";

var_dump($names); # 0 Andy, 1 Dave, 2 Carol, 5 Jack

