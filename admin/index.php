<?php
session_start();
if(!isset($_SESSION['soh_admin']))
{
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin Home</title>
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
			$("#update").click(function(){
				alert("Hello");
				$("#form").submit();
			});
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
								<li class="current"><a href="index.php">Home</a></li>
								<li><a href="products_list.php">Products</a></li>
								<li><a href="events_list.php">Events</a></li>
								<li><a href="newslist.php">News</a></li>
								<li><a href="donationview.php">Donations</a></li>
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
				<div class="grid_18">
					<h2>Welcome Admin</h2>
					<div class="grid_2"><a href="products_list.php"><img src="images/Product.png" height="150" width="150"></a><br><center>Product</center></br></div>
<div class="grid_2"><a href="events_list.php"><img src="images/Events.png" height="150" width="150"></a><br><center>EVENTS</center></br></div>

<div class="grid_2"><a href="newslist.php"><img src="images/News.png" height="150" width="150"></a><br><center>News</center></br></div>

<div class="grid_2"><a href="donationview.php"><img src="images/Donation.png" height="150" width="150"></a><br><center>Donation</center></br></div>

<div class="grid_2"><a href="child_list.php"><img src="images/Child.png" height="150" width="150"></a><br><center>Child</center></br></div>


					
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
						School Of Hope &copy; 2015 | <a href="termsandconditions.html">Privacy Policy</a> <br> Website designed by <a href="http://www.facebook.com/mobsketch" rel="nofollow">Mobsketch </a>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>