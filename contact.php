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
		<script src="js/TMForm.js"></script>
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
								<li ><a href="index.php">Home</a></li>
								<li><a href="mission.html">About Us</a></li>
								<li><a href="products.php">Products</a></li>
								<li><a href="event.php">Events</a></li>
								<li><a href="News.php">News</a></li>
								<li><a href="student.php">Kids</a></li>
								<li><a href="services.html">Services &amp; Facilities</a></li>
								<li class="current"><a href="contact.php">Contacts</a></li>
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
				<div class="grid_12">
					<h2>Find Us</h2>
					<div class="map">
						<figure class="">
							<iframe src="http://maps.google.com/?ll=22.804502%2C86.18837&amp;spn=0.028246%2C0.044546&amp;ie=UTF8&amp;z=14&amp;t=roadmap&amp;sll=22.804502%2C86.18837&amp;sspn=0.028246%2C0.044546&amp;q=Northern%20Town%20Jharkhand%2C%20India%20(St%20George%20Church)&amp;output=embed"></iframe>
						</figure>
						<div class="grid_4 alpha">
							<h2>Address:</h2>
							<address>
								<span class="fa fa-home"></span>
								SCHOOL OF HOPE<br />
								B.Road , Northern Town<br/>
								Jamshedpur- 831001
							</address>
						</div>
						<div class="grid_4">
							<h2>Phones:</h2>
							<div class="m_phone">
								<div class="fa fa-phone"></div>
								+91 657-2433889
                                
							</div>
							<div class="m_phone">
								<div class="fa fa-phone"></div>
								+91 657-6571184
							</div>
						</div>
						<div class="grid_4 omega">
							<h2>Email:</h2>
							<a href="#"><span class="fa fa-envelope-o"></span> schoolofhopejamshedpur@gmail.com</a>
						</div>
						<div class="clear"></div>
					</div>
					<h2>Contact Form</h2>
					<form id="form" method="POST" action="contact1.php">
											</form>

<form id="form" method="POST" action="contact1.php">
		<div class="container"><div class="row">

													<input type="text" name="username" placeholder="Name:" data-constraints="@Required @JustLetters" />
													<input type="text" name="email" placeholder="Email:" data-constraints="@Required @Email" />
													<input type="text" name="subject" placeholder="Subject:" data-constraints="@Required @JustLetters"/>
</div>
													<br /><br /><br /><textarea name="message" placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
						 <button class="pull-right btn-success" style="background-color:lightblue; margin-top:10px;" type="submit">SEND</button>  
</div>				
	</form>

				</div>
			</div>
		</div>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
echo "<h2>Your Input:</h2>";
echo $_POST["username"];
echo "<br>";
echo  $_POST["email"];
echo "<br>";
echo  $_POST["message"];
echo "<br>";
echo  $_POST["subject"];
echo "<br>";
}
?>		<div class="bottom_block">
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