<?php
// 比較演算子の評価結果は論理型データ(true,false)になる
// $apple = 100;
// $banana = 200;
// $result = $apple > $banana; $appleのほうが大きい
// var_dump($result); #bool(false)

// $apple = 100;
// $banana = 200;
// $result = $apple < $banana; $bananaのほうが大きい
// var_dump($result); #bool(true)

// $apple = 100;
// $banana = 200;
// $result = $apple == $banana; #等しいか
// var_dump($result); #bool(false)

$apple = 100;
$banana = 200;
$result = $apple != $banana; #異なるものか
var_dump($result); #bool(true)