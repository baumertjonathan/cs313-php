<?php
	session_start();
	
	$items = $_SESSION['items'];
	$cost = $_SESSION['cost'];
	$arrlength = count($items);

	if(isset($_POST['street'])){
	$street= $_POST['street'];
	$_SESSION['street'] = $street;
	}
	if(isset($_POST['state'])){
	$state= $_POST['state'];
	$_SESSION['state'] = $state;
	}
	if(isset($_POST['zip'])){
	$zip= $_POST['zip'];
	$_SESSION['zip'] = $zip;
	}
	if(isset($_POST['city'])){
	$city = $_POST['city'];
	$_SESSION['city'] = $city;
	}


	for($x = 0; $x < $arrlength; $x++){
	echo $items[$x];
	echo "<br>";
	}
	echo "cost: $" . $cost;

?>
<head></head>
<body>
	<p>Please enter your address information:</p>
	<form method="post" action="shoppingcartCart.php">
	<input type="text" name="street" placeholder="street address">
	<input type="text" name="city" placeholder="city">
	<input type="text" name="state" placeholder="state">
	<input type="text" name="zip" placeholder="zip code">
	<input type="submit" value="submit">
	</form>
	<p><a href=https://mighty-journey-34749.herokuapp.com/shoppingcartConfirm.php>confirm your order</a></p>
</body>