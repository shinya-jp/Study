<?php
// file_get_contents ファイルの内容を全て文字れるに読み込む

$file = "hello.txt"; #faile名指定
$str = file_get_contents($file); #$strに$fileの中身を代入する
echo $str;