<?php
include("include/db.php");
include("include/image_resize.php");
$childName=$_POST[childName];
$childAge=$_POST[childAge];
$childTalent=$_POST[childTalent];
$childClass=$_POST[childClass];
$descrip=$_POST[descrip];
$childID=$_POST[id];

$ext = end((explode(".", $_FILES['pic']['name'])));
$image = new SimpleImage();
 $image->load($_FILES['pic']['tmp_name']);
 $image->resizeToWidth(200);
 $filename=md5($productName.rand(0,5000)).".".$ext;
 $image->save("../child/".$filename); 
 $result=$mysqli->query("update soh_child set name='$childName',age='$childAge',talent='$childTalent',childClassData='$childClass',description='$descrip',ImagePath='$filename' where id='$childID'"); 
 if (!$result) {
echo $mysqli->error;

    //die('Invalid query: ' . mysqli_error());
}
else
{
 $query=$mysqli->query("SELECT * FROM soh_child");
 header('Location: child_list.php');
 }
?>
