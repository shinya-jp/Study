<?php
 $x = (integer)filter_input(INPUT_POST, "x");
 $y = (integer)filter_input(INPUT_POST, "y");


 $total = $x + $y;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Sample</title>
</head>
<body>
	<h3>Calc</h3>
	<hr>
	<p>
		<?php echo $x; ?>
		+
		<?php echo $y; ?>
		=
		<?php echo $total; ?>
	</p>
</body>
</html>