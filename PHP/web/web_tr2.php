<?php
$scores = [90, 72, 58, 80];
$total = array_sum($scores);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>PHP Sample</title>
</head>
<body>
<h1>Scores</h1>
<hr>
<ul>
	<?php for ($i = 0; $i < count($scores); $i++) { ?>
	<li><?php echo $scores[$i]; ?></li>
	<?php } ?>
</ul>
<h3>Total: <?php echo $total; ?> </h3>
</body>
</html>