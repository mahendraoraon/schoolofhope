<html>
<head>
<title> Non-Seamless-kit</title>
</head>
<body>
<center>

<?php include('Crypto.php')?>
<?php 

	error_reporting(1);
	
	$merchant_data='78901';
	$working_key='85DBB784423451545067414DAED1E14E';//Shared by CCAVENUES
	$access_code='AVXX06CI66CK13XXKC';//Shared by CCAVENUES
	

	    foreach ($_POST as $key => $value){
        $merchant_data.=$key.'='.$value.'&';
    }
 

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

 //var_dump($encrypted_data);
 //exit;
?>
<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>

