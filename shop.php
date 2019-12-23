<?php




 include('func.php');
$imgcons = img_con($conn);

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
							<li class="tg-active">shop</li>
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
		<main id="tg-main" class="tg-main tg-haslayout"><!--  -->
			<div class="container">
				<div class="row">
					<div id="tg-twocolumns" class="tg-twocolumns">
						<div class="col-xs-12 col-sm-8 col-md-7 col-lg-9 pull-right">
							<div class="row">
								<div id="tg-content" class="tg-content">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="tg-pagehead">
											<h2>Suit Collections</h2>
											<div class="tg-description">
												<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt utnalo labore dolore magna aliqua minim veniaam quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat auis autetatio irure dolor in reprderit voluptate velit esse cillum dolore eu fugiat nulla pariatur sint occaecat cupidatat non proident.</p>
											</div>
										</div>
									</div>
									<!-- <form  action="shop.php" method="post"> -->
										<div class="tg-products tg-productgrid">
											<?php foreach($imgcons as $img):?>
												<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
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



										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<nav class="tg-pagination">
												<ul>
													<li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a></li>
													<li><a href="#">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">4</a></li>
													<li class="tg-active"><a href="#">5</a></li>
													<li>...</li>
													<li><a href="#">10</a></li>
													<li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a></li>
												</ul>
											</nav>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-5 col-lg-3 pull-left">
							<aside id="tg-sidebar" class="tg-sidebar">
								<form class="tg-themeform tg-formrefinesearch">
									
									<fieldset>
										<h4>Fabric</h4>
										<span class="tg-radio">
											<input type="radio" id="allfabric" name="fabric" value="All" checked>
											<label for="allfabric">
												<span>All</span>
												<span>(256)</span>
											</label>
										</span>
										<span class="tg-radio">
											<input type="radio" id="basketweave" name="fabric" value="Basket weave">
											<label for="basketweave">
												<span>Basket weave</span>
												<span>(521)</span>
											</label>
										</span>
										<span class="tg-radio">
											<input type="radio" id="batik" name="fabric" value="Batik">
											<label for="batik">
												<span>Batik</span>
												<span>(314)</span>
											</label>
										</span>
										<span class="tg-radio">
											<input type="radio" id="bedfordcord" name="fabric" value="Bedford cord">
											<label for="bedfordcord">
												<span>Bedford cord</span>
												<span>(65)</span>
											</label>
										</span>
										<span class="tg-radio">
											<input type="radio" id="broadcloth" name="fabric" value="Broadcloth">
											<label for="broadcloth">
												<span>Broadcloth</span>
												<span>(127)</span>
											</label>
										</span>
										<span class="tg-radio">
											<input type="radio" id="canvas" name="fabric" value="Canvas">
											<label for="canvas">
												<span>Canvas</span>
												<span>(621)</span>
											</label>
										</span>
									</fieldset>
									<fieldset>
										<h4>Color</h4>
										<span class="tg-checkbox">
											<input type="checkbox" id="allcolor" name="availability" value="Any" checked>
											<label for="allcolor">
												<span>All</span>
												<span>(256)</span>
											</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="charcoal" name="availability" value="Charcoal">
											<label for="charcoal">
												<span>Charcoal</span>
												<span>(521)</span>
											</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="cream" name="availability" value="Cream">
											<label for="cream">
												<span>Cream</span>
												<span>(314)</span>
											</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="navy" name="availability" value="Navy">
											<label for="navy">
												<span>Navy</span>
												<span>(65)</span>
											</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="blue" name="availability" value="Blue">
											<label for="blue">
												<span>Blue</span>
												<span>(127)</span>
											</label>
										</span>
									</fieldset>
									<fieldset>
										<h4>Price</h4>
										<div class="tg-amountbox">
											<span>Price Range: </span>
											<input type="text" id="tg-consultationfeeamount" readonly>
										</div>
										<div class="tg-padding"><div id="tg-consultationfeerangeslider" class="tg-consultationfeerangeslider tg-themerangeslider"></div></div>
									</fieldset>
									<fieldset>
										<h4>Brand</h4>
										<span class="tg-checkbox">
											<input type="checkbox" id="allbrands" name="brand" value="all" checked>
											<label for="allbrands">
												<span>All</span>
												<span>(256)</span>
											</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="male" name="brand" value="consectetur">
											<label for="male">
												<span>Consectetur</span>
												<span>(521)</span>
											</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="adipiscivelit" name="brand" value="Adipisci Velit">
											<label for="adipiscivelit">
												<span>Adipisci Velit</span>
												<span>(314)</span>
											</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="numquameiusmodi" name="brand" value="Numquam Eius Modi">
											<label for="numquameiusmodi">
												<span>Numquam Eius Modi</span>
												<span>(65)</span>
											</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="temporaincidunt" name="brand" value="Tempora Incidunt">
											<label for="temporaincidunt">
												<span>Tempora Incidunt</span>
												<span>(127)</span>
											</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="laboreetdolore" name="brand" value="Labore Et Dolore">
											<label for="laboreetdolore">
												<span>Labore Et Dolore</span>
												<span>(621)</span>
											</label>
										</span>
									</fieldset>
								</form>
								<div class="tg-advertisement">
									<a href="javascript:void(0);"><img src="images/adds/img-01.jpg" alt="image description"></a>
								</div>
							</aside>
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

<!-- Mirrored from codezel.com/html/tailors-online/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jun 2019 12:43:49 GMT -->
</html>