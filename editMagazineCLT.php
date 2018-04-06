<?php
include "dbconnect.php";
$sql = "SELECT * FROM Magazines WHERE titleID = '" . $_REQUEST['titleID']."'";

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
$genre = $_REQUEST['genre'];
$fullTextStartDate = $_REQUEST['fullTextStartDate'];
$fullTextEndDate = $_REQUEST['fullTextEndDate'];
$frequency = $_REQUEST['frequency'];
$publisher = $_REQUEST['publisher'];
$country = $_REQUEST['country'];
$language = $_REQUEST['language'];
$primarySubject = $_REQUEST['primarySubject'];
$titleID = $_REQUEST['titleID'];

?>
<form action="editMagazineSRV.php" method="get">
    <input type="hidden" name="key" value="<?php echo $key?>" />
    Title:<input type="text" name="title" value="<?php echo $s['title']?>"/></br>
    ISSN:<input type="text" name="issn" value="<?php echo $s['issn']?>"/></br>
    Genre:<input type="text" name="genre" value="<?php echo $s['genre']?>"/></br>
    Full Text Start Date:<input type="text" name="fullTextStartDate" value="<?php echo $s['fullTextStartDate']?>"/></br>
    Full Text End Date:<input type="text" name="fullTextEndDate" value="<?php echo $s['fullTextEndDate']?>"/></br>
    Frequency:<input type="text" name="frequency" value="<?php echo $s['frequency']?>"/></br>
    Publisher:<input type="text" name="publisher" value="<?php echo $s['publisher']?>"/></br>
    Country:<input type="text" name="country" value="<?php echo $s['country']?>"/></br>
    Language:<input type="text" name="language" value="<?php echo $s['language']?>"/></br>
    Primary Subject:<input type="text" name="primarySubject" value="<?php echo $s['primarySubject']?>"/></br>
    Title ID:<input type="text" name="titleID" value="<?php echo $s['titleID']?>"/></br>
    <input type="submit" value="Save"/>
</form>