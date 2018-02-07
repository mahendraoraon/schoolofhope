<?php
include("include/db.php");
$newsId=$_GET[id];
$mysqli->query("DELETE from soh_news WHERE id= '$newsId'");
header('Location: newslist.php');
?>