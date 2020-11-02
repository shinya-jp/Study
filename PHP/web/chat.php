<?php
$file = "chat.txt";
$messages = file($file, FILE_IGNORE_NEW_LINES);
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$message = (string)filter_input(INPUT_POST, "message");
	if ($message !== "") {
		$messages[] = $message;
		file_put_contents($file, $message . PHP_EOL, FILE_APPEND | LOCK_EX);
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
	<h3>Chat</h3>
	<hr>
	<form action="chat.php" method="post">
		<input type="text" name="message">
		<input type="submit" name="send">
	</form>
	<ul>
		<?php for ($i=0; $i < count($messages); $i++) { ?>
			<!-- htmlspecialchars - 文字列として受け取る -->
		<li><?php echo htmlspecialchars($messages[$i]); ?></li>
		<?php } ?>
 	</ul>
</body>
</html>