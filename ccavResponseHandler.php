<?php 
	include('Crypto.php');
	session_start();
	error_reporting(0);
	
	$workingKey='85DBB784423451545067414DAED1E14E';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==3)	$order_status=$information[1];
	}

	if($order_status==="Success")
	{
		echo "<br>Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon.";
		
	}
	else if($order_status==="Aborted")
	{
		echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
	
	}
	else if($order_status==="Failure")
	{
		echo "<br>Thank you for shopping with us.However,the transaction has been declined.";
	}
	else
	{
		echo "<br>Security Error. Illegal access detected";
	
	}

	echo "<br><br>";

	if($order_status==="Success"){

	echo "<table cellspacing=4 cellpadding=4>";

		for($i = 0; $i < $dataSize; $i++) 
		{
			$information=explode('=',$decryptValues[$i]);
		    	//echo '<tr><td>'.$information[0].'</td><td>'.$information[1].'</td></tr>';
				if($information[0]== "billing_name"){
				
					$name=$information[1];
				}
				if($information[0]== "billing_tel"){
				
					$mobile=$information[1];
				}
				if($information[0]== "billing_email"){
				
					$email=$information[1];
				}
				if($information[0]== "tracking_id"){
				
					$donateId=$information[1];
				}
				if($information[0]== "billing_address"){
				
					$address=$information[1];
				}
				if($information[0]== "mer_amount"){
				
					$TnC=$information[1];
				}
		}

	echo "</table><br>";
	echo "</center>";




	echo "<form method=post name=redirect action=donation_action.php> ";

		echo "<input type=hidden name=childId value=$_SESSION[childId]>";
		echo "<input type=hidden name=name value=$name>";
		echo "<input type=hidden name=mobile value=$mobile>";
		echo "<input type=hidden name=email value=$email>";
		echo "<input type=hidden name=donateId value=$donateId>";
		echo "<input type=hidden name=address value=$address>";
		echo "<input type=hidden name=TnC value=$TnC>";

	echo "</form>";
	echo "<script language=javascript>document.redirect.submit();</script>";

	}
?>