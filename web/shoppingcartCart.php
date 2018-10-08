<?php
	session_start();
	
	$items= $_SESSION['items'];
	$arrlength = count($items);

	for($x = 0; $x < $arrlength; $x++){
	echo $items[$x];
	echo "<br>";
	}
?>