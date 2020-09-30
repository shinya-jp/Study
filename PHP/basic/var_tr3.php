<?php
$price = 100;
$count = 3;
$tax = 1.1;
$price = $price * $count;
$price = $price * $tax;
// ひとつのコードにすると
// $total = $price * $count * $tax;
// echo $total;
echo $price;