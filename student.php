<?php
include("admin/include/db.php");
$query = $mysqli->query("SELECT * FROM soh_child");
$left_align = true;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Childrens</title>
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
								<li class="current"><a href="student.php">Kids</a></li>
								<li><a href="services.html">Services &amp; Facilities</a></li>
								<li><a href="contact.html">Contacts</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content">
		<?php
			$i=1;
while ($row = $query->fetch_assoc()) {
			//while ($row = mysql_fetch_assoc($query)) {
				if($left_align)
				{
			?>
			<div class="container_12">
			<div class="grid_4">
						<h2>&nbsp;</h2>
						<img src="child/<?php echo $row['imagePath']; ?>" alt="">
					</div>
				<div class="grid_8">
					
						<h2><?php echo $row['name']; ?></h2>
						<p>Age : <?php echo $row['age']; ?></p>
						<p>Class :<?php echo $row['childClassData']; ?></p>
						<p>Talents :<?php echo $row['talent']; ?> </p>
					<a href="donation.php?childId=<?php echo $row['id']; ?>" class="bttn" >Donate and help</a></li>
					</div>
				</div>
				<div class="clear"></div>
				<br />
			<?php
				}
				else
				{
			?>
			<div class="container_12"><hr>
				<div class="container_12">
						<div class="grid_8">
					
						<h2><?php echo $row['name']; ?></h2>
						<p>Age : <?php echo $row['age']; ?></p>
						<p>Class :<?php echo $row['childClassData']; ?></p>
						<p>Talents :<?php echo $row['talent']; ?> </p>
						<a href="donation.php?childId=<?php echo $row['id']; ?>" class="bttn">Donate and help</a></li>
					</div>
					<div class="grid_4">
						<h2>&nbsp;</h2>
						<img src="child/<?php echo $row['imagePath']; ?>" alt="">
						
					
					</div>
					<div class="clear"></div>
					<br>
			<?php		
				}
				$left_align = !$left_align;
				$i++;
			}
			?>
				<hr>
                    
                    
					
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