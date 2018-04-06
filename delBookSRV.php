<?php
include "dbconnect.php";
$sql = "delete from Books where isbn = '".$_REQUEST["isbn"]."'" ;

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
?>
<script>
    window.location='libraryList.php';
</script>
