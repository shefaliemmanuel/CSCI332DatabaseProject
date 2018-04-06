<?php
require 'dbconnect.php';
$trackName = $_REQUEST['trackName'];
$artist = $_REQUEST['artist'];
$albumName = $_REQUEST['albumName'];
$id = $_REQUEST['id'];
$discNumber = $_REQUEST['discNumber'];
$trackNumber = $_REQUEST['trackNumber'];
$spotifyURL = $_REQUEST['spotifyURL'];

$sql = "insert into Books (trackName, artist, albumName, id, discNumber, trackNumber, spotifyURL) VALUES ('$trackName','$artist','$albumName','$id','$discNumber','$trackNumber','$spotifyURL')";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

?>
<script>
    window.location = 'musicList.php';
</script>