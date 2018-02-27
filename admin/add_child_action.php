<?php
include("include/db.php");
include("include/image_resize.php");
$childName=$_POST['childName'];
$childAge=$_POST['childAge'];
$childTalent=$_POST['childTalent'];
$childClass=$_POST['childClass'];
$childDes=$_POST['descrip'];

$ext = end((explode(".", $_FILES['pic']['name'])));
$image = new SimpleImage();
 $image->load($_FILES['pic']['tmp_name']);
 //$image->resizeToWidth(200);
 $filename=md5($productName.rand(0,5000)).".".$ext;
 $image->save("../child/".$filename);
 $mysqli->query("INSERT INTO soh_child (name,age,talent,childClassData,imagePath,description) VALUES ('$childName','$childAge','$childTalent','$childClass','$filename','$childDes')");
 header('Location: add_child.php');
?>