<?php
include("admin/include/db.php");
$query = $mysqli->query("SELECT * FROM (SELECT * FROM soh_news ORDER BY id DESC LIMIT 2) as r ORDER BY id");
?>

<!DOCTYPE html> 
<html lang="en">
	<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/favicon.ico">
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="css/thumbs.css">
	<link rel="stylesheet" href="css/slider.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src="js/script.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/sForm.js"></script>
	<script src="js/jquery.ui.totop.js"></script>
	<script src="js/jquery.equalheights.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.iosslider.min.js"></script>
	<script>
	$(document).ready(function(){

		$().UItoTop({ easingType: 'easeOutQuart' });
		});

$(function(){ /* to make sure the script runs after page load */

	$('.item').each(function(event){ /* select all divs with the item class */
	
		var max_length = 25; /* set the max content length before a read more link will be added */
		
		if($(this).html().length > max_length){ /* check for content length */
			
			var short_content 	= $(this).html().substr(0,max_length); /* split the content in two parts */
			var long_content	= $(this).html().substr(max_length);
			
			$(this).html(short_content+
						 '<a href="#" class="read_more"><br/>...</a>'+
						 '<span class="more_text" style="display:none;">'+long_content+'</span>'); /* Alter the html to allow the read more functionality */
						 
			
			
		}
		
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
	<body class="page1" id="top"
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
					<div class="menu_block ">
						<a href="contribute.html" class="donate">CONTRIBUTE</a>						<div class="clear"></div>
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
								<li  class="current"><a href="index.html">Home</a></li>
								<li><a href="mission.html">About Us</a></li>
								<li><a href="products.php">Our Products</a></li>
								<li><a href="event.php">Events</a></li>
											<li><a href="services.html">Services &amp; Facilities</a></li>
								<li><a href="contact.html">Contacts</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</header>
		<div class="fluidHeight container_12">
			<div class="sliderContainer">
				<div class="iosSlider">
					<div class="slider">
						<div class="item item1">
							<div class="inner">
								<div class="text1"><span>Join our campaigns and give <br>hope to special children</span></div>
							</div>
						</div>
						<div class="item item2">
							<div class="inner">
								<div class="text1"><span>Make the right choice! <br>Help those who are in need.</span></div>
							</div>
						</div>
						<div class="item item3">
							<div class="inner">
								<div class="text1"><span>Our mission is to engage more people in the fight <br> for better life of special children</span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="slideSelectors">
					<div class="item selected"></div>
					<div class="item"></div>
					<div class="item"></div>
				</div>
			</div>
		</div>
<!--==============================Content=================================-->
			<div class="container_12">
				<div class="grid_6_main">
					<h2>Welcome to The School of Hope</h2>
					<div class="extra_wrapper">
						<p class="col2_main"><strong>The Jamshedpur Society for the Welfare of Mentally Challenged Children</strong> popularly known as <strong> School of Hope </strong>situated in Jamshedpur, District – East Singhbhum, State – Jharkhand, is a unique Hindi medium co-educational private institution run and managed by a Society registered under the societies act XX1 of 1860 since 1977. It was started on the Gandhi Jayanthi in the 1976 and is affiliated to the federation for the welfare of the mentally retarded, New Delhi.
                        <br /><br/>
It has its own school building, build in the leasehold area of Tata Steel Limited with the total construction of approximately 3000 sft. Build up area on an acre of land. Staff compliment of special educators, special teachers, computer, yoga, and games teacher supported by psychologist, speech therapist and physiotherapist, accupressurist manage the various activities & provide requisite care to the children.<br>
					</p>
					
					<h2>OBJECTIVE</h2> To promote innovative academic, social and vocational education in a safe and nurturing environment to differently abled special children in order to enable and empower them to integrate into the main stream of the society as fully as possible.
To motivate, train, educate, empower & have the Special Children included in the society in a better and effective manner, developing sensitivity and empathy for their limitations & increased self-respect and confidence for a child with special needs.

					</div>
					<div class="clear"></div>
				</div>
				
			</div>
			<div class="hor"></div>
			<div class="container_12">
				<div class="grid_3">
					<h2>PURPOSE OF ESTABLISHMENT</h2>
                    <p>To make our students a part of the new India which is full of aspiration and hope to make them self-sufficient to promote innovative academic, social and vocational education in a safe and nurturing environment to differently abled special children. 
                    
                    <a href="mission.html" class="btn">Learn More</a></p>
                    <hr />
                    
					<blockquote class="bq1">
						<div class="title">Latest News</div>
						<b><marquee behavior="scroll" direction="up" scrollamount="1">

<?php
					$i=1;
					while ($row = $query->fetch_assoc()) {
					
					?>						
						<a class="item" href="view_news.php?id=<?php echo $row['id'];?>"><p><?php echo $row['newsTitle'];?></p></a>
										
					<?php				
					
					}
					
					?>

</marquee> </b>
						
					</blockquote>
				</div>
				<div class="grid_9">
					<h2>What We Do</h2>
					<section>
						<ul id="da-thumbs" class="da-thumbs">
							<li>
								<a href="#">
								<img src="images/th1.jpg" alt="" />
								<div><span>SELF - HELP and PRE</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th2.jpg" alt="" />
								<div><span>Physiotherapy</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th3.jpg" alt="" />
								<div><span>Home Management</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th4.jpg" alt="" />
								<div><span>Guidance and Councelling</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th5.jpg" alt="" />
								<div><span>Accupressure</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th6.jpg" alt="" />
								<div><span>Speech Therapy</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th7.jpg" alt="" />
								<div><span>Group Meeting</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th8.jpg" alt="" />
								<div><span>Sports &amp; Health Care</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th9.jpg" alt="" />
								<div><span>Vocational Training</span></div>
								</a>
							</li>
						</ul>
					</section>
				</div>
			</div>
		</div>
		<div class="bottom_block">
			<div class="container_12">
				<div class="grid_4">
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
		<script src="js/jquery.hoverdir.js"></script>
		<script>
		$(document).ready(function() {
		 $('.iosSlider').iosSlider({
			desktopClickDrag: true,
			snapToChildren: true,
			navSlideSelector: '.sliderContainer .slideSelectors .item',
			onSlideComplete: slideComplete,
			onSliderLoaded: sliderLoaded,
			onSlideChange: slideChange,
			scrollbar: false,
			autoSlide: true,
			autoSlideTimer: 3300,
			infiniteSlider: true
		 });
		});
		function slideChange(args) {
		 $('.sliderContainer .slideSelectors .item').removeClass('selected');
		 $('.sliderContainer .slideSelectors .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
		}
		function slideComplete(args) {
		 if(!args.slideChanged) return false;
		 $(args.sliderObject).find('.text1, .text2').attr('style', '');
		 $(args.currentSlideObject).find('.text1').animate({
			right: '100px',
			opacity: '0.72'
		 }, 400, 'easeOutQuint');
		 $(args.currentSlideObject).find('.text2').delay(200).animate({
			right: '70px',
			opacity: '0.72'
		 }, 400, 'easeOutQuint');
		}
		function sliderLoaded(args) {
		 $(args.sliderObject).find('.text1, .text2').attr('style', '');
		 $(args.currentSlideObject).find('.text1').animate({
			right: '100px',
			opacity: '0.72'
		 }, 400, 'easeOutQuint');
		 $(args.currentSlideObject).find('.text2').delay(200).animate({
			right: '70px',
			opacity: '0.72'
		 }, 400, 'easeOutQuint');
		 slideChange(args);
		}
		$(function() {
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
			});
		</script>
	</body>
</html>