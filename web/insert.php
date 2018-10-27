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

$floor = $_POST['floors'];
$shineScore = $_POST['shineScore'];
$scuffScore = $_POST['scuffScore'];
$dirtScore = $_POST['dirtScore'];
$tileScore = $_POST['tileScore'];
$username = $_POST['username'];

$stmt = $db->prepare('INSERT INTO submissions (username, location, shine_score, scruff_score, dirt_score tile_score) VALUES (:username, :floor, :shineScore, :scruffScore, :dirtScore', :tileScore);');
$stmt = $db->prepare('INSERT INTO floors (location, shine_score, scruff_score, dirt_score tile_score) VALUES (:floor, :shineScore, :scruffScore, :dirtScore', :tileScore);');
$stmt->execute();

//$sql = "INSERT INTO submissions (username, location, shine_score, scruff_score, dirt_score tile_score) VALUES ('$username', '$floor', '$shineScore', '$scruffScore', 'dirtScore', 'tileScore');

//$sql = "INSERT INTO floors(location, shine_score, scruff_score, dirt_score tile_score) VALUES ('$floor', '$shineScore', '$scruffScore', 'dirtScore', 'tileScore');

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

?>	
<br>
<a href=https://mighty-journey-34749.herokuapp.com/project1Display.html>return to project 1</a>
	
</div>
</body>