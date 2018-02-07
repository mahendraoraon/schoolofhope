<?php

$username=$_POST[username];
$password=$_POST[password];

if($username=="schoolofhope" && $password=="School!23oh"|| $username=="rajshree.soh" && $password=="School!23oh" )
{
	session_start();
	$_SESSION['soh_admin']="soh_admin";
	header('Location: index.php');
}
else{
	header('Location: login.php');
}
?>