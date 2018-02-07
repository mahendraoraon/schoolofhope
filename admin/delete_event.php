<?php
include("include/db.php");
$eventId=$_GET[id];
$mysqli->query("DELETE from soh_events WHERE id= '$eventId'");
header('Location: events_list.php');
?>