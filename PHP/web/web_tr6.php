<?php
 $subject = $_GET["subject"];
 $fp = fopen("scores.csv", "r");
 $scores = [];
 // １行のデータを配列として受け取る
 $line = fgetcsv($fp);
 while ($line !== false) {
 	// subjectとlineの０番目が同じのとき
 	if ($subject === $line[0]) {
 		$scores[] = $line;
 	}
 	$socres[] = $line;
 	// 次の行を読み込むため
 	$line = fgetcsv($fp);
 }
 fclose($fp)

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Sample</title>
</head>
<body>
	<h3>Scores</h3>
	<hr>
	<h3>Scores</h3>
	<hr>
	<table border="1">
		<tr>
			<th>subject</th>
			<th>Name</th>
			<th>Score</th>
		</tr>
		<?php for ($i=0; $i < count($scores); $i++) { ?>
		<tr>
			<td><?php echo $scores[$i][0]; ?></td>
			<td><?php echo $scores[$i][1]; ?></td>
			<td><?php echo $scores[$i][2]; ?></td>
		</tr>
		<?php } ?>
	</table>

</body>
</html>