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

$floor = $_POST('floor');
$shineScore = $_POST['shineScore'];
$scuffScore = $_POST['scuffScore'];
$dirtScore = $_POST['dirtScore'];
$tileScore = $_POST['tileScore'];
$username = $_POST['username'];

$sql = "INSERT INTO submissions (username, location, shine_score, scruff_score, dirt_score tile_score) VALUES ('$username', '$floor', '$shineScore', '$scruffScore', 'dirtScore', 'tileScore');

$sql = "INSERT INTO floors(location, shine_score, scruff_score, dirt_score tile_score) VALUES ('$floor', '$shineScore', '$scruffScore', 'dirtScore', 'tileScore');
?>