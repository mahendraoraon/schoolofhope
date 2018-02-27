<?php

session_start();
include("admin/include/db.php");
$productId= $_SESSION['productId'];
$orderQuantity=$_SESSION['orderQuantity'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email =$_POST['email'];
$address =$_POST['address'];
$city =$_POST['city'];
$state =$_POST['state'];
$country = $_POST['country'];
$zip = $_POST['zip'];
$amount = $_POST['amount'];
$PaymentTracking_id =$_POST['PaymentTracking_id'];

foreach ($_POST as $key => $value){
	        $merchant_data.=$key.'='.$value.'&';
	        }

	       var_dump($productId,$orderQuantity,$name,$mobile,$email,$address,$city,$state,$country,$zip,$amount,$PaymentTracking_id);
	       //exit;


if($mysqli->query("INSERT INTO soh_order (pid,orderQuantity,billing_name,billing_tel,billing_email,billing_address,billing_city,billing_state,billing_country,billing_zip,amount,PaymentTracking_id)  
	VALUES ('$productId','$orderQuantity','$name','$mobile','$email','$address','$city','$state','$country','$zip','$amount','$PaymentTracking_id')"))
{

	unset($_SESSION['productId']);
	unset($_SESSION['orderQuantity']);
	//header("Location: thankyou.php");
	header("Location: thankyouorder.php?id=$PaymentTracking_id");

}else{


	echo $mysqli->error;
}	


?>