<?php
	session_start();
	
	$items=array();
	if (isset($_SESSION['silly spud'])){
	array_push($items, "silly spud");
	}
	if (isset($_SESSION['round russett'])){
	array_push($items, "round russett");
	}
	if (isset($_SESSION['tremendous tater'])){
	array_push($items, "tremendous tater");
	}
	if (isset($_SESSION['tasty tuber'])){
	array_push($items, "tasty tuber");
	}
	if (isset($_SESSION['yucky yam'])){
	array_push($items, "yucky yam");
	}
?>

<head>
	<title>Shopping Page</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>


<ul>
	<li><a href=https://mighty-journey-34749.herokuapp.com/hello.html>Home Page</a></li>
	<li><a href=https://mighty-journey-34749.herokuapp.com/hello.html>Assignemnt 2 coming soon!</a></li>
	<li><a href=https://mighty-journey-34749.herokuapp.com/hello.html>...</a></li>
	<li><a href=https://mighty-journey-34749.herokuapp.com/hello.html>...</a></li>
	<li><a href=https://mighty-journey-34749.herokuapp.com/hello.html>...</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
	<h2>Shopping Options</h2>
	
	<form method="post" action="shoppingcart.php">
		<ul>
			<li>silly spud        $5 <input type="checkbox" name="silly spud" value="add to cart"></li>
			<li>round russett     $2 <input type="checkbox" name="round russett" value="add to cart"></li>
			<li>tremendous tater  $7 <input type="checkbox" name="tremendous tater" value="add to cart"></li>
			<li>tasty tuber       $3 <input type="checkbox" name="tasty tuber" value="add to cart"></li>
			<li>yucky yam         $1 <input type="checkbox" name="yucky yam" value="add to cart"></li>	
		</ul>
		<input type="submit" value="submit">
	</form>
	
</div>

