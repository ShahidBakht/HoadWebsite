<?php 
session_start();
include('includes/header-second.php');


include('includes/config.php');
include('includes/functions.php'); 
include 'includes/class.posts.php';
$post = new Posts();
//Genrating CSRF Token
if (empty($_SESSION['token'])) {
 $_SESSION['token'] = bin2hex(random_bytes(32));
}
$pid=intval($_GET['nid']);

?>
  
    <?php
        $query=mysqli_query($con,"select PostTitle as posttitle,PostImage,PostDetails as postdetails,PostingDate as postingdate,PostUrl as url from tblposts where id='$pid'");
        while ($row=mysqli_fetch_array($query)) {
    ?>

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content wow fadeInUp col-lg-10 offset-lg-1 col-md-12">
                        <div class="item">

                            <div class="blog-item-box">
                                <!-- Start Post Thumb -->
                                <div class="thumb">
                                    <a href="#">
                                        <img src="badloon/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']); ?>">
                                    </a>
                                </div>
                                <!-- Start Post Thumb -->

                                <div class="info">
                                    <h3><?php echo htmlentities($row['posttitle']); ?></h3>
                                    <p><?php 
                                            $pt=$row['postdetails'];
                                            echo  (substr($pt,0));
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

    <?php } ?>

    <?php include('includes/footer.php'); ?>

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>