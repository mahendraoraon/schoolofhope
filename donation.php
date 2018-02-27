<?php
session_start();
include("admin/include/db.php");
$childId = $_GET['childId'];
$_SESSION['childId'] = $childId;
$result = $mysqli->query("SELECT * FROM soh_child WHERE id=$childId");
$row = $result->fetch_assoc();
#$row   = mysqli_fetch_row($result);
#echo $row[0];
#var_dump($row);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
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
		<script>
			window.onload = function() {
				var d = new Date().getTime();
				document.getElementById("tid").value = d;
			};
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
								<li class="current"><a href="index.php">Home</a></li>
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
					<h2>&nbsp;</h2>
					<div class="block1">

		<title>Donate</title>
						<img src="child/<?php echo  $row['imagePath']; ?>" alt="">
						
					</div>
				</div>
				
				<div class="grid_6 prefix_1 suffix_1 ver maxheight">
			
					<h2><?php echo $row['name']; ?>'s Details</h2>					
						
						<p>Details of the child</p>
						
						<p>Age : <?php echo $row['age']; ?></p>
					
						<p>Class :<?php echo  $row['childClassData']; ?></p>
						<p>Talents :<?php echo  $row['talent']; ?> </p>
						<form method="post" name="customerData" action="ccavRequestHandler.php">
						<p>your Details<p>
						<input type="hidden" name="childId" value="<?php echo $childId; ?>" >
						<input type="hidden" name="tid" id="tid" readonly />
						<input type="hidden" name="merchant_id" value="78901"/>
						<input type="hidden" name="childId" value="<?php echo $childId; ?>" >
						<input type="hidden" name="order_id" value="<?php echo uniqid(); ?>"/>
						<input type="hidden" name="currency" value="INR"/>
						<input type="hidden" name="redirect_url" value="http://www.schoolofhope.in/ccavResponseHandler.php"/>
						<input type="hidden" name="cancel_url" value="http://www.schoolofhope.in/ccavResponseHandler.php"/>
						<input type="hidden" name="language" value="EN"/>
						
						<input type="input" placeholder="Name" name="billing_name" value="" ><br /> <br />
						<br />
						Address :<br><textarea name="billing_address">
						</textarea>
						<br />
						<input type="input" placeholder="City" name="billing_city" value="" ><br><br />
						<input type="input" placeholder="State" name="billing_state" value="" ><br><br />
						<input type="input" placeholder="PIN/ZIP Code" name="billing_zip" value="" ><br><br />
						<input type="input" placeholder="Country" name="billing_country" value="" ><br><br />
						<input type="input" placeholder="Mobile No." name="billing_tel" value="" ><br><br />
						<input type="input" placeholder="Email ID" name="billing_email" value="" ><br><br />
						<select name="amount">
						<option>-- Please select donation Method --</option>
						<option value="1">Test Payment - Re:1</option>
						<option value="1000">1 Month - 1000</option>
						<option value="3000">3 Months - 3000</option>
						<option value="10000">12 Months - 10000</option>
						<option value="6000">12 Months Tuition Fee - 6000</option>
						<option value="10000">Adopt for 1 year - 10000</option>
						<option value="6000">1 year transportation - 6000</option>
						</select>
						<br />
						<input type="checkbox" name="TnC" value="1"> I Agree with <a href="termsandconditions.html">Terms & conditions </a><br>
						<input type="submit" class="bttn" value="Donate">
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
