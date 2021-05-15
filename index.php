<?php 
//MySQL Connection
require_once("config.php");
$mysqli = db_connect();
?>


<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="nirosh media, niroshmedia,niroshan rajh" />
	<meta name="author" content="Niroshan Vijayarasha" />
	<meta name="robots" content="" />



<title>Nirosh Media</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">


<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body class="dark-layout">

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
	<!-- Main Header / Header Style Two -->
    <header class="main-header header-style-two">
        
        <!-- Header Upper -->
        <div class="header-upper">
            <div class="outer-container clearfix">
				<!--Info-->
				<div class="logo-outer">
					<div class="logo"><a href="index.html"><img width="234px" height="28px" src="images/logo.png" alt="" title=""></a></div>
				</div>

				<!--Nav Box-->
				<div class="nav-outer clearfix">
					<!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
					<nav class="main-menu navbar-expand-md navbar-light">
						<div class="navbar-header">
							<!-- Togg le Button -->      
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon flaticon-menu-1"></span>
							</button>
						</div>
						
						<div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
							<ul class="navigation clearfix">
								<li class="current"><a href="/">Home</a></li>
								<li class="dropdown"><a href="/About">About</a>
									<ul>
										<li><a href="/About">Our Introduction</a></li>
										<li><a href="/About_Me">About Me</a></li>
									</ul>
								</li>
								<li class="dropdown"><a>Playlists</a>
									<ul>
										<li><a href="/Playlists/Tech_Videos/Page=1">Tech Videos</a></li>
										<li><a href="/Playlists/Earning">Earning</a></li>
										<li><a href="/Playlists/Google_Form">Google Form</a></li>
										<li><a href="/Playlists/App_Reviews">Apps Reviews</a></li>
										<li><a href="/Playlists/Websites_Reviews">websites Reviews</a></li>
									</ul>
								</li>
								<li><a href="/Contact_Us">Contact</a></li>
								<li><a href="https://youtube.com/c/niroshmediaR?sub_confirmation=1"><img src="/images/btn-sub1.png" width="100px"></a></li>
							</ul>
						</div>
					</nav>
					<!-- Main Menu End-->
					
					<!-- Outer Box -->
					<div class="outer-box clearfix">
						<div class="search-box-btn"><span class="icon flaticon-magnifying-glass-1"></span></div>
					</div>
				</div>
			</div>
            
        </div>
        <!--End Header Upper-->

    	<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

