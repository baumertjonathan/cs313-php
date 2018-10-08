<?php
	session_start();
	
	$items = $_SESSION['items'];
	$cost = $_SESSION['cost'];
	$arrlength = count($items);

	$street = $_SESSION['street'];
	$city = $_SESSION['city'];
	$state = $_SESSION['state'];
	$zip = $_SESSION['zip'];

	//display section
	echo "Order Confirmed"
	echo "Items purchaced: "
	
	for($x = 0; $x < $arrlength; $x++){
	echo $items[$x];
	echo "<br>";
	}
	
	echo "cost: $" . $cost;
	echo "<br>";
	echo "to be delivered to: ";
	echo $street . ", " . $city . ", " $state . " " . $zip;

	



?>