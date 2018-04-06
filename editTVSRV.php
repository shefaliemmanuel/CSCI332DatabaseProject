<?php
require 'dbconnect.php';

$title = $_REQUEST['title'];
$genres = $_REQUEST['genres'];
$year = $_REQUEST['year'];
$releaseDate = $_REQUEST['releaseDate'];
$directors = $_REQUEST['directors'];
$IMDbRating = $_REQUEST['IMDbRating'];
$url = $_REQUEST['url'];
$id = $_REQUEST['id'];

$sql = "UPDATE TV SET title = '" . $title . "', genres = '" . $genres . "', year = '" . $year . "', releaseDate = '" . $releaseDate . "', directors = '" . $directors . "', IMDbRating = '" . $IMDbRating . "', url = '" . $url . "' WHERE id = '" . $id . "'";

echo 'hello' . $title;

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
?>

<script>window.location = 'tvList.php';</script>