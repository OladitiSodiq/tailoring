<?php
include('func.php');
$er_msg="";
if (isset($_POST['submit'])) 
 {

  $y_name =  $_POST['yourname'];
  $email=  $_POST['email']; 
  $phone=  $_POST['phone']; 
  $address=  $_POST['address']; 
  $usernames=  $_POST['username'];
  $passwords =  $_POST['password'];
  $confirms =$_POST['cpass'];
  
  
  
 


  if (empty($y_name)   ||empty($email)   || empty($phone) || empty($address) || empty($usernames) || empty($passwords) || empty($confirms) ){
    $er_msg =  'You have to fill all this information to proceed';
  }
  elseif ($passwords != $confirms ) {
     $er_msg = 'Password field must be the same as confirm password field';
  }
  else
  {


    $query = "INSERT INTO users(yname,email,phone,ad_ress,username,pword)
        values (:f,:u ,:c,:s,:a,:p )";
      $query = $conn->prepare($query);
      $query->execute([
          ':f' => $y_name,
          ':u' => $email,
          ':c' => $phone,
		  ':s' => $address,
		  ':a' => $usernames,
		  ':p' => md5($passwords)
		  
		  
      ]); 

    if ($query) {
      $er_msg = 'Students information insertion successful. ';
      header("Refresh: 2; url=login.php");
      
    }

  }
  

  
 



 }
?>






<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->

<!-- Mirrored from codezel.com/html/tailors-online/contactus.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jun 2019 12:43:12 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BootStrap HTML5 CSS3 Theme</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<!-- Liabraries CSS Files -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.flipster.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/pogoslider.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/transitions.css">
	<!-- Theme CSS Files -->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="tg-topbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<ul class="tg-addressinfo">
								<li>
									<i class="icon-map-marker"></i>
									<address>14 Tottenham Court Road, Manchester</address>
								</li>
								<li>
									<i class="icon-clock"></i>
									<time datetime="2016-10-10">Mon - Sat 9:00 - 17:00</time>
								</li>
								<li>
									<i class="icon-phone-handset"></i>
									<span>+4 1234 567890</span>
								</li>
							</ul>
							<ul class="tg-socialicons">
								<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
								<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
								<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
								<li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
								<li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-logonav">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<strong class="tg-logo"><a href="index-2.html"><img src="images/logo.png" alt="company logo here"></a></strong>
							<div class="tg-navigationarea">
								<nav id="tg-nav" class="tg-nav">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
										<ul>
											<li class="menu-item-has-children">
												<a href="javascript:void(0);">hOME</a>
												<ul class="sub-menu">
													<li><a href="index-2.html">Home-1</a></li>
													<li><a href="indexv2.html">Home-2</a></li>
												</ul>
											</li>
											<li><a href="shirt.html">Shirts</a></li>
											<li><a href="blazers.html">Blazers</a></li>
											<li><a href="pants.html">Pants</a></li>
											<li><a href="howitwork.html">How It Works</a></li>
											<li class="current-menu-item"><a href="contactus.html">Contact</a></li>
											<li class="menu-item-has-children">
												<a href="javascript:void(0);"><i class="fa fa-ellipsis-h"></i></a>
												<ul class="sub-menu">
													<li class="menu-item-has-children">
														<a href="javascript:void(0);">shop</a>
														<ul class="sub-menu">
															<li><a href="shop.html">shop</a></li>
															<li><a href="shopdetail.html">Product Detail</a></li>
														</ul>
													</li>
													<li class="menu-item-has-children">
														<a href="javascript:void(0);">blog</a>
														<ul class="sub-menu">
															<li><a href="newsgrid.html">blog grid</a></li>
															<li><a href="newslist.html">blog list</a></li>
															<li><a href="newsdetail.html">blog detail</a></li>
														</ul>
													</li>
													<li><a href="aboutus.html">About</a></li>
													<li><a href="404.html">404</a></li>
													<li><a href="comingsoon.html">coming soon</a></li>
												</ul>
											</li>
										</ul>
									</div>
								</nav>
								<a class="tg-btn tg-btnstartcustomizing" href="http://www.codezel.com/tailors-online/customizer/?pid=8" target="_blank"><span>new</span>Start Customizing</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Inner Page Banner Start
		*************************************-->
		<div class="tg-innerpagebanner">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<ol class="tg-breadcrumb">
							<li><a href="#">Home</a></li>
							<li class="tg-active">contact us</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Page Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout tg-paddingzero">
		
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
							<div class="tg-sectionhead">
								<div class="tg-heading">
									<h2>Team Behind Tailor Online</h2>
								</div>
								<div class="tg-description">
									<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etaiate dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.</p>
								</div>
							</div>
						</div>
						
						
						<div class="tg-shortcode tg-tailoronline">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<strong class="tg-logo">
									<img src="images/bgcomingsoon.jpg" alt="image description">
								</strong>
