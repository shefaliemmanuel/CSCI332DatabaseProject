<?php
require 'dbconnect.php';

$title = $_REQUEST['title'];
$author= $_REQUEST['author'];
$publisher= $_REQUEST['publisher'];
$yearPublished= $_REQUEST['yearPublished'];
$genre= $_REQUEST['genre'];
$numberOfPages= $_REQUEST['numberOfPages'];
$isbn= $_REQUEST['ISBN'];

$sql = "UPDATE Books SET title = '" . $title . "', author = '" . $author . "', publisher = '" . $publisher . "', yearPublished = '" . $yearPublished . "', genre = '" . $genre . "', numberOfPages = '" . $numberOfPages . "' WHERE isbn = '" . $isbn . "'";

//echo 'hello' . $title;

//die($sql);

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
?>

<script>window.location = 'libraryList.php';</script>