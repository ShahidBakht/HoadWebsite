<?php  
    include('includes/config.php');
    include('includes/functions.php');
    $current_page="index";
    include 'includes/class.posts.php';
    $post = new Posts();

    include('includes/header.php');

?>
   <!-- Start Banner 
    ============================================= -->
    <div class="banner-area top-pad-150 text-center text-large">
        <div id="bootcarousel" class="carousel text-light slide carousel-fade animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="carousel-item active">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/3.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h2 class="ps-title" data-animation="animated slideInLeft">د بشري ښېګڼو، ملاتړ او پرمختګ موسسه (هوډ)</h2>
                                            <h2 data-animation="animated slideInRight">Humanitarian Organization for Advocacy & Development (HOAD)</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/6.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h2 class="ps-title" data-animation="animated slideInLeft">د بشري ښېګڼو، ملاتړ او پرمختګ موسسه (هوډ)

                                            </h2>
                                            <h2 data-animation="animated slideInRight">Humanitarian Organization for Advocacy & Development(HOAD)</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/2.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h2 class="ps-title" data-animation="animated slideInLeft">د بشري ښېګڼو، ملاتړ او پرمختګ موسسه (هوډ)

                                            </h2>
                                            <h2 data-animation="animated slideInRight">Humanitarian Organization for Advocacy & Development(HOAD)</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/10.JPG);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h2 class="ps-title" data-animation="animated slideInLeft">د بشري ښېګڼو، ملاتړ او پرمختګ موسسه (هوډ)

                                            </h2>
                                            <h2 data-animation="animated slideInRight">Humanitarian Organization for Advocacy & Development(HOAD)</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control light" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control light" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Help Step 
    ============================================= -->
    <div class="help-step-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 info">
                    <h2 class="area-title">HOW COULD YOU HELP?</h2>
                    <div class="question">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info">
                            <h5>Have any question? </h5>
                            <span>Call Now: +93 700877440</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 help-sourse">

                    <div class="content">
                       
                    </div>

                    <div class="row">
                        <div class="item col-lg-6 col-md-6">
                            <div class="content">
                                <div class="thumb">
                                    <a href="contact">
                                        <img src="assets/img/extra/3.jpg" alt="Become Volunteer Image">
                                        <div class="overlay">
                                            <h4>Become a Volunteer</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item col-lg-6 col-md-6">
                            <div class="content">
                                <div class="thumb">
                                    <a href="donate">
                                        <img src="assets/img/extra/2.jpg" alt="Send Donation Image">
                                        <div class="overlay">
                                            <h4>Send Donation</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Help Step -->

    <!-- Start Causes 
    ============================================= -->
    <div class="causes-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="clients-area">
                            <div class="row align-center">
                                <div class="col-lg-5 info">
                                    <h2>OUR RESPECTED <br> DONORS</h2>
                                </div>
                                <div class="col-lg-7 item-box">
                                    <div class="client-items client-carousel owl-carousel owl-theme">
                                        <div class="item"><img src="assets/img/donors/1.jpg" alt="Thumb"></div>
                                        <div class="item"><img src="assets/img/donors/2.png" alt="Thumb"></div>
                                        <div class="item"><img src="assets/img/donors/3.jpg" alt="Thumb"></div>
                                        <div class="item"><img src="assets/img/donors/4.jpg" alt="Thumb"></div>
                                        <div class="item"><img src="assets/img/donors/5.jpg" alt="Thumb"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Causes -->

    <!-- Start Blog 
        ============================================= -->
        <div class="blog-area bg-gray">
            <div class="container">
                <div class="heading-left">
                    <div class="row">
                        <div class="col-lg-6 left-info">
                            <h5>Latest News</h5>
                            <h2>
                                STAY UPDATED WITH US FROM LATEST & POPULAR NEWS
                            </h2>
                        </div>
                        <div class="col-lg-6 right-info">
                            <p>
                                Everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression. 
                            </p>
                            <a class="btn circle btn-md btn-gradient wow fadeInUp" href="#">View All <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="blog-items">
                    <div class="row">
                    <?php
                        $rows = $post->get_latest_posts(3,0);
                        foreach($rows as $row){
                            date_default_timezone_set('Asia/Kabul');  
                            $curr_time = $row['postingdate'];
                            $time_ago = strtotime($curr_time); 
                    ?>
                        <!-- Single Item -->
                        <div class="single-item col-lg-4 col-md-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="blog-single?nid=<?php echo htmlentities($row['pid'])?>">
                                        <img src="badloon/postimages/<?php echo htmlentities($row['PostImage']); ?>" alt="Thumb">
                                    </a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="blog-single?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']); ?></a>
                                    </h4>
                                    <p><?php echo htmlentities($row['post_stitle']); ?></p>
                                    <a class="btn-more" href="blog-single?nid=<?php echo htmlentities($row['pid'])?>">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Area -->

    <!-- Start Donation 
    ============================================= -->
    <div class="donation-area text-light bg-gray default-padding">
        <!-- Fixed BG-->
        <div class="fixed-bg" style="background-image: url(assets/img/gallery/33.JPG);"></div>
        <!-- End Fixed BG-->
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 info">
                    <h2 class="area-title">BECOME A VOLUNTEER</h2>
                    <h>
                     Become a Volunteer. Your time and talent can make a real difference in people's life.
                    </h5>
                    <div class="question">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info">
                            <h5>Have any question? </h5>
                            <span>Call Now: +93 700877440 </span>
                        </div>
                    </div>
                    <div class="col mt-5">
                        <a href="contact" class="btn circle btn-theme border btn-md">Join Us Now</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Donation Area -->

    <!-- Start Testimonials 
    ============================================= -->

    <!-- End Testimonials Area -->

    
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