<br/>
								<div style="font-weight: bold; font-size: ; color: red; margin-top: 20px;" class="text-center">
										<?php if ($er_msg != '') {
											print $er_msg;
										} ?>
            					</div>

							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
								<form class="tg-themeform tg-formcontactus" action="sign-up.php" method="post" enctype="multipart/form-data">
									<fieldset>
										<div class="form-group">
											<input type="text" class="form-control" name="yourname" placeholder="Your Name">
										</div>
										<div class="form-group">
											<input type="email" class="form-control" name="email" placeholder="Email">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="phone" placeholder="Phone">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="address" placeholder="Address">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="username" placeholder="Username">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="password" placeholder="Password">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="cpass" placeholder="Confirm Password">
										</div>
										<button type="submit" name="submit" class="tg-btn">Register</button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
		
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-footerinfo">
				<div class="container">
					<div class="row">
						<div class="tg-threecolumns">
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-column">
									<strong class="tg-logo">
										<a href="javascript:void(0);"><img src="images/logo.png" alt="image description"></a>
									</strong>
									<div class="tg-description">
										<p>Consectetur adipisicing elit sed doi eiusmod empor incididunt utnalo labore doloregna aliqua mianiem aliquip commodo consequat.</p>
									</div>
									<ul class="tg-contactinfo">
										<li>
											<i class="icon-phone-handset"></i>
											<span>0800 - 1234 - 562 - 6</span>
										</li>
										<li>
											<i class="icon-printer"></i>
											<span>+4 1234 5678 - 9</span>
										</li>
										<li>
											<i class="icon-heart-pulse"></i>
											<span><a href="mailto:support@domain.com">support@domain.com</a></span>
										</li>
										<li>
											<i class="icon-pushpin"></i>
											<address>795 South Park Avenue, Door 640 pushpin  Wonland, CA 94107, Australia</address>
										</li>
									</ul>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
										<li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
										<li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-column">
									<div class="tg-widget tg-widgetusefulllinks">
										<div class="tg-widgettitle">
											<h3>Useful Links</h3>
										</div>
										<div class="tg-widgetcontent">
											<ul class="tg-usefulllinks tg-liststyledot">
												<li><a href="javascript:void(0);">Consectetur adipisicing</a></li>
												<li><a href="javascript:void(0);">Exercitation ullamco</a></li>
												<li><a href="javascript:void(0);">Sed do eiusmod</a></li>
												<li><a href="javascript:void(0);">Laboris nisi ut aliquip</a></li>
												<li><a href="javascript:void(0);">Tempor incididunt</a></li>
												<li><a href="javascript:void(0);">Commodo consequat</a></li>
												<li><a href="javascript:void(0);">Labore et dolore magna</a></li>
												<li><a href="javascript:void(0);">Ta ta ta papoii</a></li>
												<li><a href="javascript:void(0);">Lokato pokinata</a></li>
											</ul>
										</div>
									</div>
									<div class="tg-widget tg-widgetbusinesshours">
										<div class="tg-widgettitle">
											<h3>Business Hours</h3>
										</div>
										<div class="tg-widgetcontent">
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed doi eiusod empor incidint quistans aliquip commodo consequat.</p>
											</div>
											<ul class="tg-timinginfo">
												<li>
													<span>Monday - Friday: </span>
													<span>09:00am to 05:00pm</span>
												</li>
												<li>
													<span>Saturday: </span>
													<span>09:00am to 02:00pm</span>
												</li>
												<li>
													<span>Sunday: </span>
													<span>Closed</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-column">
									<div class="tg-widget">
										<div class="tg-widgettitle">
											<h3>Signup Newsletter</h3>
										</div>
										<div class="tg-widgetcontent">
											<form class="tg-themeform tg-formsignupnewsletter">
												<fieldset>
													<div class="form-group">
														<input type="text" class="form-control" name="firstname" placeholder="First Name">
													</div>
													<div class="form-group">
														<input type="text" class="form-control" name="lastname" placeholder="last Name">
													</div>
													<div class="form-group">
														<input type="email" class="form-control" name="email" placeholder="Enter Your Email Here*">
													</div>
													<div class="form-group">
														<button type="submit" class="tg-btn">signup</button>
													</div>
												</fieldset>
											</form>
											<div class="tg-noticearea">
												<span class="tg-noticeicon"><i class="icon-bullhorn"></i></span>
												<h4>We Don’t Scam!</h4>
												<p>Consectetur adipisicing elit sed doi eiusod empor incidint.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-footerbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<span class="tg-copyright">2017 All Rights Reserved © Tailor Online</span>
							<nav class="tg-addnav">
								<ul>
									<li><a href="javascript:void(0);">Terms &amp; Conditions</a></li>
									<li><a href="javascript:void(0);">Privacy Policy</a></li>
									<li><a href="javascript:void(0);">How It Works</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.html"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="js/jquery.flipster.min.html"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/pogoslider.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/countTo.html"></script>
	<script src="js/appear.js"></script>
	<script src="js/gmap3.js"></script>
	<script src="js/main.js"></script>
</body>

<!-- Mirrored from codezel.com/html/tailors-online/contactus.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jun 2019 12:43:32 GMT -->
</html>
