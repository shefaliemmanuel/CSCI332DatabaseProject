<?php
require 'dbconnect.php';
$title = $_REQUEST['title'];
$issn = $_REQUEST['issn'];
$productID = $_REQUEST['productID'];
$changeHistory = $_REQUEST['changeHistory'];

$sql = "insert into MedicalJournals (title, issn, productID, changeHistory) VALUES ('$title','$issn','$productID','$changeHistory')";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}


?>
<script>
    window.location = 'medicalJournalList.php';
</script>
