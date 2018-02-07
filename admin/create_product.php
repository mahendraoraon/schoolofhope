<?php
include("include/db.php");
include("include/image_resize.php");
$productName=$_POST[productName];
$productPrice=$_POST[productPrice];
$productCat=$_POST[category];
$productDes=$_POST[descrip];
$ext = end((explode(".", $_FILES['pic']['name'])));
$image = new SimpleImage();
 $image->load($_FILES['pic']['tmp_name']);
 $image->resizeToWidth(200);
 $filename=md5($productName.rand(0,5000)).".".$ext;
 $image->save("../products/".$filename);
 $result=$mysqli->query("INSERT INTO soh_products (productName,productPrice,productCat,productDes,productImage) VALUES 
 ('$productName','$productPrice','$productCat','$productDes','$filename')");
if (!$result) {
echo $mysqli->error;

    //die('Invalid query: ' . mysqli_error());
}

 $query=$mysqli->query("SELECT * FROM soh_products");
 header('Location: products_list.php');
if (!$query) {
echo $mysqli->error;

    //die('Invalid query: ' . mysqli_error());
}

?>
