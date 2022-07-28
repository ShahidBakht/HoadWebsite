<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index');
}
else{
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard | HOAD</title>
		<link rel="stylesheet" href="../plugins/morris/morris.css">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>
        <link rel='stylesheet' id='droidarabicnaskh-css'  href='https://fonts.googleapis.com/earlyaccess/droidarabicnaskh' type='text/css' media='all' />
        <link rel='stylesheet' id='Droid+Sans-css'  href='https://fonts.googleapis.com/css?family=Droid+Sans%3Aregular%2C700' type='text/css' media='all' />
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-right">
                    <a href="dashboard" class="logo"><span>HOAD<span>Admin</span></span><i class="mdi mdi-layers"></i></a>
                    
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
            <?php include('includes/topheader.php');?>
            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
    <?php include('includes/leftsidebar.php');?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
                        <div class="row"> 
                            <a href="manage-posts">    
                                <div class="col-md-3 col-sm-3 mb">
                                    <!-- REVENUE PANEL -->
                                    <div class="grey-panel pn">
                                        <div class="grey-header">
                                            <h5>Active Blog Posts</h5>
                                        </div>
                                        <div class="row">
                                            <div class="text-center">
                                                <img src="assets/images/articles.png" width="100px" alt="">
                                                <?php $query=mysqli_query($con,"select * from tblposts where Is_Active=1");
                                                    $countposts=mysqli_num_rows($query);
                                                    ?>
                                                <h2 class="text-white"><?php echo htmlentities($countposts);?></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </a>
                            <a href="trash-posts"> 
                                <div class="col-md-3 col-sm-3 mb">
                                    <div class="grey-panel pn">
                                        <div class="grey-header">
                                            <h5>Trash Blog Posts</h5>
                                        </div>
                                        <div class="row">
                                            <div class="text-center">
                                                <img src="assets/images/delete.png" width="100px" alt="">
                                                <?php $query=mysqli_query($con,"select * from tblposts where Is_Active=0");
                                                $countposts=mysqli_num_rows($query);
                                                ?>
                                                <h2 class="text-white"><?php echo htmlentities($countposts);?> <small></small></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  /darkblue panel -->
                                </div>              
                            </a> 
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->
<?php include('includes/footer.php');?>

            </div>

        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- Counter js  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
		<script src="../plugins/morris/morris.min.js"></script>
		<script src="../plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php } ?>