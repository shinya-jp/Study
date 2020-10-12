<?php

$colors = ["Red", "Green", "Blue"];
for ($i = 0; $i < count($colors); $i++) { 
	$sub = substr($colors[$i], 0, 1);
	echo $sub;
}