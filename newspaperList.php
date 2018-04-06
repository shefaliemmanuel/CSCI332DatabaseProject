<?php
require 'dbconnect.php';

$sql = "SELECT * FROM Newspapers ORDER BY title";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
echo "<table border=1 >";
echo "<tr><th>Title</th><th>City</th><th>Years Of Coverage</th><th>Collection</th><th>ID</tr>";
while($s = $result->fetch_assoc()) {

    echo "<tr>";
    echo "<td>" . $s["title"] . "</td>";
    echo "<td>" . $s["city"] . "</td>";
    echo "<td>" . $s["yearsOfCoverage"] . "</td>";
    echo "<td>" . $s["collection"] . "</td>";
    echo "<td>" . $s["id"] . "</td>";
    echo "<td>";
    echo "<a href='delNewspaperSRV.php?id=" . $s['id'] . "'>Delete</a> ";
    echo "<a href='editNewspaperCLT.php?id=" . $s['id'] . "'>Edit</a>";
    echo "</td>";
    echo "</tr>";
}

echo "</table>";
?>
<a href="addNewspaperCLT.htm">Add New</a>