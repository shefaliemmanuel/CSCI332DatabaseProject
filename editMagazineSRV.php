<?php
require 'dbconnect.php';

$title = $_REQUEST['title'];
$issn = $_REQUEST['issn'];
$genre = $_REQUEST['genre'];
$fullTextStartDate = $_REQUEST['fullTextStartDate'];
$fullTextEndDate = $_REQUEST['fullTextEndDate'];
$frequency = $_REQUEST['frequency'];
$publisher = $_REQUEST['publisher'];
$country = $_REQUEST['country'];
$language = $_REQUEST['language'];
$primarySubject = $_REQUEST['primarySubject'];
$titleID = $_REQUEST['titleID'];

$sql = "UPDATE Magazines SET title = '" . $title . "',issn = '" . $issn . "',genre = '" . $genre . "',fullTextStartDate = '" . $fullTextStartDate . "',fullTextEndDate = '" . $fullTextEndDate . "',frequency = '" . $frequency . "',publisher = '" . $publisher . "',country = '" . $country . "',language = '" . $language . "', primarySubject = '" . $primarySubject . "' WHERE titleID = '" . $titleID . "'";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
?>

<script>window.location = 'magazineList.php';</script>