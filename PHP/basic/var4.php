<?php
// phpは大文字小文字を区別する
$name = "Andy";
$Name = "Bttey";
$NAME = "Carol";
// 一般的なのは$name全て小文字

echo $name;
echo $Name;
echo $NAME;

$firstName = "Andy"; #キャメルケース(Javaではこちら)
$first_name = "Andy"; #スネークケース(Rubyはこちら)
// PHPではどちらか一つを使う