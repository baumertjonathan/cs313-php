<?php
	session_start();
	
	$items=array();


	echo "-------------------------------" $items[0];

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
		
			<p>silly spud        $5 <input type="checkbox" name="silly spud" value="add to cart"></p>
			<p>round russett     $2 <input type="checkbox" name="round russett" value="add to cart"></p>
			<p>tremendous tater  $7 <input type="checkbox" name="tremendous tater" value="add to cart"></p>
			<p>tasty tuber       $3 <input type="checkbox" name="tasty tuber" value="add to cart"></p>
			<p>yucky yam         $1 <input type="checkbox" name="yucky yam" value="add to cart"></p>	
		
		<input type="submit" value="submit">
	</form>
	
</div>

