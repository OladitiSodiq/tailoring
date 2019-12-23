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
  $leng=  $_POST['leng'];
  $brea =  $_POST['brea'];
  $wid =$_POST['wid'];
  
  
 


  if (empty($y_name)   ||empty($email)   || empty($phone) || empty($address) || empty($usernames) || empty($passwords) || empty($confirms) || empty($leng) || empty($brea) || empty($wid) ){
    $er_msg =  'You have to fill all this information to proceed';
  }
  elseif ($passwords != $confirms ) {
     $er_msg = 'Password field must be the same as confirm password field';
  }
  else
  {


    $query = "INSERT INTO users(yname,email,phone,ad_ress,username,pword,leng,brea,wid)
        values (:f,:u ,:c,:s,:a,:p,:h,:k,:m )";
      $query = $conn->prepare($query);
      $query->execute([
          ':f' => $y_name,
          ':u' => $email,
          ':c' => $phone,
		  ':s' => $address,
		  ':a' => $usernames,
          ':p' => md5($passwords),
          ':h' =>$leng,
          ':k' =>$brea,
          ':m' =>$wid
		  
		  
      ]); 

    if ($query) {
      $er_msg = 'Students information insertion successful. ';
      header("Refresh: 2; url=login.php");
      
    }

  }
 }
?>






<!DOCTYPE html>
<html lang="en">


   <head>   
   <?php include('include/head.php');?>             
   <?php include('include/header.php');?> 
  
    <link rel="stylesheet" href="css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />


    <style type="text/css">
        .ace-save-state {
            right: 86px;
        }
    </style>
</head>

