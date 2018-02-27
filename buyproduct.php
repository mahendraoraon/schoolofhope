<?php
include("admin/include/db.php");
session_start();
$productId=$_GET['pid'];
$_SESSION['productId'] = $productId;
$query = $mysqli->query("SELECT * FROM soh_products WHERE productId = $productId");
$row = $query->fetch_assoc();

#var_dump($row);

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>School of hope</title>
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
					<div class="menu_block ">
						<a href="contribute.html" class="donate">CONTRIBUTE</a>						<div class="clear"></div>
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
								<li><a href="index.php">Home</a></li>
								<li><a href="mission.html">About Us</a></li>
								<li><a href="products.php">Products</a></li>
								<li><a href="event.php">Events</a></li>
								<li><a href="News.php">News</a></li>
								<li><a href="student.php">Kids</a></li>
								<li><a href="services.html">Services &amp; Facilities</a></li>
								<li><a href="contact.php">Contacts</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - March 24, 2014!</div>
			
			
			<div class="container_12">
				<div class="grid_4 maxheight">
					<h2><?php echo $row['productName']; ?></h2>
					<div class="block1">
						<img src="products/<?php echo $row['productImage']; ?>" alt="">
						
					</div>
				</div>
				<div class="grid_6 prefix_1 suffix_1 ver maxheight">
					<h2>Product details</h2>					
						
						<p></p>

						<p>Product Name - <?php echo $row['productName']; ?></p>
						<p>Price - <?php echo $row['productPrice']; ?></p>
						
						<p>Description - <?php echo $row['productDes']; ?></p>
						<form action="ccavRequestHandlerOrder.php" method="post">
						<!--<input type="input" name="amount" value="<?php echo $row['productPrice']; ?>"><br><br />-->
						
						<input type="hidden" name="pid" value="<?php echo $row['productId']; ?>" >
						<input type="input" id="qnty" placeholder="Enter Number of Products" name="quantity" value="" onchange="totalAmount(this.value)" ><br><br />

						<input type="hidden" id="totalamt" placeholder="total Amount" name="amount"  value="" >
						<p id="pamt">Total Amount - 0</p>
						
						<script>
						function totalAmount(val) {
						   
						   
						   var total=parseInt(document.getElementById("qnty").value) * <?php echo $row['productPrice']; ?>;
						   document.getElementById('totalamt').value=total ;
						    $('#pamt').text('Total Amount - '+ total);
						}
						</script>
						<input type="input" placeholder="Name" name="billing_name" value="" ><br /> <br />
						<input type="input" placeholder="Mobile No." name="billing_tel" value="" ><br><br />
						<input type="input" placeholder="Email ID" name="billing_email" value="" ><br><br />
						<br />
						Address :<br>
						<textarea name="billing_address">
						</textarea><br><br />
						<input type="input" placeholder="City" name="billing_city" value="" ><br><br />
						<input type="input" placeholder="State" name="billing_state" value="" ><br><br />
						<input type="input" placeholder="PIN/ZIP Code" name="billing_zip" value="" ><br><br />
						<input type="input" placeholder="Country" name="billing_country" value="" ><br><br />
										
						<input type="hidden" name="merchant_id" value="78901"/>
						
						<input type="hidden" name="order_id" value="<?php echo uniqid(); ?>"/>
						<input type="hidden" name="currency" value="INR"/>
						<input type="hidden" name="redirect_url" value="http://www.schoolofhope.in/ccavResponseHandlerOrder.php"/>
						<input type="hidden" name="cancel_url" value="http://www.schoolofhope.in/ccavResponseHandlerOrder.php"/>
						<input type="hidden" name="language" value="EN"/>
						<!--<input type="hidden" name="amount" value="<?php echo $row['productPrice']; ?>"/>-->

						<br />
						<input type="checkbox" name="TnC" value="1"> I Agree with <a href="termsandconditions.html">Terms & conditions </a><br>
						<input type="submit" class="bttn" value="Buy">
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
								<input type="email" value="Enter your Email" >
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
						School Of Hope &copy; 2014 | <a href="termsandconditions.html">Privacy Policy</a> <br> Website designed by <a href="http://www.facebook.com/mobsketch" rel="nofollow">Mobsketch </a>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>
