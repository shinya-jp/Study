<?php
session_start();

$_SESSION = [];

// ini_get cookieが使われているか確認
if (ini_get("session.use_cookies")) {
	$params = session_get_cookie_paramas(); #ドメインなどのデータを保持
	setcookie(session_name(), '', time() - 42000,
				$params["path"], $params["domain"],
				$params["secure"], $params[httponly]);
}

// セッションデータ(サーバーとphpファイいるなどの)の紐付けを解除
session_destroy();
header("Location: login.html")
?>

