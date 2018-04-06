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

$sql = "insert into Movies (title, genres, year, releaseDate, directors, IMDbRating, url, id) VALUES ('$title','$genres','$year','$releaseDate','$directors','$IMDbRating','$url','$id')";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}


?>
<script>
    window.location = 'movieList.php';
</script>
