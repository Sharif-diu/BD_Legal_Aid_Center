
<?php
require_once '../config/connection.php';
require_once './session_check.php';
$query="SELECT * from counting_info  LIMIT 4 "; 
$result=mysqli_query($con,$query) or die ('date Query is not execute !!');
$counting_info=array();$i=0;
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        { 
            if($row['is_percent']){
                $counting_info[$i] = $row['count']."%";
            }
            else{
                $counting_info[$i] = $row['count'];
            }
            $i++;
            
        }
    }

$query1="SELECT * from apoinment ORDER BY id DESC LIMIT 5 "; 
$result1=mysqli_query($con,$query1) or die ('date Query is not execute !!');					
                   
$query2="SELECT COUNT(id) as total_blog FROM `blog` ";
$result2=mysqli_query($con,$query2) or die ('date Query is not execute !!');
$blog_info = mysqli_fetch_array($result2);

$query3="SELECT * from contact ORDER BY id DESC LIMIT 5 "; 
$result3=mysqli_query($con,$query3) or die ('date Query is not execute !!');

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="#">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon-16x16.png">
    <title>
    বাংলাদেশ আইনী সহায়তা কেন্দ্র
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="./css/materil.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./css/custom.css" rel="stylesheet" />
    <link href="./css/responsive.css" rel="stylesheet" />

</head>

