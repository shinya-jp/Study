<?php
 $subject = $_POST["subject"];
 $name = $_POST["name"];
 $score = $_POST["score"];

// socre.csvに保存する準備
 $line = "$subject,$name,$score" . PHP_EOL;
 // 書き込む  |を使用すると定数を組み追わせられる
 file_put_contents("scores.csv", $line, FILE_APPEND |
 LOCK_EX);

 header("Location: web_tr3.php");
?>