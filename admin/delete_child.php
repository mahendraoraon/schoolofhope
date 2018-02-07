<?php
include("include/db.php");
$childId=$_GET[id];
$mysqli->query("DELETE from soh_child WHERE id= '$childId'");
header('Location: child_list.php');
?>