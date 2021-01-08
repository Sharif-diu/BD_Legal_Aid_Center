<?php
require_once '../config/connection.php';
$error="";
session_start();
if(isset($_POST["login"])){
    $email =$_POST['email'];
    $password = $_POST['password'];
    if($email && $password){
        $pass = md5($password);
        $query="SELECT * from users where email='$email' and password='$pass' "; 
        $result=mysqli_query($con,$query) or die ('date Query is not execute !!');
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_array($result);
                $_SESSION["name"] = $row['name'];
                header("Location: index.php");
                exit();
            }else{
                $error='Incorrect credentials';
            }
        
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon-16x16.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        login
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

    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 offset-md-4">
                    <div class="login-section">

                        <div class="login-img">
                            <img class="profile-img" src="./img/logo4.PNG" style="width:100%" />
                            <h1 class="text-center textcolor login-title mb-3" style="padding-bottom: 10px;">Welcome to <b>BD Legal Aid Center</b></h1>
                         <p style="color:red;text-align: center;"><?php echo $error; ?></p>
                        </div>
                        <div class="account-wall">
                            <form class="form-signin" method="post">
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><span class="material-icons">
person
</span></div>
                                    </div>
                                    <input type="email" class="form-control textcolor"
                                        placeholder="Username" name="email" require>
                                </div>
                                    <div class="space">  </div>

                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><span class="material-icons">
                                                lock
                                            </span></div>
                                    </div>
                                    <input type="password" class="form-control textcolor" 
                                        placeholder="Password" name="password" require>
                                </div>
                                  <div class="space">  </div>

                                <label class="checkbox pull-left">
                                    <input type="checkbox" value="remember-me">
                                    Remember me
                                </label>
                                <a href="#" class="pull-right need-help"><button class="btn btn-lg btn-danger btn-block"
                                        type="submit" name="login">
                                        Log in</button> </a>
                                <span class="clearfix"></span>
                            </form>
                        </div>
                         <div class="space">  </div>
                        <!--<div class="login-footer textcolor">
                            <div class="pull-left"> <a href="#" class="text-center fontsize textcolor new-account">Forget Password? </a>
                            </div>
                            <div class="pull-right"> <a href="#" class="text-center fontsize textcolor new-account">Get New Account <b>Sign
                                        up</b></a>
                            </div>
                        </div>-->

                    </div>
                </div>
            </div>
        </div>

                               



    </div>
    <script> 
        sessionStorage.setItem('active_index','0');
   </script>
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

</body>

</html>