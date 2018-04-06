<?php
require 'dbconnect.php';

$trackName = $_REQUEST['trackName'];
$artist = $_REQUEST['artist'];
$albumName = $_REQUEST['albumName'];
$id = $_REQUEST['id'];
$discNumber = $_REQUEST['discNumber'];
$trackNumber = $_REQUEST['trackNumber'];
$spotifyURL = $_REQUEST['spotifyURL'];

$sql = "UPDATE Music SET trackName = '" . $trackName . "',artist = '" . $artist . "',albumName = '" . $albumName . "',discNumber = '" . $discNumber . "',trackNumber = '" . $trackNumber . "',spotifyURL = '" . $spotifyURL . "' WHERE id = '" . $id . "'";

echo 'hello' . $title;

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
?>

<script>window.location = 'musicList.php';</script>