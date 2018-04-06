<?php
require 'dbconnect.php';

$sql = "SELECT * FROM Books ORDER BY titleORDER BY title";

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
    echo "<td>" . $s["author"] . "</td>";
    echo "<td>" . $s["publisher"] . "</td>";
    echo "<td>" . $s["yearPublished"] . "</td>";
    echo "<td>" . $s["genre"] . "</td>";
    echo "<td>" . $s["numberOfPages"] . "</td>";
    echo "<td>" . $s["isbn"] . "</td>";
    echo "<td>";
    echo "<a href='delBookSRV.php?isbn=" . $s['isbn'] . "'>Delete</a> ";
    echo "<a href='editBookCLT.php?isbn=" . $s['isbn'] . "'>Edit</a>";
    echo "</td>";
    echo "</tr>";
}

echo "</table>";

?>
<a href="addBookCLT.htm">Add New</a>