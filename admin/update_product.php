<?php
include("include/db.php");
include("include/image_resize.php");
$productName=$_POST[productName];
$productPrice=$_POST[productPrice];
$productCat=$_POST[category];
$productDes=$_POST[descrip];
$ProductID=$_POST[Pid];


if($_FILES['pic']['name']==""){

	$result=$mysqli->query("update soh_products set productName='$productName',productPrice='$productPrice',productCat='$productCat',productDes='$productDes' where productId='$ProductID'"); 

}else{

	$ext = end((explode(".", $_FILES['pic']['name'])));
	$image = new SimpleImage();
	$image->load($_FILES['pic']['tmp_name']);
	//$image->resizeToWidth(200);
	$filename=md5($productName.rand(0,5000)).".".$ext;
	$image->save("/var/www/html/schoolofhope.in/products/".$filename); 
	$result=$mysqli->query("update soh_products set productName='$productName',productPrice='$productPrice',productCat='$productCat',productDes='$productDes',productImage='$filename' where productId='$ProductID'"); 
}
#var_dump($result);
if (!$result) {
echo $mysqli->error;

    //die('Invalid query: ' . mysqli_error());
}
else
{
 #$query=$mysqli->query("SELECT * FROM soh_products");
 header('Location: products_list.php');

 }
 #$row = $query->fetch_assoc();
 #var_dump($row);
?>
