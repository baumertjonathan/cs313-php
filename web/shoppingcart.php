<?php
	session_start();
	$item = array();
	if(isset($_POST['sillyspud'])){
	array_push($item, "silly spud");
	echo $item[0];
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
		
			<p>silly spud        $5 <input type="checkbox" name="sillyspud" value="sillyspud"></p>
			<p>round russett     $2 <input type="checkbox" name="roundrussett" value="roundrussett"></p>
			<p>tremendous tater  $7 <input type="checkbox" name="tremendoustater" value="tremendoustater"></p>
			<p>tasty tuber       $3 <input type="checkbox" name="tastytuber" value="tastytuber"></p>
			<p>yucky yam         $1 <input type="checkbox" name="yuckyyam" value="yuckyyam"></p>	
		
		<input type="submit" value="submit">
	</form>
	
</div>

