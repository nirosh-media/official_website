
            <?php
//MySQL Connection
require_once("config.php");
$mysqli = db_connect();

$event_id = $_GET['id'];
$event_result = $mysqli->query("SELECT * FROM videos WHERE id='$event_id'");
$row = $event_result->fetch_assoc();
?>
            	

<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<title>Nirosh Media | Details</title>
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
                            <li class="dropdown"><a href="about.html">About</a>
                                <ul>
                                    <li><a href="about.html">Our Introduction</a></li>
                                    <li><a href="about_me.html">About Me</a></li>
                                </ul>
                            </li>
                            <li class="dropdown current"><a href="404.html">Playlists</a>
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
    <section class="page-title" style="background-image:url(/images/background/6.jpg)">
    	<div class="auto-container">
        	<h2>Details</h2>
            <ul class="page-breadcrumb">
            	<li><a href="index-2.html">home</a></li>
                <li>Details</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">

                <!--Content Side / Blog Classic -->
                <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                	<div class="blog-single padding-right">
						<div class="inner-box">
							<div class="image-box">
                                <figure class="image"><img src="/<?php echo $row['thumbnail']; ?>" alt=""></figure>
                                <span class="date"><?php echo $row['date']; ?></span>
                            </div>
                            <div class="lower-content">
                                <div class="post-meta">
                                    <ul class="post-info clearfix">
                                        <li><a href="blog-detail.html">By : niroshan</a></li>
                                        <li><a href="blog-detail.html"><?php echo $row['video_type']; ?></a></li>
                                        <li><a href="blog-detail.html">Comments: <?php echo $row['comments_no']; ?></a></li>
                                    </ul>
                                </div>
								<div class="lower-box">
									<h3><?php echo $row['video_title']; ?></h3>
									<div class="text">
										<p><?php echo $row['video_description']; ?></p>
									</div>
								</div>
                                <div class="image-box">
                                    <iframe class="ytvideo" width="100%" height="400" src="<?php echo $row['ytlink']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                 <!-- Fluid Section One -->
							</div>
						</div> 
                    </div>
				</div>

               
				
				<!--Sidebar Side-->
				<div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
					<aside class="sidebar">
						
						<!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form method="post" action="templateshub.net">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Enter Search Keywords" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>
						
						<!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h2>Categories</h2>
                            </div>
                            <ul class="cat-list">
                                <li><a href="#">Tech Videos</a></li>
                                <li><a href="#">Online Earning</a></li>
                                <li><a href="#">Google Form</a></li>
                                <li><a href="#">Apps Reviews</a></li>
                                <li><a href="#">Websites Reviews</a></li>
                            </ul>
                        </div>
						
						<!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h2>Recent Uploads</h2></div>

                            <?php 

						$popular_result = $mysqli->query("SELECT * FROM videos ORDER BY id DESC LIMIT 5");
						if($popular_result->num_rows > 0){ 
							while($row = $popular_result->fetch_assoc()){ ?>

                            <article class="post">
                            	<figure class="post-thumb"><a href="blog-detail.html"><img src="/<?php echo $row['thumbnail']; ?>" alt=""></a></figure>
                                <div class="text"><a href="blog-detail.html"><?php echo $row['video_title']; ?></a></div>
                                <div class="post-info"><?php echo $row['date']; ?></div>
                            </article>
                            <?php 	} 
						} else{ ?>
                            <article class="post">
                            	<figure class="post-thumb"><a href="blog-detail.html"><img src="/images/resource/video-1.jpg" alt=""></a></figure>
                                <div class="text"><a href="blog-detail.html">How to add follow button on facebook profile?</a></div>
                                <div class="post-info">18 April. 2021</div>
                            </article>
                            <?php 	} ?>
                            
                        </div>
						
						<!-- Popular Tags -->
                        <div class="sidebar-widget popular-tags">
                            <div class="sidebar-title"><h2>Tags</h2></div>
                            <a href="#">Best App</a>
                            <a href="#">App Review</a>
                            <a href="#">Nirosh Media</a>
                            <a href="#">How To</a>
                            <a href="#">In Tamil</a>
                            <a href="#">Tech Video</a>
                        </div>
						
					</aside>
				</div>
				
			</div>
		</div>
	</div>
	
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
<script src="https://apis.google.com/js/platform.js"></script>
</body>


</html>