<body class="no-skin">


    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.loadState('main-container')
            } catch (e) {}
        </script>



        <div class="widget-body">
            <div class="widget-main">
                <div id="fuelux-wizard-container">
                    <div>
                        <ul class="steps">
                            <li data-step="1" class="active">
                                <span class="step">1</span>
                                <span class="title">Material</span>
                            </li>

                            <li data-step="2">
                                <span class="step">2</span>
                                <span class="title">Style</span>
                            </li>

                            <li data-step="3">
                                <span class="step">3</span>
                                <span class="title">Measurement</span>
                            </li>

                            <li data-step="4">
                                <span class="step">4</span>
                                <span class="title">Collection Date</span>
                            </li>
                        </ul>
                    </div>
            <form action="sign-up.php" method="post" enctype="multipart/form-data">
                    <div style="font-weight: bold; font-size: ; color: red; margin-top: 20px;" class="text-center">
										<?php if ($er_msg != '') {
											print $er_msg;
										} ?>
            					</div>
                    <hr />
                  
                    <div class="step-content pos-rel">
                        <div class="step-pane active" data-step="1">
                        <section class=" tg-haslayout">
			
                        <div class="tg-shortcode tg-tailoronline">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<strong class="tg-logo">
											<img src="images/bgcomingsoon.jpg" alt="image description">
										</strong>
											<br/>
								

							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
								<div class="tg-themeform tg-formcontactus" >
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
										
										
									</fieldset>
								</div>
							</div>
						</div>
					
		                </section>
                        </div>
                        <div class="step-pane" data-step="2">
                            <section class=" tg-haslayout">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<strong class="tg-logo">
											<img src="images/bgcomingsoon.jpg" alt="image description">
                                        </strong>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                        <div class="form-group">
											<input type="text" class="form-control" name="username" placeholder="Username">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="password" placeholder="Password">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="cpass" placeholder="Confirm Password">
                                        </div>
                            </div>
		                    </section>
                        </div>

                        <div class="step-pane" data-step="3">
                        <section class=" tg-haslayout">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<strong class="tg-logo">
											<img src="images/bgcomingsoon.jpg" alt="image description">
                                        </strong>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                        <div class="form-group">
											<input type="text" class="form-control" name="leng" placeholder="Length">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="brea" placeholder="Breath">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="wid" placeholder="Width">
                                        </div>
                            </div>
		                    </section>
                        </div>

                        <div class="step-pane" data-step="4">
                            <div class="center">


                            <button type="submit" name="submit" class="tg-btn">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                <hr />
                <div class="wizard-actions">
                    <button class="btn btn-prev">
													<i class="ace-icon fa fa-arrow-left"></i>
													Prev
												</button>

                    <button class="btn btn-success btn-next" data-last="Finish">
													Next
													<i class="ace-icon fa fa-arrow-right"></i>
												</button>
                </div>
            </div>
            <!-- /.widget-main -->
        </div>
        <!-- /.widget-body -->
    </div>

    <div id="modal-wizard" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="modal-wizard-container">
                   

                    <div class="modal-body step-content">
                        <div class="step-pane active" data-step="1">
                            <div class="center">
                                <h4 class="blue">Step 1</h4>
                            </div>
                        </div>

                        <div class="step-pane" data-step="2">
                            <div class="center">
                                <h4 class="blue">Step 2</h4>
                            </div>
                        </div>

                        <div class="step-pane" data-step="3">
                            <div class="center">
                                <h4 class="blue">Step 3</h4>
                            </div>
                        </div>

                        <div class="step-pane" data-step="4">
                            <div class="center">
                                <h4 class="blue">Step 4</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer wizard-actions">
                    <button class="btn btn-sm btn-prev">
													<i class="ace-icon fa fa-arrow-left"></i>
													Prev
												</button>

                    <button class="btn btn-success btn-sm btn-next" data-last="Finish">
													Next
													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
												</button>

                    <button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Cancel
												</button>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE CONTENT ENDS -->



    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>

    <script src="assets/js/jquery-2.1.4.min.js"></script>


    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>
    <script src="../js/bootstrap.min.js"></script>

 
    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function($) {



            var $validation = false;
            $('#fuelux-wizard-container')
                .ace_wizard({
                    //step: 2 //optional argument. wizard will jump to step "2" at first
                    //buttons: '.wizard-actions:eq(0)'
                })


            .on('finished.fu.wizard', function(e) {
                bootbox.dialog({ <?php
// $target_dir = "upload/";
// $target_file = $target_dir . basename($_FILES["file"]["name"]);

// if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$_FILES['file']['name'])) {
//    $status = 1;
// }

?>
                    message: "Thank you! Your information was successfully saved!",
                    buttons: {
                        "success": {
                            "label": "OK",
                            "className": "btn-sm btn-primary"
                        }
                    }
                });
            }).on('stepclick.fu.wizard', function(e) {
                //e.preventDefault();//this will prevent clicking and selecting steps
            });






            //documentation : http://docs.jquery.com/Plugins/Validation/validate


            $.mask.definitions['~'] = '[+-]';
            $('#phone').mask('(999) 999-9999');

            jQuery.validator.addMethod("phone", function(value, element) {
                return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
            }, "Enter a valid phone number.");

            $('#validation-form').validate({
                errorElement: 'div',
                errorClass: 'help-block',
                focusInvalid: false,
                ignore: "",
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    password2: {
                        required: true,
                        minlength: 5,
                        equalTo: "#password"
                    },
                    name: {
                        required: true
                    },
                    phone: {
                        required: true,
                        phone: 'required'
                    },
                    url: {
                        required: true,
                        url: true
                    },
                    comment: {
                        required: true
                    },
                    state: {
                        required: true
                    },
                    First_name: {
                        required: true
                    },
                    Sur_name: {
                        required: true
                    },
                    gender: {
                        required: true,
                    },
                    Last_name: {
                        required: true,
                    }
                },

                messages: {
                    email: {
                        required: "Please provide a valid email.",
                        email: "Please provide a valid email."
                    },
                    password: {
                        required: "Please specify a password.",
                        minlength: "Please specify a secure password."
                    },
                    state: "Please choose state",
                    Sur_name: "Surname required",
                    Last_name: "Lastname required",
                    First_name: "Firstname required",
                    gender: "Please choose gender",
                    agree: "Please accept our policy"
                },


                highlight: function(e) {
                    $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
                },

                success: function(e) {
                    $(e).closest('.form-group').removeClass('has-error'); //.addClass('has-info');
                    $(e).remove();
                },



                submitHandler: function(form) {},
                invalidHandler: function(form) {}
            });




            $('#modal-wizard-container').ace_wizard();
            $('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');


        })
    </script>
</body>

</html>