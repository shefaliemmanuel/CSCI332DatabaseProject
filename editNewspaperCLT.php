<?php
include "dbconnect.php";
$sql = "SELECT * FROM Newspapers WHERE id = '" . $_REQUEST['id']."'";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

$s = $result->fetch_assoc();
$title = $_REQUEST['title'];
$city = $_REQUEST['city'];
$yearsOfCoverage = $_REQUEST['yearsOfCoverage'];
$collection = $_REQUEST['collection'];
$id = $_REQUEST['id'];

?>
<form action="editNewspaperSRV.php" method="get">
    <input type="hidden" name="key" value="<?php echo $key?>" />
    Title:<input type="text" name="title" value="<?php echo $s['title']?>"/></br>
    city:<input type="text" name="city" value="<?php echo $s['city']?>"/></br>
    yearsOfCoverage:<input type="text" name="yearsOfCoverage" value="<?php echo $s['yearsOfCoverage']?>"/></br>
    collection:<input type="text" name="collection" value="<?php echo $s['collection']?>"/></br>
    id:<input type="text" name="id" value="<?php echo $s['id']?>"/></br>
    <input type="submit" value="Save"/>
</form>