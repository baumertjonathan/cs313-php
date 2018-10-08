<?php
	session_start();
	
	$items = $_SESSION['items'];
	$cost = $_SESSION['cost'];
	$arrlength = count($items);

	for($x = 0; $x < $arrlength; $x++){
	echo $items[$x];
	echo "<br>";
	}
	echo "cost: $" $cost;
?>