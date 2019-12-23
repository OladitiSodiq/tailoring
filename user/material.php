<?php

include('../func.php');
$er_msg="";

if (isset($_POST['submit'])) 
 {
  
  $mat_type =  $_POST['mat_type'];
    $dates=new DateTime('now');

    $date= $dates->format('Y-m-d H:i:s');
    if (!isset($_SESSION)) { 
        // no session has been started yet
        session_start(); 
      } 
    $m = $_SESSION['idcollector'];
  
  
 


  if (empty($mat_type)){
    $er_msg =  'You have to fill all this information to proceed';
  }
  else
  {
    if ((!isset($_FILES['up_material']['tmp_name'])) || (!isset($_FILES['up_style']['tmp_name'])))
    {
        $er_msg =  'You have to fill all this information to proceed';
    } 
    else{
        $up_material=$_FILES['up_material']['tmp_name']; 
        $up_style=$_FILES['up_style']['tmp_name'];

        $imageup_material= addslashes(file_get_contents($_FILES['up_material']['tmp_name']));
        $imageup_style= addslashes(file_get_contents($_FILES['up_style']['tmp_name']));

        $image_up_material= addslashes($_FILES['up_material']['name']);
        $image_up_style= addslashes($_FILES['up_style']['name']);

        move_uploaded_file($_FILES["up_material"]["tmp_name"],"upload/" . $_FILES["up_material"]["name"]);
       move_uploaded_file($_FILES["up_style"]["tmp_name"],"upload/" . $_FILES["up_style"]["name"]);

       $iup_material="upload/" . $_FILES["up_material"]["name"];
       $iup_style="upload/" . $_FILES["up_style"]["name"];

       $query = "INSERT INTO upload(id,mat_type,material,style,dates)
        values (:j,:f,:u ,:c,:d )";
      $query = $conn->prepare($query);
      $query->execute([
          ':j'=>$m,
          ':f' => $mat_type,
          ':u' => $iup_material,
          ':c' => $iup_style,
          ':d' => $date
      ]); 

    if ($query) {
      $er_msg = 'Successful. ';
      header("Refresh: 2; url=dashboard.php");
      
    }

    }

    

  }
 }
?>
<link rel="stylesheet" href="../css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
<link rel="stylesheet" href="cs_js/dropify.min.css">
<script src="cs_js/dropify.min.js"></script>
<?php include('header_dash.php');?> 
 <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
	
		
		
			
	<section class=" tg-haslayout">
			
            <div class="container">
					<div class="row">

							<?php include('sidebar.php');?> 	
                    </div>
</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-9 tg-verticalmiddle">
					<div class="panel-group" id="accordion" style="padding:3px;background:#fff;border-radius:10px;margin-top:30px;box-shadow:2px 2px 15px 0 rgba(46,61,73,.4)">
						<div class="panel">
                        <section class=" tg-haslayout">
                        <form action="material.php" enctype="multipart/form-data" method="post">
                            <div class="tg-shortcode tg-tailoronline">
                            <div style="font-weight: bold; font-size: ; color: red; margin-top: 20px;" class="text-center">
										<?php if ($er_msg != '') {
											print $er_msg;
										} ?>
            					</div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <strong class="tg-logo">
                                                <img src="../images/bgcomingsoon.jpg" alt="image description">
                                            </strong>
                                                <br/>
                                    

                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                    <div class="tg-themeform tg-formcontactus" >
                                        <fieldset>
                                            <div class="form-group">
                                            <label for="" value="Right Side View">Type of Material</label>
                                            <select name="mat_type" class="form-control">
                                                    <option value="">Type of Material </option>

                                                    <option  value="Lace">Lace </option>
                                                    <option value="Jeans Material"> Jeans Material</option>
                                                    <option value="Ankara"> Ankara</option>
                                                    <option value="Guinea"> Guinea</option>
                                                
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            <label for="" value="Right Side View">Upload Material</label>

                                            
                                            <input type="file"  name="up_material" class="dropify" data-allowed-file-extensions="pdf png">

                                             </div>
                                             <div class="form-group">
                                                <label for="" value="Right Side View">Upload Style</label>

                                                <input type="file"  name="up_style" class="dropify" data-allowed-file-extensions="pdf png">
                                                </div>
                                              
                                                                            
                                                <div class="modal-footer wizard-actions">
                                                            <input type="submit" name="submit" class="btn btn-success" value="Save">
                                                        </div>
                                                    
                                            
</fieldset>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </section>
                    </div>    
                </div>
			</div>
					
		</div>
	</section>
