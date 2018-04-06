<?php
require 'dbconnect.php';

$title = $_REQUEST['title'];
$issn = $_REQUEST['issn'];
$productID = $_REQUEST['productID'];
$changeHistory = $_REQUEST['changeHistory'];
$sql = "UPDATE MedicalJournals SET title = '" . $title . "', issn = '" . $issn . "', changeHistory = '" . $changeHistory . "' WHERE productID = '" . $productID . "'";

echo 'hello' . $title;

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
?>

<script>window.location = 'medicalJournalList.php';</script>