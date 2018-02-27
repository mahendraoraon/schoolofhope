<?php
session_start();
if(!isset($_SESSION['soh_admin']))
{
	header("Location: login.php");

	
}


if($_GET['id'] == "") {
  
} else {
  $ProductID= $_GET['id'];
  include("include/db.php");
  $query=$mysqli->query("SELECT * FROM soh_products where productId= '$ProductID'");
  $row = $query->fetch_assoc();//mysql_fetch_assoc($query);
  #var_dump($row);
  $ProductName=$row[productName];
  $ProductPrice=$row[productPrice];  
  $ProductCategory=$row[productCat];
  $ProductDescription=$row[productDes];  
  $ProductImage=$row[productImage];
  
}
?>
<!DOCTYPE html>
<html lang="en"><title>School of hope</title>
	<head>
		<title>Edit Product</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/sForm.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
		$(document).ready(function(){		
			$().UItoTop({ easingType: 'easeOutQuart' });		
			
			//to store php variable in javascript variable
			var categoryID= '<?php echo $ProductCategory; ?>';
			var desc='<?php echo $ProductDescription; ?>';
			var image='<?php echo $ProductImage; ?>';
			$("#Pdescription").val(desc);
			$("#Pcategory").val(categoryID);
			$("#Pimage").val(image);
			
			});
			
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
			<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="" id="top">
<!--==============================header=================================-->
			<header>
			<div class="container_12">
				<div class="grid_12">
					<h1>
						<a href="index.php">
							<img src="images/logo.png" alt="School of hope">
						</a>
					</h1>
					<div class="menu_block">
						<div class="clear"></div>
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li><a href="index.php">Home</a></li>
								<li class="current"><a href="products_list.php">Products</a></li>
								<li><a href="events_list.php">Events</a></li>
								<li><a href="newslist.php">News</a></li>
								<li><a href="donationview.php">Donations</a></li>
								<li><a href="orderview.php">Orders</a></li>
								<li><a href="child_list.php">Child</a></li>
                                				<li><a href="logout.php">Log Out</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
			<div class="menu_block">
						<div class="clear"></div>
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li ><a href="products_list.php">View Products</a></li>
																
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				
				<div class="grid_12">
					<h2>Update Product</h2>
					<form id="form" action="update_product.php" method="post" enctype="multipart/form-data">
						<div class="success_wrapper">
							<div class="success-message">Products submitted</div>
						</div>
						<input type="hidden" value="<?php echo htmlspecialchars($ProductID); ?>" name="Pid" id="productID" />
						<label class="name">
							<input type="text" value="<?php echo htmlspecialchars($ProductName); ?>" id="Pname" placeholder="Name:" name="productName" required />
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid name.</span>
						</label>
						<label class="email">
							<input type="text" id="Pprice" value="<?php echo htmlspecialchars($ProductPrice); ?>" name="productPrice" placeholder="Price" required />
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid email.</span>
						</label>
						<label class="subject">
							<select name="category" id="Pcategory" required>
							<option value="">Select A Category</option>
							<option value="1">Bangle</option>
							<option value="2">Handmade Card</option>
							<option value="3">Handmade Candle</option>
							</select>
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid phone.</span>
						</label>
						
						<label class="file">
						<a href="../products/<?php echo htmlspecialchars($ProductImage); ?>" class="gal"><img src="../products/<?php echo htmlspecialchars($ProductImage); ?>" alt=""></a>
						<input type="file" name="pic" id="Pimage" value="<?php echo htmlspecialchars($ProductImage); ?>" accept="image/*" >
						</label>
						<label class="message">
							<textarea placeholder="Description:" id="Pdescription" value="<?php echo htmlspecialchars($ProductDescription); ?>" name="descrip" required></textarea>
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*The message is too short.</span>
						</label>
						<div>							
							<div class="btns">								
								<input type="submit" value="Update" />
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="bottom_block">
			<div class="container_12">
				<div class="grid_4 ">
					<h3>Stay Informed</h3>
					<div class="text1">Subscribe to Our Newsletter</div>
					<form id="newsletter">
						<div class="rel">
							<div class="success">Your subscribe request has been sent!</div>
							<label class="email">
								<input type="text" value="Enter your Email" >
								<span class="error">*This is not a valid email address.</span>
							</label>
						</div>
						<a href="#" class="btn" data-type="submit">Submit</a>
					</form>
				</div>
				<div class="grid_5 prefix_3">
					<h3>Stay Connected</h3>
					<div class="text1">Follow Us on Social Media Accounts </div>
					Visit us. Share the links on Different Media Platforms.
					<div class="socials">
						<a href="#"><div class="fa fa-twitter"></div></a>
						<a href="https://www.facebook.com/School.of.Hope.Jampot"><div class="fa fa-facebook"></div></a>
						<a href="#"><div class="fa fa-pinterest-square"></div></a>
						<a href="#"><div class="fa fa-google-plus"></div></a>
						<a href="#"><div class="fa fa-instagram"></div></a>
					</div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="copy">
						School Of Hope &copy; 2015 | <a href="termsandconditions.html">Privacy Policy</a> <br> Website designed by <a href="http://www.facebook.com/mobsketch" rel="nofollow">Mobsketch </a>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>