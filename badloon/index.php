<?php
 session_start();
//Database Configuration File
include('includes/config.php');
//error_reporting(0);
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOAD - Humanitarian Organization for Advocacy & Development</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel='stylesheet' id='droidarabicnaskh-css'  href='https://fonts.googleapis.com/earlyaccess/droidarabicnaskh' type='text/css' media='all' />
    <link rel='stylesheet' id='Droid+Sans-css'  href='https://fonts.googleapis.com/css?family=Droid+Sans%3Aregular%2C700' type='text/css' media='all' />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
            <script src="assets/js/modernizr.min.js"></script>
        <style>
            body{
                font-family: 'droid arabic naskh';
                margin: 0;
                padding-bottom: 60px;
                overflow-x: hidden;
                color: #797979;
                background: linear-gradient(to top, rgba(0,0,0,0.9), rgba(255,255,255,0)), url(../assets/img/banner/12.jpg) no-repeat center;
            }
            input::placeholder, textarea::placeholder{
  text-align: left;
}
            @media screen and (max-width: 992px){
                body{
                    background-image: url('../assets/img/banner/12.jpg');
                    background-size: cover;
                    background-repeat: no-repeat;
                }   
            }
        </style>
    </head>


    <body class="bg-transparent">

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                            <?php 
                            if(isset($_POST['login']))
                            {
                                $username = strip_tags(mysqli_real_escape_string($con,$_POST["username"]));
                                $password = strip_tags(mysqli_real_escape_string($con,$_POST["password"]));

                                $encryptedPassword = sha1($password);

                                if(!$con){
                                    echo '
                                        <div class="alert alert-danger" role="alert">
                                            No Connection!
                                        </div>'; 
                                }
                                else{
                                    $login_query = "SELECT id FROM tbladmin WHERE AdminUserName='$username' AND AdminPassword='$encryptedPassword' LIMIT 1";
                                    $result = mysqli_query($con, $login_query);
                                    $count = mysqli_num_rows($result);
                                    if ($count == 1){
                                        $row = mysqli_fetch_array($result);

                                        $_SESSION["login"] = $username;
                                        $user = $_SESSION["login"];
                                        header("location:dashboard");
                                    }
                                    else{  
                                        echo '
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                swal({
                                                    type: "warning",
                                                    title: "چاره ناکامه وه!",
                                                    text: "داخل شوي معلومات غلط دي!",
                                                    showConfirmButton: true
                                                })
                                                });
                                            </script>';
                                    }
                                }        
                            }
                            ?>

                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase">
                                        <a href="index" class="text-success">
                                            <span class="text-white">Login</span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" method="post">

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <span><i class="fa fa-user fa-2x text-white"></i></span><input class="form-control" type="text" required="" name="username" placeholder="Username" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <span><i class="fa fa-key fa-2x text-white"></i></span><input class="form-control" type="password" name="password" required="" placeholder="Password" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="form-group text-center m-t-10">
                                                <button class="btn btn-danger w-75" style="font-weight: bold;" type="submit" name="login"><i class="fas fa-sign-in-alt"></i> Login</button>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                    

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>