<!--<div class="marquee"><marquee>niroshan</marquee></div> -->

    <!-- Main Slider -->
	<section class="main-slider style-two">
		<div class="slider-box">
		
			<!-- Banner Carousel -->
			<div class="banner-carousel owl-theme owl-carousel">
			
				<!-- Slide -->
				<div class="slide">
                	<div class="image-layer" style="background-image:url(images/main-slider/4.jpg)"></div>
					<div class="auto-container">
						<div class="content">
							<h2>Tech Videos</h2>
							<div class="text">உங்களை வழிகாட்டும் தொழில்நுட்பம் சார்ந்த காணொளிகள் 
								தெளிவான விளக்கங்களுடன்.</div>
							<div class="btns-box">
								<a href="#" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Slide -->
				<div class="slide">
                	<div class="image-layer" style="background-image:url(images/main-slider/5.jpg)"></div>
					<div class="auto-container">
						<div class="content">
							<h2>Apps Reviews</h2>
							<div class="text">உங்களுக்கு பயனுடைய பாதுகாப்பான சிறந்த தொலைபேசி செயலிகள் பற்றிய முழுத்தெளிவான விளக்கம் .</div>
							<div class="btns-box">
								<a href="#" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Slide -->
				<div class="slide">
                	<div class="image-layer" style="background-image:url(images/main-slider/6.jpg)"></div>
					<div class="auto-container">
						<div class="content">
							<h2>Websites Reviews</h2>
							<div class="text">உங்களுக்கு பயனுடைய பாதுகாப்பான சிறந்த வலைத்தளங்கள் பற்றிய முழுத்தெளிவான விளக்கம் .</div>
							<div class="btns-box">
								<a href="#" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Social Icons -->
			<ul class="social-icons">
				<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
				<li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
				<li><a href="#"><span class="fab fa-twitter"></span></a></li>
				<li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
			</ul>
			
		</div>
	</section>
	<!-- End Banner Section -->
	
	
	<!-- Our Blogs Section -->
	<section class="our-blogs-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<h2>Recent Uploads</h2>
				<div class="text">மேலும் பல தொழில்நுட்பம் சார்ந்த புதிய காணொளிப்பதிவுகளுக்கு தொடர்ச்சியாக நிரோஷ் மீடியா உடன் இணைந்திருங்கள்.</div>
				<div class="g-ytsubscribe" data-channelid="UCyaQdMM1EfFPhw4dUcGlyRg" data-layout="default" data-theme="dark" data-count="default"></div>
			</div>
			<div class="row clearfix">
			<?php 

				$popular_result = $mysqli->query("SELECT * FROM videos ORDER BY id DESC LIMIT 4");
				if($popular_result->num_rows > 0){ 
				while($row = $popular_result->fetch_assoc()){ ?>
				<!--News Block Two -->
				<div class="news-block-two style-two col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="404.html"><img src="<?php echo $row['thumbnail']; ?>" alt="" /></a>
						</div>
						
						<div class="lower-content">
							<div class="upper-box clearfix">
								<div class="posted-date"><?php echo $row['date']; ?></div>
								<ul class="post-meta">
									<li>By :  Admin</li>
									<li><?php echo $row['video_type']; ?></li>
									<li>Comments:<?php echo $row['comments_no']; ?> </li>
								</ul>
							</div>
							<div class="lower-box">
								<h4><a href="404.html"><?php echo $row['video_title']; ?></a></h4>
								<div class="text"><?php echo $row['video_intro']; ?>
									</div>
									<div class="btns-box">
										<a href="/Details/<?php echo $row['id']; ?>"class="theme-btn btn-style-one"><span class="txt">Read more</span></a>
									</div>
							</div>
						</div>
					</div>
				</div>
				<?php 	} 
						} else{ ?>

				<!--News Block Two -->
				<div class="news-block-two style-two col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="404.html"><img src="images/resource/video-3.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="upper-box clearfix">
								<div class="posted-date">24 February 2021</div>
								<ul class="post-meta">
									<li>By :  Niroshan</li>
									<li>App Review</li>
									<li>Comments: 6</li>
								</ul>
							</div>
							<div class="lower-box">
								<h4 ><a href="blog-detail.html">How to delete google search history?</a></h4>
								<div class="text">வணக்கம் நண்பர்களே, இந்த வீடியோ வில் நீங்கள் browsing செய்த தகவல்களின் history ஐ எவ்வாறு நிரந்தரமாக நீக்கலாம் என்பது பற்றி கூறி உள்ளேன். ஆகவே வீடியோவை முழுமையாக பார்வையிட்டு பயன்பெறுங்கள்.நன்றி</div>
								<div class="btns-box">
									<a href="404.html"class="theme-btn btn-style-one"><span class="txt">Read more</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php 	} ?>
				
					<!--News Block Two -->
					<!--
					<div class="news-block-two style-two col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="404.html"><img src="images/resource/video-2.jpg" alt="" /></a>
							</div>
							<div class="lower-content">
								<div class="upper-box clearfix">
									<div class="posted-date">19 January 2021</div>
									<ul class="post-meta">
										<li>By :  Niroshan</li>
										<li>App Review</li>
										<li>Comments: 9</li>
									</ul>
								</div>
								<div class="lower-box">
									<h4 ><a href="404.html">How to send unlimited messages in Tamil?</a></h4>
									<div class="text">வணக்கம் நண்பர்களே , இந்த வீடியோவில்  தொடர்ச்சியாக ஒரு message ஐ பல தடவைகள்  அனுப்புவதற்கு இலகுவான வழிமுறை ஒன்றை கூறியுள்ளேன்.நன்றி.</div>
									<div class="btns-box">
										<a href="404.html"class="theme-btn btn-style-one"><span class="txt">Read more</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>-->
				
				<!--News Block Two -->
				<!--
				<div class="news-block-two style-two col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="404.html"><img src="images/resource/video-4.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="upper-box clearfix">
								<div class="posted-date">27 February 2021</div>
								<ul class="post-meta">
									<li>By :  Niroshan</li>
									<li>App Review</li>
									<li>Comments: 8</li>
								</ul>
							</div>
							<div class="lower-box">
								<h4><a href="404.html">How to Enable Auto Reply to WhatsApp Messages?</a></h4>
								<div class="text">வணக்கம் நண்பர்களே , இந்த வீடியோவில் உங்களுடைய Whatsapp இல் இருந்து எவ்வாறு தானியங்கியாக Messages அனுப்புவது என்பதுபற்றி கூறியுள்ளேன் ஆகவே வீடியோவை முழுமையாக பாரவையிட்டு பயன்பெறுங்கள். பிடித்திருந்தால் நண்பர்களுடனும் பகிர்ந்துகொள்ளுங்கள்.நன்றி.</div>
								<div class="btns-box">
									<a href="404.html"class="theme-btn btn-style-one"><span class="txt">Read more</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>-->
				
			</div>

			
		</div>
	</section>
	
	<!-- Interior Section -->
	<section class="interior-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Image Column -->
					<div class="image-column col-lg-4 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image">
								<img src="images/resource/interior.jpg" alt="" />
							</div>
						</div>
					</div>
					
					<!-- Content Column -->
					<div class="content-column col-lg-8 col-md-12 col-sm-12">
						<div class="inner-column">
							<h2>Why should You Choose Nirosh Media?</h2>
							<div class="text">உங்களுக்கு பயனுடைய பல்வேறு தொழில்நுட்பம் சார்ந்த தகவல்களையும் வலைத்தளங்கள் மற்றும் தொலைப்பேசி செயலிகள் பற்றியும் தெளிவாகவும் சுருக்கமாகவும் காணொளி வடிவில் YouTube இல் எம்முடைய சேனல் இல் தரப்படுகிறது.</div>
							<div class="row clearfix">
							
								<!-- Interior Block -->
								<div class="interior-block col-lg-4 col-md-4 col-sm-12">
									<div class="block-inner">
										<div class="icon-box">
											<span class="icon flaticon-award-1"></span>
										</div>
										<h3>Superior Quality</h3>
									</div>
								</div>
								
								<!-- Interior Block -->
								<div class="interior-block col-lg-4 col-md-4 col-sm-12">
									<div class="block-inner">
										<div class="icon-box">
											<span class="icon flaticon-answer"></span>
										</div>
										<h3>Brief Description	</h3>
									</div>
								</div>
								
								<!-- Interior Block -->
								<div class="interior-block col-lg-4 col-md-4 col-sm-12">
									<div class="block-inner">
										<div class="icon-box">
											<span class="icon flaticon-hand"></span>
										</div>
										<h3>Clear Explanation</h3>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Interior Section -->
	
	<!-- Counter Section -->
	<section class="counter-section">
		<div class="auto-container">
		
			<!-- Fact Counter -->
			<div class="fact-counter">
				<div class="row clearfix">

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="2500" data-stop="2">0</span> Years
								</div>
								<h4 class="counter-title">In YouTube</h4>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box alternate">
									<span class="count-text" data-speed="3000" data-stop="50">0</span>+
								</div>
								<h4 class="counter-title">Videos</h4>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3000" data-stop="1000">0</span>+
								</div>
								<h4 class="counter-title">Subscriber</h4>
							</div>
						</div>
					</div>
					
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="2500" data-stop="35000">0</span>+
								</div>
								<h4 class="counter-title">Views</h4>
							</div>
						</div>
					</div>

				</div>
			</div>
			
		</div>
	</section>
	<!-- End Counter Section -->
	
	
	
	<!--Main Footer-->
    <footer class="main-footer">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="index.html"><img src="images/logo.png" alt="" /></a>
                                    </div>
                                    <div class="text">Nirosh Media is a YouTube channel. It has Tech videos, Apps reviews and Websites reviews.</div>
                                    <ul class="social-icons">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                    </ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                	<h2>Quick links</h2>
									<div class="widget-content">
										<ul class="list">
                                        	<li><a href="#">About Me</a></li>
                                            <li><a href="#">Playlists</a></li>
                                            <li><a href="#">Contact Me</a></li>
                                            <li><a href="#">YouTube</a></li>
                                        </ul>
                                    </div>
								</div>
							</div>
						
						</div>
					</div>
					
					<!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
									<h2>Contact Info</h2>
									<div class="widget-content">
										<a href="tel:+94776287184" class="contact-number">(+94) 776 287 184</a>
										<ul>
											<li>472, Thirunagar, Mallavi</li>
											<li>Email :<a href="mailto:niroshmedia@gmail.com"> niroshmedia@gmail.com</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget newsletter-widget">
                                	<h2>Newsletter</h2>
									<div class="text">Get Videos Notification</div>
									<!-- Newsletter Form -->
									<div class="newsletter-form">
										<form method="post" action="templateshub.net">
											<div class="form-group">
												<input type="email" name="email" value="" placeholder="Enter your email address" required>
												<button type="submit" class="theme-btn btn-style-one"><span class="txt">Subscribe</span></button>
											</div>
										</form>
									</div>
								</div>
							</div>
						
						</div>
					</div>
					
				</div>
			</div>
			
			<!--Footer Bottom-->
            <div class="footer-bottom clearfix">
                <div class="pull-left">
                    <div class="copyright"><a href="niroshmedia.com">Nirosh Media</a></div>
                </div>
                <div class="pull-right">
                    <a href="#">Nirosh Media</a>
                </div>
            </div>
			
		</div>
	</footer>
	
</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	<form method="post" action="templateshub.net">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>
            
            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Tech video</a></li>
                <li><a href="#">Best app</a></li>
                <li><a href="#">Best websites</a></li>
            </ul>
        
        </div>
        
    </div>
</div>

<!--Scroll to top-->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/isotope.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/isotope.js"></script>
<script src="js/appear.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/script.js"></script>
<script src="https://apis.google.com/js/platform.js"></script>

</body>


</html>