<?php
include("include/db.php");
$news_title = $_POST['news_title'];
$news_text = $_POST['news_text'];
$news_id=$_GET['id'];

$result=$mysqli->query("update soh_news set newsTitle='$news_title',newsText='$news_text',newsTime=now() where id='$news_id'");
if (!$result) {
echo $mysqli->error;

    //die('Invalid query: ' . mysqli_error());
}
else
{
 #$query=$mysqli->query("SELECT * FROM soh_products");
header('Location: newslist.php'); }

?>
