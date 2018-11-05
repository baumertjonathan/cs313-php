<?php

//connect with database
//require('dbConnect.php');
//$db = get_db();



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




//avoid messy inputs
$floor = htmlspecialchars($_POST['floors']);
$shineScore = htmlspecialchars($_POST['shineScore']);
$scuffScore = htmlspecialchars($_POST['scuffScore']);
$dirtScore = htmlspecialchars($_POST['dirtScore']);
$tileScore = htmlspecialchars($_POST['tileScore']);
$username = htmlspecialchars($_POST['username']);


$stmt = $db->prepare('INSERT INTO submissions(username, location, shine_score, scuff_score, dirt_score, tile_score) VALUES (:username, :floor, :shineScore, :scuffScore, :dirtScore, :tileScore);');

$stmt->bindValue(':floor', $floor, PDO::PARAM_STR);
$stmt->bindValue(':shineScore', $shineScore, PDO::PARAM_INT);
$stmt->bindValue(':scuffScore', $scuffScore, PDO::PARAM_INT);
$stmt->bindValue(':dirtScore', $dirtScore, PDO::PARAM_INT);
$stmt->bindValue(':tileScore', $tileScore, PDO::PARAM_INT);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);

$stmt = $db->prepare('INSERT INTO floors(location, shine_score, scuff_score, dirt_score, tile_score) VALUES (:floor, :shineScore, :scuffScore, :dirtScore, :tileScore);');

$stmt->execute();

?>

<head>
	<title>Project 1</title>
</head>
<body>

	<h2>Project 1</h2>
<?php
echo 'submission received for ';
echo $floor;
echo 'scoring ';
echo $shineScore;
echo $dirtScore;
echo $scuffScore;
echo $tileScore;
echo $username;

	foreach ($db->query('SELECT location, shine_score, scuff_score, dirt_score, tile_score FROM floors') as $row)
{
  echo 'floor: ' . $row['location'];
  echo ' shine score: ' . $row['shine_score'];
  echo ' scuff score: ' . $row['scuff_score'];
  echo ' dirt score: ' . $row['dirt_score'];
  echo ' tile score: ' . $row['tile_score'];
  echo '<br/>';
}

?>	
<a href=https://mighty-journey-34749.herokuapp.com/project1Display.php>return to project 1</a>
	

</body>