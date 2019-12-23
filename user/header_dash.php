<?php 
include('../func.php');
if (!isset($_SESSION)) { 
    // no session has been started yet
    session_start(); 
  } 
if (!isset($_SESSION['idcollector'])) {
  header('location:../login.php');
}

else{
$m = (int)$_SESSION['idcollector'];
 $query = 'SELECT username FROM users WHERE id = :i'; 
 $query = $conn->prepare($query);
 $query -> bindParam(':i', $m);
 $query-> execute();
 $result = $query->fetchAll(PDO::FETCH_ASSOC);
 // var_dump($result);

  $_SESSION['name']=$result[0]['username'];
}


?>


<?php include('head.php');?> 
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
                    <strong class="tg-logo"><a href="index.php"><img src="../images/logo.png" alt="company logo here"></a></strong>
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
                                    <li class="menu-item-has-children current-menu-item">
                                        <a href="javascript:void(0);">hOME</a>
                                        <ul class="sub-menu">
                                            <li class="current-menu-item"><a href="index.php">Home</a></li>
                                            
                                        </ul>
                                    </li>
                                   
                                </ul>
                            </div>
                        </nav>
                        <div class="pull-right">
                            <ul class="info-menu right-links list-inline list-unstyled">
                                <li class="profile showopacity">
                                    <a href="#" data-toggle="dropdown" class="toggle">
                                        <img src="../images/author/img-01.jpg" alt="" class="img-circle img-inline">
                                            <span><?php print $result[0]['username']?><i class="fa fa-angle-down"></i></span>
                                    </a>
                                    <ul class="dropdown-menu profile animated fadeIn">
                                        <li>
                                            <a href="logout.php">
                                                <i class="fa fa-wrench"></i>
                                                    Logout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>