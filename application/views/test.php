<?php include('admin/functions/database.php'); ?>


<!DOCTYPE html>
<html lang="en">
<title>Our Mission of YSS Foundation</title>
<?php include('inc/header_top.php'); ?>
<body>
<div id="page">
    <!-- Page Loader -->
    <div id="pageloader">
        <div class="loader-item fa fa-spin text-color"></div>
    </div>
    <!-- Top Bar -->
    <?php include('inc/top_bar.php'); ?>
    <!-- Top Bar -->
    <!-- Sticky Navbar -->
    <?php include('inc/nav.php'); ?>
    <!-- Sticky Navbar -->


    <div class="page-header">
        <div class="container">
            <h1 class="title">Our Mission</h1>
        </div>

    </div>


    <!-- Features -->
    <section class="page-section">
        <div class="container">
            <div class="row top-padding-40">

                <div class="widget">
                    <div class="widget-title">
                        <h3 class="title">Recommended</h3>
                    </div>
                    <div class="owl-carousel navigation-1 owl-theme" data-pagination="false" data-items="1"
                         data-autoplay="true" data-navigation="false" style="opacity: 1; display: block;">


                        <div class="owl-wrapper-outer">

                            <div class="owl-wrapper"
                                 style="width: 270px; left: 0px; display: block; transition: all 80ms ease 0s; transform: translate3d(-270px, 0px, 0px);">

                                <?php
                                $sqlslider1 = "SELECT * FROM advertisement1 WHERE active='1'";
                                $resultslider1 = mysql_query($sqlslider1);
                                while ($rowslider1 = mysql_fetch_assoc($resultslider1)) { ?>


                                    <div class="owl-item" style="width: 270px;">

                                        <img src="admin/otherimages/<?php echo $rowslider1["image"]; ?>" width="270"
                                             height="270" alt="">

                                    </div>
                                <?php } ?>


                            </div>


                            <div class="owl-controls clickable">
                                <div class="owl-buttons">
                                    <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                                    <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <!-- clients -->
    <div id="get-quote" class="bg-color get-a-quote black text-center">
        <div class="container" data-animation="pulse">
            <div class="row">
                <div class="col-md-12">Donate Us / Need a Help ?
                    <a class="black" href="contact-us.php">Contact Us</a></div>
            </div>
        </div>
    </div>
    <!-- request -->
    <?php include('inc/footer_top.php'); ?>
    <!-- footer -->
</div>
<!-- page -->
<?php include('inc/footer_below.php'); ?>
<!-- Scripts --></body>
</html>
