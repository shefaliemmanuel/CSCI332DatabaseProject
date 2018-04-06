<?php
include "dbconnect.php";
$sql = "SELECT * FROM TV WHERE id = '" . $_REQUEST['id']."'";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

$s = $result->fetch_assoc();
$title = $_REQUEST['title'];
$genres = $_REQUEST['genres'];
$year = $_REQUEST['year'];
$releaseDate = $_REQUEST['releaseDate'];
$directors = $_REQUEST['directors'];
$IMDbRating = $_REQUEST['IMDbRating'];
$url = $_REQUEST['url'];
$id = $_REQUEST['id'];

?>
<form action="editTVSRV.php" method="get">
    <input type="hidden" name="key" value="<?php echo $key?>" />
    Title:<input type="text" name="title" value="<?php echo $s['title']?>"/></br>
    Genres:<input type="text" name="genres" value="<?php echo $s['genres']?>"/></br>
    Year:<input type="text" name="year" value="<?php echo $s['year']?>"/></br>
    Release Date:<input type="text" name="releaseDate" value="<?php echo $s['releaseDate']?>"/></br>
    Directors:<input type="text" name="directors" value="<?php echo $s['directors']?>"/></br>
    IMDbRating:<input type="text" name="IMDbRating" value="<?php echo $s['IMDbRating']?>"/></br>
    URL:<input type="text" name="url" value="<?php echo $s['url']?>"/></br>
    ID:<input type="text" name="id" value="<?php echo $s['id']?>"/></br>
    <input type="submit" value="Save"/>
</form>