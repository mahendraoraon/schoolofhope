<?php
include("include/db.php");
$productId=$_GET[id];
$mysqli->query("DELETE from soh_products WHERE productId= '$productId'");
header('Location: products_list.php');
?>