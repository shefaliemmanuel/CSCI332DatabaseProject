<?php
require 'dbconnect.php';

$sql = "SELECT * FROM Magazines ORDER BY title";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
echo "<table border=1 >";
echo "<tr><th>Title</th><th>ISSN</th><th>Genre</th><th>Full Text Start Date</th><th>Full Text Start Date</th><th>Frequency</th><th>Publisher</th><th>Country</th><th>Language</th><th>Primary Subject</th><th>Title ID</tr>";
while($s = $result->fetch_assoc()) {

    echo "<tr>";
    echo "<td>" . $s["title"] . "</td>";
    echo "<td>" . $s["issn"] . "</td>";
    echo "<td>" . $s["genre"] . "</td>";
    echo "<td>" . $s["fullTextStartDate"] . "</td>";
    echo "<td>" . $s["fullTextEndDate"] . "</td>";
    echo "<td>" . $s["frequency"] . "</td>";
    echo "<td>" . $s["publisher"] . "</td>";
    echo "<td>" . $s["country"] . "</td>";
    echo "<td>" . $s["language"] . "</td>";
    echo "<td>" . $s["primarySubject"] . "</td>";
    echo "<td>" . $s["titleID"] . "</td>";
    echo "<td>";
    echo "<a href='delMagazineSRV.php?titleID=" . $s['titleID'] . "'>Delete</a> ";
    echo "<a href='editMagazineCLT.php?titleID=" . $s['titleID'] . "'>Edit</a>";
    echo "</td>";
    echo "</tr>";
}

echo "</table>";
?>

<a href="addMagazineCLT.htm">Add New</a>