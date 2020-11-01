<!-- セッションにより追加PHPコード -->
<?php
session_start();
$id = $_SESSION["id"];
$time = $_SESSION["time"];
// isset関数を使うことで$_SESSION変数に指定したキー(id)が存在するか確認する
if (!isset($_SESSION["id"])) {
	header("Location: login.html");
	return;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Sample</title>
</head>
<body>
	<h3>Menu - Helloo <?php echo $id; ?> </h3>
	<h5>Login at <?php echo $time; ?></h5>
	<hr>
	<ul>
		<li><a href="logout.php" title="Logout">Logout</a></li>
	</ul>
</body>
</html>