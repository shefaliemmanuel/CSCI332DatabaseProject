<?php
require 'dbconnect.php';
$title = $_REQUEST['title'];
$city = $_REQUEST['city'];
$yearsOfCoverage = $_REQUEST['yearsOfCoverage'];
$collection = $_REQUEST['collection'];
$id = $_REQUEST['id'];

$sql = "insert into Newspapers (title, city, yearsOfCoverage, collection, id) VALUES ('$title','$city','$yearsOfCoverage','$collection','$id')";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}


?>
<script>
    window.location = 'newspaperList.php';
</script>
