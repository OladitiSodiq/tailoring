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


$results = cusdet($conn);



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
        </div>
        <div class="container-fluid">            
           
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
                                               
                                                <th data-breakpoints="xs">Customer's Name</th>
                                                <th data-breakpoints="xs sm md">Address</th>
                                                <th data-breakpoints="xs">Email</th>
                                                <th data-breakpoints="xs">Phone</th>
                                                <th data-breakpoints="xs">Measurement</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $x=0?>
                                        <?php foreach($results as $imgs):?>
                                        <?php $x++?>

                                            <tr>
                                            <td><?php print $x;?></td>
                                            <td><span> <?php print $imgs['yname']; ?></span></td>
                                            <td><span> <?php print $imgs['ad_ress']; ?></span></td>
                                            <td><span> <?php print $imgs['email']; ?></span></td> 
                                            <td><span> <?php print $imgs['phone']; ?></span></td>
                                            <td><span> B:<?php print $imgs['brea']; ?>  L:<?php print $imgs['leng']; ?>  W:<?php print $imgs['wid']; ?></span></td>
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