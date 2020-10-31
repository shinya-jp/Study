<?php
// $_POST変数はスーパーグローバル変数と呼ばれる
// $_POST変数に送信されたパラメーター(idとpassword)が格納されている

$id = $_POST["id"];
$password = $_POST["password"];

if ($id === "Andy" && $password === "secret") {
	// リダイレクト先を指定
	header("Location: menu.php");
} else {
	// ログインが失敗したらまたログインページ
	header("Location: login.html");
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