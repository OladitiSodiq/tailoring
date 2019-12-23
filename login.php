<?php 
$er_msg="";
include('func.php');
if (isset($_POST['submit'])) {
  $email = $_POST['username'];
  $password = md5($_POST['password']);

  if (empty($email) || empty($password)) {
    $er_msg = 'Fill form properly to login';
  }else{
    $query = "SELECT * FROM users WHERE username= :e AND pword = :p";
    $query = $conn -> prepare($query);
    $query -> execute([':e' => $email, ':p' =>  $password ]);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    // print $result;

    if ($results) {

        $results = $results[0];
      session_start();
	  $_SESSION['idcollector'] = $results['id'];
	  header("Refresh: 2; url=user/dashboard.php");

	}
	else{
		$er_msg="Wrong Input";
	}
}
}?>
<?php include('include/head.php');?>             
   <?php include('include/header.php');?> 
<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<!-- Mirrored from codezel.com/html/tailors-online/comingsoon.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jun 2019 12:44:05 GMT -->

<body class="tg-comingsoonpage">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
	
		<main id="tg-main" class="tg-main tg-haslayout tg-paddingzero">
		
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-comingsooncontent">
								<strong class="tg-logo">
									<img src="images/logo.png" alt="image description">
								</strong>
							
								
								<div class="tg-commingsooncounter">
								<div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">
                    <!-- <img src="../images/logo.png" class="responsive-img"> -->
                  </h1>
                </div>
                <form method="POST" action="" class="user" id="formLogin">
				<div style="font-weight: bold; font-size: ; color: red; margin-top: 20px;" class="text-center">
							<?php if ($er_msg != '') {
								print $er_msg;
							} ?>
			</div>
			<br/>
                  <div class="form-group">
                    <input type="" name="username" class="form-control form-control-user" placeholder="Enter Email Address...">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block" name="submit">
                   Submit
				  </button>
				  

                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="sign-up.php">Sign-Up</a>
                </div>
              </div>
								</div>
							</div>
						</div>
					</div>
				</div>
		
		</main>
	
		<footer id="tg-footer" class="tg-footer tg-haslayout">
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
</html>