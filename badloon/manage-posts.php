<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{

if($_GET['action']='del')
{
$postid=intval($_GET['pid']);
$query=mysqli_query($con,"update tblposts set Is_Active=0 where id='$postid'");
if($query)
{
$msg="Blog Post has been deleted successfully.";
}
else{
$error="An Error has occured.";    
} 
}

}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Manage Blog Posts </title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="../plugins/morris/morris.css">

        <!-- jvectormap -->
        <link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <link rel='stylesheet' id='droidarabicnaskh-css'  href='https://fonts.googleapis.com/earlyaccess/droidarabicnaskh' type='text/css' media='all' />
        <link rel='stylesheet' id='Droid+Sans-css'  href='https://fonts.googleapis.com/css?family=Droid+Sans%3Aregular%2C700' type='text/css' media='all' />
        <script src="assets/js/modernizr.min.js"></script>
        <!-- DATA Table -->
        <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">    
        <link rel='stylesheet' id='droidarabicnaskh-css'  href='https://fonts.googleapis.com/earlyaccess/droidarabicnaskh' type='text/css' media='all' />
        <link rel='stylesheet' id='Droid+Sans-css'  href='https://fonts.googleapis.com/css?family=Droid+Sans%3Aregular%2C700' type='text/css' media='all' />
    </head>
    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           <?php include('includes/topheader.php');?>

            <!-- ========== Left Sidebar Start ========== -->
           <?php include('includes/leftsidebar.php');?>


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
							<div class="col-xs-12">
                                <ul class="breadcrumb wizard">
                                    <li class="completed"><a href="dashboard">Dashboard</a></li>
                                    <li class="completed"><a href="javascript:void(0);">Manage Blog Posts</a></li>
                                </ul>
							</div>
						</div>
                        <!-- end row -->

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div id="no-more-tables">
                <table class="table table-bordered table-striped table-condensed cf dataTable" id="posts-table">
                    <thead class="text-right">
                        <tr>
                            <th>Title</th>    
                            <th>Subtitle</th>    
                            <th>Date</th>                                  
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
   
        $query=mysqli_query($con,"select id as postid, PostTitle as title,post_stitle, PostingDate as postingdate from tblposts where Is_Active=1 order by id desc");
        $rowcount=mysqli_num_rows($query);
        if($rowcount==0)
        {
        ?>
<tr>

<td colspan="4" align="center"><h3 style="color:red">No Records Found!</h3></td>
<tr>
<?php 
} else {
while($row=mysqli_fetch_array($query))
{
?>
 <tr>
    <td data-title="title">
        <b><?php echo htmlentities($row['title']);?></b>
    </td>
    <td data-title="Subtitle"><?php echo htmlentities($row['post_stitle'])?></td>
    <td data-title="Date"><?php echo htmlentities($row['postingdate'])?></td>
    <td data-title="Action"><a href="edit-post?pid=<?php echo htmlentities($row['postid']);?>"><i class="fa fa-pencil" style="color: #29b6f6;"></i></a> 
    &nbsp;<a href="manage-posts?pid=<?php echo htmlentities($row['postid']);?>&&action=del" onclick="return confirm('Are you sure to delete this record?')"> <i class="fa fa-trash-o" style="color: #f05050"></i></a> 
    </td>
</tr>
<?php } }?>
                                               
                                            </tbody>
                                            <h4 class="text-center text-danger">Active Blog Posts Count: <?php echo $rowcount; ?></h4>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- container -->
                   
                </div> <!-- content -->

       <?php include('includes/footer.php');?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


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
        <!-- DATATABLE -->
        <script type="text/JavaScript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
        <script type="text/JavaScript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#posts-table").dataTable();
            });
        </script>
        <!-- CounterUp  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
		<script src="../plugins/morris/morris.min.js"></script>
		<script src="../plugins/raphael/raphael-min.js"></script>

        <!-- Load page level scripts-->
        <script src="../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../plugins/jvectormap/gdp-data.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>


        <!-- Dashboard Init js -->
		<script src="assets/pages/jquery.blog-dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