<body class="">

    <div class="wrapper ">
          <?php include './sidebar.php'; ?>
        <div class="main-panel">
            <!-- Navbar -->
            <?php include './navbar.php'; ?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="custom-icon-card card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <img src="./img/Group-1394-white.png" alt="building">
                                    </div>
                                    <p class="card-category">কেস সমাধান হয়েছে</p>
                                    <h3 class="card-title"><?php echo $counting_info[0];?></h3>
                                </div>

                                <div class="card-body">
                                    <div class="stats">
                                        <div class="progress" style="height: 4px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="custom-icon-card card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <img src="./img/Group-1396-white.png" alt="building">
                                    </div>
                                    <p class="card-category">বিজয়ী কেস</p>
                                    <h3 class="card-title"><?php echo $counting_info[1];?></h3>
                                </div>
                                <div class="card-body">
                                    <div class="stats">
                                        <div class="progress" style="height: 4px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="custom-icon-card card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <img src="./img/Group-1383-white.png" alt="building">
                                    </div>
                                    <p class="card-category">ক্লাইন্ট খুশী হয়েছে</p>
                                    <h3 class="card-title"><?php echo $counting_info[2];?></h3>
                                </div>
                                <div class="card-body">
                                    <div class="stats">
                                        <div class="progress" style="height: 4px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="custom-icon-card card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <img src="./img/Group-1395-white.png" alt="building">
                                    </div>
                                    <p class="card-category">বিজয়ী পুরষ্কার</p>
                                    <h3 class="card-title"><?php echo $counting_info[3];?></h3>
                                </div>
                                <div class="card-body">
                                    <div class="stats">
                                        <div class="progress" style="height: 4px;">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 65%"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary custom-card-height">
                                    <div class="float-left">
                                        <a><span class="material-icons custom-material-icon">
                                                person
                                            </span><span>Appointment</span></a>
                                    </div>
                                    <div class="text-right">
                                        <h4 class="card-title"></h4>
                                        <p class="card-category"></p>
                                    </div>
                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                        </thead>
                                        <tbody>
                                             <?php 

                                                if(mysqli_num_rows($result1) > 0)
                                                {
                                                    while($row = mysqli_fetch_array($result1))
                                                    { 
                                                       ?>

                                                       <tr>
                                                        <td><?php echo $row['name'].",".$row['podobi']; ?></td>
                                                        <td><?php echo $row['phone'];?></td>
                                                        <td><?php echo $row['email'];?></td>
                                                        <td><?php echo $row['subject'];?></td>
                                                    </tr>
                                                        
                                                  <?php  }
                                                }
                                             
                                             ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="custom-account-card card">
                                <div class="card-header card-header-warning custom-card-height">

                                    <div class="float-left">
                                        <a><span class="material-icons custom-material-icon">
                                                person
                                            </span>Blog summary</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="progress custom-progress mx-auto" data-value='100'>
                                        <span class="progress-left">
                                            <span
                                                class="progress-bar account-progress-bar border-info bg-gray-white"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span
                                                class="progress-bar account-progress-bar border-info bg-gray-white"></span>
                                        </span>
                                        <div
                                            class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                            <div class="h5 font-weight-bold text-center"><?php echo $blog_info['total_blog']; ?><br>Totatl Blog</div>
                                        </div>
                                    </div>
                                    <!-- Demo info -->
                                    <!--<div class="row text-center mt-4">
                                        <div class="col-6 border-right">
                                            <div class="p mb-0 bullet">Current Month Due</div><span
                                                class="small text-gray">18,570</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="p mb-0 bullet">Current Month Paid</div><span
                                                class="small text-gray">31,430</span>
                                        </div>
                                    </div>-->
                                    <!-- END -->
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card custom-user-info-card">
                                <div class="card-header card-header-danger">
                                    <div class="float-left">
                                        <a><span class="material-icons custom-material-icon">
                                                person
                                            </span><span>Contact</span></a>
                                    </div>
                                    <div class="float-right">
                                        <div class="user-profile-nav">
                                            <div class="searchbar">
                                                <input class="search_input" type="text" name="" placeholder="Search...">
                                                <a href="#" class="search_icon"><i class="material-icons">search</i></a>
                                            </div>
                                            <!--<div class="btn-add-group">
                                                <button type="submit" class="btn btn-white">
                                                    <span class="material-icons add-icon">
                                                        add_box
                                                    </span> Add New</button>
                                                <button type="submit" class="btn btn-white"><span
                                                        class="material-icons add-icon">
                                                        picture_as_pdf
                                                    </span>
                                                    PDF</button>
                                            </div>-->

                                        </div>
                                    </div>
                                </div>
                                <div class="card-body custom-user-table-data">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-danger">
                                                
                                                <th style="width:20%">
                                                    Name
                                                </th>
                                                <th style="width:22%">
                                                    Email
                                                </th>
                                                <th style="width:10%">
                                                    Phone
                                                </th>
                                                <th style="width:20%">
                                                   Subject
                                                </th>
                                                <th style="width: 15%;">
                                                    Description
                                                </th>
                                               
                                            </thead>
                                            <tbody>

                                            <?php 

                                                if(mysqli_num_rows($result3) > 0)
                                                {
                                                    while($row = mysqli_fetch_array($result3))
                                                    { 
                                                    ?>

                                                    <tr>
                                                        <td><?php echo $row['name'];?></td>
                                                        <td><?php echo $row['email'];?></td>
                                                        <td><?php echo $row['phone'];?></td>
                                                        <td><?php echo $row['subject'];?></td>
                                                        <td><?php echo $row['description'];?></td>
                                                    </tr>
                                                        
                                                <?php  }
                                                }

                                                ?>
                                                

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
    <div class="fixed-plugin">

    </div>
    <!--   Core JS Files   -->
    <script src="./js/vendor/jquery-3.2.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap-material-design.min.js"></script>
    <script src="./js/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="./js/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="./js/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="./js/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="./js/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="./js/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="./js/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="./js/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="./js/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="./js/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="./js/fullcalendar.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="./js/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Chartist JS -->
    <script src="./js/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="./js/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./js/material-dashboard.min.js?v=2.1.2" type="text/javascript"></script>
    <script src="./js/main.js"></script>

    <script>
        $(document).ready(function () {
            $().ready(function () {
                $sidebar = $('.sidebar');

                $sidebar_img_container = $sidebar.find('.sidebar-background');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                    if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                        $('.fixed-plugin .dropdown').addClass('open');
                    }

                }

                $('.fixed-plugin a').click(function (event) {

                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .active-color span').click(function () {
                    $full_page_background = $('.full-page-background');

                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-color', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data-color', new_color);
                    }
                });

                $('.fixed-plugin .background-color .badge').click(function () {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('background-color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-background-color', new_color);
                    }
                });

                $('.fixed-plugin .img-holder').click(function () {
                    $full_page_background = $('.full-page-background');

                    $(this).parent('li').siblings().removeClass('active');
                    $(this).parent('li').addClass('active');


                    var new_image = $(this).find("img").attr('src');

                    if ($sidebar_img_container.length != 0 && $(
                            '.switch-sidebar-image input:checked').length != 0) {
                        $sidebar_img_container.fadeOut('fast', function () {
                            $sidebar_img_container.css('background-image', 'url("' +
                                new_image + '")');
                            $sidebar_img_container.fadeIn('fast');
                        });
                    }

                    if ($full_page_background.length != 0 && $(
                            '.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
                            'img').data('src');

                        $full_page_background.fadeOut('fast', function () {
                            $full_page_background.css('background-image', 'url("' +
                                new_image_full_page + '")');
                            $full_page_background.fadeIn('fast');
                        });
                    }

                    if ($('.switch-sidebar-image input:checked').length == 0) {
                        var new_image = $('.fixed-plugin li.active .img-holder').find("img")
                            .attr('src');
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
                            'img').data('src');

                        $sidebar_img_container.css('background-image', 'url("' + new_image +
                            '")');
                        $full_page_background.css('background-image', 'url("' +
                            new_image_full_page + '")');
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                    }
                });

                $('.switch-sidebar-image input').change(function () {
                    $full_page_background = $('.full-page-background');

                    $input = $(this);

                    if ($input.is(':checked')) {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar_img_container.fadeIn('fast');
                            $sidebar.attr('data-image', '#');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page_background.fadeIn('fast');
                            $full_page.attr('data-image', '#');
                        }

                        background_image = true;
                    } else {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar.removeAttr('data-image');
                            $sidebar_img_container.fadeOut('fast');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page.removeAttr('data-image', '#');
                            $full_page_background.fadeOut('fast');
                        }

                        background_image = false;
                    }
                });

                $('.switch-sidebar-mini input').change(function () {
                    $body = $('body');

                    $input = $(this);

                    if (md.misc.sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        md.misc.sidebar_mini_active = false;

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                    } else {

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                        setTimeout(function () {
                            $('body').addClass('sidebar-mini');

                            md.misc.sidebar_mini_active = true;
                        }, 300);
                    }

                    var simulateWindowResize = setInterval(function () {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    setTimeout(function () {
                        clearInterval(simulateWindowResize);
                    }, 1000);

                });
            });
        });
    </script>

</body>

</html>