<?php
include("admin/include/db.php");
$childId= $_POST['childId'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email =$_POST['Email'];
$donateId = $_POST['donateId'];
$address = $_POST['address'];
$tnc =$_POST['TnC'];

$mysqli->query("INSERT INTO soh_donation (childId,name,mobile,email,address,donateId,tnc) VALUES ('$childId','$name','$mobile','$email','$address','$donateId','$tnc')");

header("Location: thankyou.php");
?>