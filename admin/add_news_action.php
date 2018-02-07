<?php
include("include/db.php");
$news_title = $_POST['news_title'];
$news_text = $_POST['news_text'];

$mysqli->query("INSERT INTO soh_news (newsTitle,newsText,newsTime) VALUES ('$news_title','$news_text',now())");

header('Location: newslist.php');
?>