<?php
include("admin/include/db.php");
#echo $childId = $_GET['childId'];
$result = $mysqli->query("SELECT * FROM soh_child WHERE id='2'");
#$row = $result->fetch_assoc();
$row   = mysqli_fetch_row($result);
print $row[1];
echo "<br>";
echo "Hello ";
var_dump($row);
?>

