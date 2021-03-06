<?php 
//MySQL Connection
require_once("config.php");
$mysqli = db_connect();
?>

<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<title>Nirosh Media | PlayLists</title>
<!-- Stylesheets -->
<link href="/css/bootstrap.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">
<link href="/css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
<link rel="icon" href="/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

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
                <div class="logo"><a href="index.html"><img width="234px" height="28px" src="/images/logo.png" alt="" title=""></a></div>
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
                            <li><a href="index.html">Home</a></li>
                            <li class="dropdown current"><a href="about.html">About</a>
                                <ul>
                                    <li><a href="about.html">Our Introduction</a></li>
                                    <li><a href="about_me.html">About Me</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="404.html">Playlists</a>
                                <ul>
                                    <li><a href="blog.html">Tech Videos</a></li>
										<li><a href="blog.html">Earning</a></li>
										<li><a href="blog.html">Google Form</a></li>
										<li><a href="blog.html">Apps Reviews</a></li>
										<li><a href="blog.html">websites Reviews</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
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
            <div class="nav-logo"><a href="index.html"><img src="/images/logo.png" alt="" title=""></a></div>
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

    <!--Page Title-->
    <section class="page-title" style="background-image:url(/images/background/14.jpg)">
    	<div class="auto-container">
        	<h2>Tech Videos</h2>
            <ul class="page-breadcrumb">
            	<li><a href="index-2.html">home</a></li>
                <li>Playlists</li>
				<li>Tech Videos</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Our Blogs Section -->
	<section class="our-blogs-section">
		<div class="auto-container">
			<div class="row clearfix">

			<?php 
			$video_type = $_GET['video_type'];
			$limit=$_GET['limit'];
			$playlist_result = $mysqli->query("SELECT * FROM videos WHERE video_type='$video_type' ORDER BY id DESC LIMIT $limit ");
			
			
			
						if($playlist_result->num_rows > 0){ 
							while($row = $playlist_result->fetch_assoc()){ ?>
				
				<!--News Block Two -->
				<div class="news-block-two style-two col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="404.html"><img src="/<?php echo $row['thumbnail']; ?>" alt="" /></a>
						</div>
						
						<div class="lower-content">
							<div class="upper-box clearfix">
								<div class="posted-date"><?php echo $row['date']; ?></div>
								<ul class="post-meta">
									<li>By :  niroshan</li>
									<li><?php echo $row['video_type']; ?></li>
									<li>Comments: <?php echo $row['comments_no']; ?></li>
								</ul>
							</div>
							<div class="lower-box">
								<h3><a href="404.html"><?php echo $row['video_title']; ?></a></h3>
								<div class="text"><?php echo $row['video_intro']; ?>
									</div>
									<a href="/Details/<?php echo $row['id']; ?>" class="theme-btn read-more">Read more</a>
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
							<a href="404.html"><img src="/images/resource/video-1.jpg" alt="" /></a>
						</div>
						
						<div class="lower-content">
							<div class="upper-box clearfix">
								<div class="posted-date">18 April 2021</div>
								<ul class="post-meta">
									<li>By :  Admin</li>
									<li>Tech Video</li>
									<li>Comments: 2</li>
								</ul>
							</div>
							<div class="lower-box">
								<h3><a href="404.html">How to add follow button on facebook profile?</a></h3>
								<div class="text">Facebook ????????????????????????????????? ????????????????????????????????? 5000+ ???????????? ???????????? ????????? ??????????????????????????? Facebook profile ????????? ????????????????????? Follow button ??? ??????????????????????????????????????????????????? ?????????????????? ??????????????? ???????????? ?????????????????????????????? ????????????????????? ???????????? ?????????????????????. ???????????? ???????????????????????? ??????????????????????????? ???????????????????????????????????? ???????????? ?????????????????????????????? ?????????????????? ?????????????????????????????????????????? ??????????????????????????? ?????????????????????????????????.
									</div>
									<a href="blog-detail.html" class="theme-btn read-more">Read more</a>
							</div>
						</div>
					</div>
				</div><?php 	} ?>
				
				</div>
				
			</div>
			<!--Styled Pagination-->
			
			
			<ul class="styled-pagination text-center">
				<li><a href="#" class="active">1</a></li>
				<li><a href="/Playlists/<?php echo $video_type; ?>s/Page=2">2</a></li>
				<li><a href="#"><span class="fa fa-angle-right"></span></a></li>
			</ul>                
			
			
			<!--End Styled Pagination-->
		</div>
	</section>
	<!-- End Our Blogs Section -->
	
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
                                    	<a href="index.html"><img src="/images/logo.png" alt="" /></a>
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
                <li><a href="#">Home Interiors</a></li>
                <li><a href="#">Offices Interiors</a></li>
                <li><a href="#">Showroom Interiors</a></li>
                <li><a href="#">Building Interiors</a></li>
                <li><a href="#">Shops Interiors</a></li>
            </ul>
        
        </div>
        
    </div>
</div>

<!--Scroll to top-->
<script src="/js/jquery.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/isotope.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/isotope.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/scrollbar.js"></script>
<script src="/js/script.js"></script>
</body>

</html>