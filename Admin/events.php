
<?php
include('./function.php');


$cool_con = cool_con($conn);
?>

<?php

include('iclud/head.php');?>
<!doctype html>
<html class=" " lang="en">


<!-- Favicon-->

<link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" href="assets/plugins/bootstrap-select/css/bootstrap-select.css" />
<!-- Custom Css -->



<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/fullcalendarscripts.bundle.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script> -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/calendar/calendar.js"></script>

<script >
 $(document).ready(function() {



            // var today = new Date();

            // var dd = today.getDate();

            // var mm = today.getMonth() + 1; //January is 0!

            // var yyyy = today.getFullYear();



            // if (dd < 10) { dd = '0' + dd }

            // if (mm < 10) { mm = '0' + mm }



            // var current = yyyy + '-' + mm + '-';

            var calendar = $('#calendar').fullCalendar({

                header: {

                    left: 'title',

                    center: '',

                    right: 'month, agendaWeek, agendaDay, prev, next'

                },

                events:"calendar.php",

                editable: true,

                // droppable: true,

                // eventLimit: true, // allow "more" link when too many events

                selectable: true,




                select: function(start, end, allDay) {

                    // newEvent(start);
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                    calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        },
                true
                        );

                },


            })

      
    }); 
    </script>

</head>
<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt="Aero"></div>
        <p>Please wait...</p>
    </div>
</div>


<?php include('sidebar.php');?>

<section class="content page-calendar">
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
            <div class="row">                
                <div class="col-md-12 col-lg-8 col-xl-8">
                    <div class="card">
                        <div class="body">                            
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 col-xl-4">
                    
                <div class="card">
                
                        <div class="event_list">
                            <button type="button" class="btn btn-info btn-block waves-effect" data-toggle="modal" data-target="#addevent">Events</button>
                            <?php foreach($cool_con as $img):?>
                            <div class="e_list">
                                <h5 class="e_name"><?php print $img['dates']?><span class="badge badge-primary float-right">Conference</span></h5>
                                <address><i class="zmdi zmdi-pin"></i> <?php 
                                            $colc = $img['id'];
                                            $query = "SELECT yname FROM users WHERE id= :i";
                                            $query = $conn -> prepare($query);
                                            $query -> bindParam(':i', $colc);
                                            $query -> execute();
                                            $resultss = $query->fetchAll(PDO::FETCH_ASSOC); 
                                         
                                        
                                             ?>
                                            <?php print $resultss[0]['yname'];?> </address>
                                <p class="e_details"><?php print $img['mat_type']?>.</p>
                            </div>
                            <?php endforeach?>
                        </div>
                
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


</body>

</html>