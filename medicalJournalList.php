<?php
require 'dbconnect.php';

$sql = "SELECT * FROM MedicalJournals ORDER BY title";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
echo "<table border=1 >";
echo "<tr><th>Title</th><th>ISSN</th><th>Product ID</th><th>Change History</tr>";
while($s = $result->fetch_assoc()) {

    echo "<tr>";
    echo "<td>" . $s["title"] . "</td>";
    echo "<td>" . $s["issn"] . "</td>";
    echo "<td>" . $s["productID"] . "</td>";
    echo "<td>" . $s["changeHistory"] . "</td>";
    echo "<td>";
    echo "<a href='delMedicalJournalSRV.php?productID=" . $s['productID'] . "'>Delete</a> ";
    echo "<a href='editMedicalJournalCLT.php?productID=" . $s['productID'] ."'>Edit</a>";
    echo "</td>";
    echo "</tr>";
}

echo "</table>";
?>
<a href="addMedicalJournalCLT.htm">Add New</a>