<?php
include "dbconnect.php";
$sql = "SELECT * FROM Books WHERE isbn = '" . $_REQUEST['isbn']."'";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

$s = $result->fetch_assoc();
$title = $_REQUEST['title'];
$author = $_REQUEST['author'];
$publisher = $_REQUEST['publisher'];
$yearPublished = $_REQUEST['yearPublished'];
$genre = $_REQUEST['genre'];
$numberOfPages = $_REQUEST['numberOfPages'];
$isbn = $_REQUEST['isbn'];

?>
<form action="editBookSRV.php" method="get">
    <input type="hidden" name="key" value="<?php echo $key?>" />
    Title:<input type="text" name="title" value="<?php echo $s['title']?>"/></br>
    Author:<input type="text" name="author" value="<?php echo $s['author']?>"/></br>
    Publisher:<input type="text" name="publisher" value="<?php echo $s['publisher']?>"/></br>
    Year Published:<input type="text" name="yearPublished" value="<?php echo $s['yearPublished']?>"/></br>
    Genre:<input type="text" name="Genre" value="<?php echo $s['genre']?>"/></br>
    Number of Pages:<input type="text" name="numberOfPages" value="<?php echo $s['numberOfPages']?>"/></br>
    ISBN:<input type="text" name="ISBN" value="<?php echo $s['isbn']?>"/></br>
    <input type="submit" value="Save"/>
</form>