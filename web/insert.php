<?php

//connect with database
require('dbConnect.php');
$db = get_db();

$floor = htmlspecialchars($_POST['floors']);
$shineScore = htmlspecialchars($_POST['shineScore']);
$scuffScore = htmlspecialchars($_POST['scuffScore']);
$dirtScore = htmlspecialchars($_POST['dirtScore']);
$tileScore = htmlspecialchars($_POST['tileScore']);
$username = htmlspecialchars($_POST['username']);


//$stmt = $db->prepare('INSERT INTO submissions(username, location, shine_score, scrff_score, dirt_score, tile_score) VALUES ($username, $floor, $shineScore, $scuffScore, $dirtScore, $tileScore);');
//$stmt = $db->prepare('INSERT INTO floors(location, shine_score, scuff_score, dirt_score, tile_score) VALUES ($floor, $shineScore, $scuffScore, $dirtScore, $tileScore);');

//$stmt = $db->prepare('INSERT INTO submissions(username, location, shine_score, scrff_score, dirt_score, tile_score) VALUES (:username, :floor, :shineScore, :scuffScore, :dirtScore, :tileScore);');
//$stmt = $db->prepare('INSERT INTO floors(location, shine_score, scuff_score, dirt_score, tile_score) VALUES (:floor, :shineScore, :scuffScore, :dirtScore, :tileScore);');
//$stmt->bindValue(':floor', $floor, PDO::PARAM_STR);
//$stmt->bindValue(':shineScore', $shineScore, PDO::PARAM_INT);
//$stmt->bindValue(':scuffScore', $scuffScore, PDO::PARAM_INT);
//$stmt->bindValue(':dirtScore', $dirtScore, PDO::PARAM_INT);
//$stmt->bindValue(':tileScore', $tileScore, PDO::PARAM_INT);
//$stmt->bindValue(':username', $username, PDO::PARAM_STR);

//$stmt->execute();


?>

<head>
	<title>Project 1</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

<ul>
	<li><a href=https://mighty-journey-34749.herokuapp.com/hello.html>Home Page</a></li>
	<li><a href=https://mighty-journey-34749.herokuapp.com/shoppingcart.php>Shopping Cart</a></li>
	<li><a href=https://mighty-journey-34749.herokuapp.com/hello.html>...</a></li>
	<li><a href=https://mighty-journey-34749.herokuapp.com/hello.html>...</a></li>
	<li><a href=https://mighty-journey-34749.herokuapp.com/hello.html>...</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
	<h2>Project 1</h2>
<?php
echo 'submission received for ';
echo $floor;
echo 'scoring';
echo $shineScore;
echo $dirtScore;
echo $scuffScore;
echo $tileScore;
?>	
<br>
<a href=https://mighty-journey-34749.herokuapp.com/project1Display.php>return to project 1</a>
	
</div>
</body>