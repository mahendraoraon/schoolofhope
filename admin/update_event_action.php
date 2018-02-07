<?php
include("include/db.php");
include("include/image_resize.php");
$EventText=$_POST[EventText];
$EventTitle=$_POST[EventTitle];
$EventID=$_POST[id];

$ext = end((explode(".", $_FILES['pic']['name'])));
$image = new SimpleImage();
 $image->load($_FILES['pic']['tmp_name']);
 $image->resizeToWidth(200);
 $filename=md5($EventTitle.rand(0,5000)).".".$ext;
 $image->save("../products/".$filename); 
 $result=$mysqli->query("update soh_events set event_title='$EventTitle',event_text='$EventText',event_image='$filename' where id='$EventID'"); 
 if (!$result) {
echo $mysqli->error;

    //die('Invalid query: ' . mysqli_error());
}
else
{
 $query=$mysqli->query("SELECT * FROM soh_events");
 header('Location: events_list.php');
 }
?>
