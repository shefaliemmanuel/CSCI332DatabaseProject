<?php
include "dbconnect.php";
$sql = "SELECT * FROM MedicalJournals WHERE productID = '" . $_REQUEST['productID']."'";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

$s = $result->fetch_assoc();
$title = $_REQUEST['title'];
$issn = $_REQUEST['issn'];
$productID = $_REQUEST['productID'];
$changeHistory = $_REQUEST['changeHistory'];

?>
<form action="editMedicalJournalSRV.php" method="get">
    <input type="hidden" name="key" value="<?php echo $key?>" />
    Title:<input type="text" name="title" value="<?php echo $s['title']?>"/></br>
    issn:<input type="text" name="issn" value="<?php echo $s['issn']?>"/></br>
    Product ID:<input type="text" name="productID" value="<?php echo $s['productID']?>"/></br>
    Change History:<input type="text" name="changeHistory" value="<?php echo $s['changeHistory']?>"/></br>
    <input type="submit" value="Save"/>
</form>