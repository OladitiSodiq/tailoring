<?php

include('function.php');
// if (!isset($_SESSION)) { 
//     // no session has been started yet
//     session_start(); 
//   } 
// if (!isset($_SESSION['idcollector'])) {
//   header('location:../login.php');
// }

// else{

    
    
// }


$results = cool_con($conn);
$all = count_allusers($conn);
$alls = count_allorder($conn);


?>



<?php

include('iclud/head.php');?>

<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt="Aero"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Main Search -->
<div id="search">
    <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
    <form>
        <input type="search" value="" placeholder="Search..." />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>


<?php include('sidebar.php');?>

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
        <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Admin Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php"><i class="zmdi zmdi-home"></i></a></li>
                       
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <button class="btn btn-success btn-icon float-right" type="button"><i class="zmdi zmdi-upload"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">            
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2">
                        <div class="body big_icon storage">
                            <h6>No Of Users</h6>
                            <h2><?php print $all; ?> <small class="info"></small></h2>                            
                            <div class="progress m-t-10">
                            <div class="progress-bar l-green" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2">
                        <div class="body big_icon documents">
                            <h6>no of order</h6>
                            <h2><?php print $alls; ?><small class="info"></small></h2>                            
                            <div class="progress m-t-10">
                            <div class="progress-bar l-blush" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;"></div>
                            </div>
                        </div>
                    </div>
                </div>                    
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2">
                        <div class="body big_icon images">
                            <h6>Images</h6>
                            <h2><small class="info"></small></h2>
                            <div class="progress m-t-10">
                                <div class="progress-bar l-blue" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2">
                        <div class="body big_icon media_w">
                            <h6>Media</h6>
                            <h2>10GB <small class="info">of 1Tb</small></h2>                            
                            <div class="progress m-t-10">
                                <div class="progress-bar l-purple" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <ul class="nav nav-tabs pl-0 pr-0">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#list_view">List View</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#grid_view">Grid View</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="list_view">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0 c_table">
                                        <thead>
                                            <tr>
                                            <th>S/N</th>
                                                <th>Name</th>
                                                <th data-breakpoints="xs">Material Type</th>
                                                <th data-breakpoints="xs sm md">Style</th>
                                                <th data-breakpoints="xs">Material</th>
                                                <th data-breakpoints="xs">Due Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $x=0?>
                                        <?php foreach($results as $imgs):?>
                                        <?php $x++?>

                                            <tr>
                                            <td><?php print $x;?></td>
                                            <td> <?php 
                                            $colc = $imgs['id'];
                                            $query = "SELECT yname FROM users WHERE id= :i";
                                            $query = $conn -> prepare($query);
                                            $query -> bindParam(':i', $colc);
                                            $query -> execute();
                                            $resultss = $query->fetchAll(PDO::FETCH_ASSOC); 
                                         
                                        
                                             ?>
                                            <?php print $resultss[0]['yname'];?> 
                                            </td>
                                               
                                                <td><span><h5> <?php print $imgs['mat_type']; ?></h5></span></td>
                                               
                                                <td>	
                                                <img class="rounded avatar" src="<?php echo'../user/'.$imgs['style'].''?>" alt=""  width="48"></td>
                                                <td>	
                                                <img class="rounded avatar" src="<?php echo'../user/'.$imgs['material'].''?>" alt=""  width="48"></td>
                                                <td> <?php print $imgs['dates']; ?></td>
                                            </tr>
                                        <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane file_manager" id="grid_view">
                                <div class="row clearfix">
                                <?php foreach($results as $imgs):?>
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                   
                                        <div class="card">
                                       
                                            <a href="javascript:void(0);" class="file">
                                            
                                                <div class="hover">
                                                    <button type="button" class="btn btn-icon btn-icon-mini btn-round btn-danger">
                                                       <?php print $imgs['mat_type']; ?>
                                                    </button>
                                                </div>
                                                <div class="image">
                                                    <img src="<?php echo'../user/'.$imgs['style'].''?>" alt="img" class="img-fluid" >
                                                </div>
                                                <div class="file-name">
                                                    <p class="m-b-5 text-muted"><?php $colc = $imgs['id'];
                                            $query = "SELECT yname FROM users WHERE id= :i";
                                            $query = $conn -> prepare($query);
                                            $query -> bindParam(':i', $colc);
                                            $query -> execute();
                                            $resultss = $query->fetchAll(PDO::FETCH_ASSOC); 
                                         
                                        
                                             ?>
                                            <?php print $resultss[0]['yname'];?> </p>
                                                    <small>Size: 2MB <span class="date"></span><?php print $imgs['dates']; ?></span></small>
                                                </div>
                                           
                                            </a>
                                           
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
</section>
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/footable.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script>    
<script src="assets/js/pages/tables/footable.js"></script><!-- Custom Js -->
</body>

</html>