<?php 
 include('func.php');
 $imgcons = img_con($conn);
$m =  $_GET['sta_a'];
$query = 'SELECT * FROM upload WHERE style = :i'; 
$query = $conn->prepare($query);
$query -> bindParam(':i', $m);
$query-> execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
$result=$result[0];

?>

<?php include('include/head.php');?>
<body>
	
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		
	<?php include('include/header.php');?>

		<div class="tg-innerpagebanner">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<ol class="tg-breadcrumb">
							<li><a href="#">Home</a></li>
							<li><a href="#">product</a></li>
							<li class="tg-active">Detail</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		



		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div id="tg-content" class="tg-content">
							<div class="tg-product tg-productdetail">
								<div class="tg-productbox">
									<div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
										<div class="tg-productgallery">
											<div id="tg-viewslider" class="tg-viewslider tg-productgalleryslider owl-carousel">
												<figure class="item"><?php 
											echo' <img src="user/'.$result['style'].'"  alt="image description">';?></figure>
												
											</div>
											<div id="tg-thumblider" class="tg-thumblider tg-productgalleryslider owl-carousel">
												<figure class="item"><?php 
											echo' <img src="user/'.$result['style'].'"  alt="image description">';?></figure>
												<figure class="item"><?php 
											echo' <img src="user/'.$result['material'].'"  alt="image description">';?></figure>
												<figure class="item"><?php 
											echo' <img src="user/'.$result['material'].'"  alt="image description">';?></figure>
												<figure class="item"><?php 
											echo' <img src="user/'.$result['material'].'"  alt="image description">';?></figure>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-7 col-lg-8">
										<div class="tg-producttextbox">
											<div class="tg-producttextboxhead">
												<div class="tg-leftbox">
													<h1>Product Title Here</h1>
													<span class="tg-stars"><span></span></span>
												</div>
												<div class="tg-rightbox">
													<span>$164 / $190</span>
													<span>Available In Stock</span>
												</div>
											</div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etaiatiea dolore magna aliqua aseenim adiat minim veniam, quis nostrud exercitation ullaceo laboris nisi ut aliquip ex ea commodo consequat aute irure dolor ina reprehenderit inchieach voluptate velit esse cillum dolore eu fugiat cepteur sint occaecat cupidatat non proident sunt in culpa quista officia deserunt mollit anim id est laborum.</p>
											</div>
											<div class="tg-producttextboxfoot">
												<a class="tg-btn" href="javascript:void(0);">Add To Cart</a>
												<a class="tg-btn" href="http://www.codezel.com/tailors-online/customizer/?pid=8" target="_blank">Start Customizing</a>
												<div class="tg-productshare">
													<span>Share:</span>
													<ul class="tg-socialicons">
														<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
														<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
														<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
														<li class="tg-dribbble"><a href="javascript:void(0);"><i class="fa fa-dribbble"></i></a></li>
														<li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tg-producttabs">
									<ul class="tg-producttabnav" role="tablist">
										<li role="presentation" class="active"><a href="#tg-deescription" role="tab" data-toggle="tab">Description</a></li>
										<li role="presentation"><a href="#tg-reviews" role="tab" data-toggle="tab">Reviews</a></li>
									</ul>
									<div class="tab-content tg-tabcontent">
										<div role="tabpanel" class="tab-pane fade in active" id="tg-deescription">
											<figure class="tg-alignleft"><?php 
											echo' <img src="user/'.$result['style'].'"  alt="image description">';?></figure>
											<div class="tg-description">
												<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etaiatiea dolore magna aliqua aseenim adiat minim veniam, quis nostrud exercitation ullaceoate laboris nisi ut aliquip ex eaommodo consequat aute irure dolor ina reprehenderit inchieach voluptate velit esse cillum dolore eufugiat aeur sint occaecat cupidatate non proident sunt in culpa quista.</p>
												<p>Sed ut perspiciatis unde omnis iste natus error sitateu voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatiset quasi architecto beatae vitae dicta sunt explicabo lokiatana poketona shonua.</p>
												<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modita tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="tg-reviews">
											<figure class="tg-alignright"><img src="images/products/img-16.jpg" alt="image description"></figure>
											<div class="tg-description">
												<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etaiatiea dolore magna aliqua aseenim adiat minim veniam, quis nostrud exercitation ullaceoate laboris nisi ut aliquip ex eaommodo consequat aute irure dolor ina reprehenderit inchieach voluptate velit esse cillum dolore eufugiat aeur sint occaecat cupidatate non proident sunt in culpa quista.</p>
												<p>Sed ut perspiciatis unde omnis iste natus error sitateu voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatiset quasi architecto beatae vitae dicta sunt explicabo lokiatana poketona shonua.</p>
												<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modita tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tg-relatedproducts">
								<h2>Related Products</h2>
								<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div id="tg-productslider" class="tg-productslider owl-carousel tg-products">
							<?php foreach($imgcons as $img):?>
								<div class="itm">
								<div class="tg-product">
														<figure class="tg-productimg">
																<?php 
																echo' <img src="user/'.$img['style'].'"  alt="image description">';?>
															<figcaption>
																<div class="tg-hoverimglink">
																	<img src="images/products/img-10.png" alt="image description">
																	<button name="view">
																	<a  href=<?php print  'shopdetail.php?sta_a='. $img['style'];?>>
																		<span>View Detail</span>
																		<i class="fa fa-angle-right"></i></a>
																	</button>
																</div>
															</figcaption>
														</figure>
														<div class="tg-productcontent">
															<div class="tg-producttitle">
																<h3><a href="shopdetail.html">Fabric Title Here</a></h3>
															</div>
															<div class="tg-rating">
																<span class="tg-stars"><span></span></span>
															</div>
															<div class="tg-price">
																<h4><a href="javascript:void(0);">$330</a></h4>
															</div>
														</div>
													</div>
								</div>
							<?php endforeach?>
							</div>
						</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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

<!-- Mirrored from codezel.com/html/tailors-online/shopdetail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jun 2019 12:43:54 GMT -->
</html>