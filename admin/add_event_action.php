<?php
include("include/db.php");
include("include/image_resize.php");
$EventTitle=$_POST['EventTitle'];
$EventText=$_POST['EventText'];


$ext = end((explode(".", $_FILES['pic']['name'])));
$image = new SimpleImage();
 $image->load($_FILES['pic']['tmp_name']);
 $image->resizeToWidth(200);
 $filename=md5($EventTitle.rand(0,5000)).".".$ext;
 $image->save("../products/".$filename);
 $mysqli->query("INSERT INTO soh_events (event_title,event_text,event_image) VALUES ('$EventTitle','$EventText','$filename')");
 header('Location: events_list.php');
?>