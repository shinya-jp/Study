<?php
// $_POST変数はスーパーグローバル変数と呼ばれる
// $_POST変数に送信されたパラメーター(idとpassword)が格納されている

$id = $_POST["id"];
$password = $_POST["password"];

$message = "NG";
if ($id === "Andy" && $password === "secret") {
	$message = "OK";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<title>PHP Sample</title>
</head>
<body>
 <h1>Login <?php echo $message; ?></h1>
</body>
</html>