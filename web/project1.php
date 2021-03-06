<?php
//connect with database
try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}



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

<a href=https://mighty-journey-34749.herokuapp.com/project1Display.php>View ratings</a>

<a href=https://mighty-journey-34749.herokuapp.com/project1Submit.php>submit a rating</a>

<a href=https://mighty-journey-34749.herokuapp.com/project1Admin.php>Admin page</a>
</div>
</body>