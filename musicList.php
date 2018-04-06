<?php
require 'dbconnect.php';

$sql = "SELECT * FROM Music ORDER BY trackName";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
echo "<table border=1 >";
echo "<tr><th>Title</th><th>Author</th><th>Publisher</th><th>Year Published</th><th>Genre</th><th>Number of Pages</th><th>ISBN</tr>";
while($s = $result->fetch_assoc()) {

    echo "<tr>";
    echo "<td>" . $s["trackName"] . "</td>";
    echo "<td>" . $s["artist"] . "</td>";
    echo "<td>" . $s["albumName"] . "</td>";
    echo "<td>" . $s["idPrimary"] . "</td>";
    echo "<td>" . $s["discNumber"] . "</td>";
    echo "<td>" . $s["trackNumber"] . "</td>";
    echo "<td>" . $s["spotifyURL"] . "</td>";
    echo "<td>";
    echo "<a href='delMusicSRV.php?id=" . $s['id'] . "'>Delete</a> ";
    echo "<a href='editMusicCLT.php?id=" . $s['id'] . "'>Edit</a>";
    echo "</td>";
    echo "</tr>";
}

echo "</table>";
?>
<a href="addMusicCLT.htm">Add New</a>