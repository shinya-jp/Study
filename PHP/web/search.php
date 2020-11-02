<?php
// $name = $_GET["name"];

// $name = null;
// // 変数データがあるか確認
// if (!isset($_GET["name"])) {
// 	$name = null;
// 	// 文字列データか確認
// }else if (!is_string($_GET["name"])) {
// 	$name = false;
// 	// 上記をスルーしたときのみnameデータ（検索単語）を送信する
// } else {
// 	$name = $_GET["name"];
// }

// 上記のコードを関数を使うと
$name = (string)filter_input(INPUT_GET, "name");


$names = file("names.txt", FILE_IGNORE_NEW_LINES);

$searched_names = [];

if ($name !== "") {
	for ($i = 0; $i < count($names); $i++) { 
		if (strpos($names[$i], $name) !== false) {
			$searched_names[] = $names[$i];
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Sample</title>
</head>
<body>
	<h3>Search</h3>
	<hr>
	<ul>
		<?php for ($i=0; $i < count($searched_names); $i++) { ?>
		
		<li><?php echo $searched_names[$i]; ?></li>
		
		<?php } ?>
	</ul>
</body>
</html>