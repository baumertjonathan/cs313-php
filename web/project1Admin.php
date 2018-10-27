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
<?php
echo '<h2>Floors</h2>';
	
foreach ($db->query('SELECT location, shine_score, scuff_score, dirt_score, tile_score FROM floors') as $row)
{
  echo 'floor: ' . $row['location'];
  echo ' shine score: ' . $row['shine_score'];
  echo ' scuff score: ' . $row['scuff_score'];
  echo ' dirt score: ' . $row['dirt_score'];
  echo ' tile score: ' . $row['tile_score'];
  echo '<br/>';
}

echo '<h2>Submissions</h2>';

foreach ($db->query('SELECT username, location, shine_score, scuff_score, dirt_score, tile_scor FROM submissions') as $row)
{
	echo 'username: ' . $row['username'];
	echo 'floor: ' . $row['location'];
 	 echo ' shine score: ' . $row['shine_score'];
	  echo ' scuff score: ' . $row['scuff_score'];
	  echo ' dirt score: ' . $row['dirt_score'];
 	 echo ' tile score: ' . $row['tile_score'];
}


?>	
	
</div>
</body>