<?php
$student = ["name" => "Andy", "age" => 20];
// 要素の削除
unset($student["age"]);

var_dump($student);