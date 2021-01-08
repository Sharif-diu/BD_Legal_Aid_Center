<?php
require_once '../config/connection.php';
require_once './session_check.php';
$package_id = $_GET['package_id']??1; 
$query="SELECT packages.*,package_items.item FROM `packages` INNER JOIN package_items ON packages.id = package_items.package_id WHERE packages.id=$package_id"; 
$result=mysqli_query($con,$query) or die ('date Query is not execute !!');
$pricing = array();
$old_id="0";
$i=0;
$index=-1;
if(mysqli_num_rows($result) > 0)
	{ 
	while($row = mysqli_fetch_array($result))
		{ 
			if($old_id != $row['id']){
				$index++;
				$pricing[$index] = array ("id"=>$row['id'],"type"=>$row['type'],"hour"=>$row['hour'],"amount"=>$row['amount']);
				$i=0;
				$old_id = $row['id'];
			}
			$pricing[$index]['items'][$i] = $row['item'];
			$i++;         
		}
	}
    if(isset($_POST['submit'])){
        $amount = $_POST['amount'];
        $number = count($_POST["name"]);  
        $st="";
            if($number > 0)  
            {  
                for($i=0; $i<$number; $i++)  
                {  
                    if(trim($_POST["name"][$i] != ''))  
                    {  
                        if($i == $number-1){
                            $st .="(".$package_id.",'".$_POST["name"][$i]."')";
                        }
                        else{
                            $st .="(".$package_id.",'".$_POST["name"][$i]."'),";
                        } 
                    }  
                }   
            }          
            $query4="update packages set amount='$amount' where id= $package_id"; 
            $result4=mysqli_query($con,$query4) or die ('date Query is not execute4 !!');  
            $query5="delete from package_items where package_id= $package_id"; 
            $result5=mysqli_query($con,$query5) or die ('date Query is not execute5 !!'); 
            $query6="insert into package_items(package_id,item) values $st"; 
            $result6=mysqli_query($con,$query6) or die ('date Query is not execute6 !!');
            header("Location: package.php");
    }
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
    <!-- Style CSS -->
<link rel="stylesheet" href="../style.css">

  <style type="text/css">
  input{
    background-color: white;
  }
    .imgBox
    {
      width: 100%;
      -moz-box-shadow: 0 0 10px #ccc;
      -webkit-box-shadow: 0 0 10px #ccc;
      box-shadow: 0 0 10px #ccc;
  
    }
    .imgBox:hover
    {
      -moz-box-shadow: 0 0 10px #756b6b;
      -webkit-box-shadow: 0 0 10px #756b6b;
      box-shadow: 0 0 10px #756b6b;
    }
    #dynamic_field td{
          border:none;
    }
  </style>
<script src="js/ckeditor/ckeditor.js" ></script>
<script src="js/ckeditor/samples/js/sample.js"></script>
	<link rel="stylesheet" href="js/ckeditor/samples/css/samples.css">
	<link rel="stylesheet" href="js/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
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

                     <div class=" col-md-12 col-lg-12">
                     
                     <h4 style="text-align:center"> <?php echo $pricing[0]['type'];  ?></h4><br>
                     <script>var i=1;</script>

                            <form method='post' action='' name="add_name" id="add_name">
                              ৳ : 
                                <input type="text" name="amount" require value="<?php echo $pricing[0]['amount']; ?>"><br><br><br>
                                আইটেম:                   
                                <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">
                                <?php 
                                    $co = count($pricing[0]['items']);$c=0;
                                    if($co>0){
                                        ?>

                                     <tr>  
                                         <td style="width:80%"><input type="text" name="name[]"  class="form-control name_list" value="<?php echo $pricing[0]['items'][$c++]; ?>"/></td>  
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>

                                        <?php
                                    }
                                    $co--;
                                    while($co>0){
                                        ?>
                                <script>
                                    i++;
                                  document.write(`<tr id="row${i}">
                                   <td style="width:80%"><input type="text" name="name[]"  class="form-control name_list" value="<?php echo $pricing[0]['items'][$c++]; ?>" /></td>
                                    <td><button type="button" name="remove" id="${i}" class="btn btn-danger btn_remove">X</button></td>
                                </tr> `)
                                </script>                                      
                                
                                <?php
                                        $co--;
                                    }
                                    ?>    
                                    
                               </table>  
                               <button type="submit" name="submit"  id="submit" class="btn btn-lg btn-primary"> Submit</button>  
                          </div> 
                            </form>
                       
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


     <script>  
 $(document).ready(function(){  
        
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td style="width:80%"><input type="text"  name="name[]"  class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
     /* $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      }); */ 
 });  
 </script>

</body>

</html>