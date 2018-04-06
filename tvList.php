<?php
require 'dbconnect.php';

$sql = "SELECT * FROM TV ORDER BY title";

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
    echo "<td>" . $s["title"] . "</td>";
    echo "<td>" . $s["genres"] . "</td>";
    echo "<td>" . $s["year"] . "</td>";
    echo "<td>" . $s["releaseDate"] . "</td>";
    echo "<td>" . $s["directors"] . "</td>";
    echo "<td>" . $s["IMDbRating"] . "</td>";
    echo "<td>" . $s["url"] . "</td>";
    echo "<td>" . $s["id"] . "</td>";
    echo "<td>";
    echo "<a href='delTVSRV.php?id=" . $s['id'] . "'>Delete</a> ";
    echo "<a href='editTVCLT.php?id=" . $s['id'] . "'>Edit</a>";
    echo "</td>";
    echo "</tr>";
}

echo "</table>";
?>
<a href="addTVCLT.htm">Add New</a>