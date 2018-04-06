<?php
include "dbconnect.php";
$sql = "SELECT * FROM Music WHERE id = '" . $_REQUEST['id']."'";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

$s = $result->fetch_assoc();
$trackName = $_REQUEST['trackName'];
$artist = $_REQUEST['artist'];
$albumName = $_REQUEST['albumName'];
$id = $_REQUEST['id'];
$discNumber = $_REQUEST['discNumber'];
$trackNumber = $_REQUEST['trackNumber'];
$spotifyURL = $_REQUEST['spotifyURL'];

?>
<form action="editMusicSRV.php" method="get">
    <input type="hidden" name="key" value="<?php echo $key?>" />
    trackName:<input type="text" name="trackName" value="<?php echo $s['trackName']?>"/></br>
    artist:<input type="text" name="artist" value="<?php echo $s['artist']?>"/></br>
    albumName:<input type="text" name="albumName" value="<?php echo $s['albumName']?>"/></br>
    id:<input type="text" name="id" value="<?php echo $s['id']?>"/></br>
    discNumber:<input type="text" name="discNumber" value="<?php echo $s['discNumber']?>"/></br>
    trackNumber:<input type="text" name="trackNumber" value="<?php echo $s['trackNumber']?>"/></br>
    spotifyURL:<input type="text" name="spotifyURL" value="<?php echo $s['spotifyURL']?>"/></br>
    <input type="submit" value="Save"/>
</form>