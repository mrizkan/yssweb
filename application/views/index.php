<!DOCTYPE html>
<html lang="en">
<title>Welcome to YSS Foundation</title>
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
    <section class="slider">
        <div class="tp-banner">
            <ul>

                <?php
                $sqlslider = "SELECT * FROM slider WHERE active='1'";
                $resultslider = mysql_query($sqlslider);
                while ($rowslider = mysql_fetch_assoc($resultslider)) { ?>

                    <!-- Slide -->
                    <li data-delay="7000" data-transition="fade" data-slotamount="7" data-masterspeed="2000">
                        <div class="elements">
                            <h2 class="tp-caption tp-resizeme sft skewtotop title bold" data-x="240" data-y="251"
                                data-speed="1000" data-start="500" data-easing="Power4.easeOut" data-endspeed="400"
                                data-endeasing="Power1.easeIn"
                                style="color: #0bcc2c"><?php echo $rowslider['text1']; ?></h2>
                            <div class="tp-caption tp-resizeme lfr skewtoright description text-center" data-x="290"
                                 data-y="450" data-speed="1000" data-start="800" data-easing="Power4.easeOut"
                                 data-endspeed="500" data-endeasing="Power1.easeIn" style="max-width: 600px">
                                <p style="color: #0bcc2c"><?php echo $rowslider['text2']; ?></p>
                            </div>

                        </div>
                        <img src="admin/otherimages/<?php echo $rowslider["image1"]; ?>" alt="" data-bgfit="cover"
                             data-bgposition="center top" data-bgrepeat="no-repeat"/>
                    </li>
                    <!-- Slide -->

                <?php } ?>


                <!-- Slide -->
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
    </section>
    <!-- slider -->

    <!-- about-us -->

    <section id="additional" class="page-section">
        <div class="container">
            <div class="row top-pad-30">
                <div class="col-md-6 col-sm-6 text-center animated fadeInLeft visible" data-animation="fadeInLeft">
                    <!-- Image -->
                    <?php

                    $sql33 = "SELECT image FROM vision";
                    $result33 = mysql_query($sql33);
                    $row33 = mysql_fetch_assoc($result33) ?>
                    <img src="admin/otherimages/<?php echo $row33['image']; ?>" width="590" height="415" alt="">
                </div>
                <div class="col-md-6 col-sm-6 animated fadeInRight visible" data-animation="fadeInRight">


                    <?php

                    $sql3 = "SELECT * FROM vision";
                    $result3 = mysql_query($sql3);
                    $row3 = mysql_fetch_assoc($result3) ?>
                    <p class="lead">
                        <strong>Vission : <?php echo $row3['short_description']; ?></strong>
                    </p>
                    <p><?php echo $row3['long_description']; ?></p>
                    <?php

                    $sql2 = "SELECT * FROM mission";
                    $result2 = mysql_query($sql2);
                    $row2 = mysql_fetch_assoc($result2) ?>
                    <p class="lead">
                        <strong>Mission : <?php echo $row2['short_description']; ?></strong>
                    </p>
                    <p><?php echo $row2['long_description']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="twitter" class="page-section light-bg">
        <div class="image-bg content-in fixed" data-background="images/bg-10.jpg"
             style="background-image: url(images/bg-10.jpg&quot;);">
            <div class="overlay-half-dark"></div>
        </div>
        <div class="twitter-feed">
            <div class="container animated fadeInUp visible" data-animation="fadeInUp">
                <div class="row">
                    <div class="col-md-12 text-center icons-circle icons-bg-color fa-1x">
                        <?php
                        $sqlhadees = "SELECT * FROM hadees";
                        $hadeesresult = mysql_query($sqlhadees);
                        while ($hadeesr = mysql_fetch_assoc($hadeesresult)) { ?>
                            <!-- Icon -->
                            <h4 class="white"><?php echo $hadeesr["message"]; ?></h4>

                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h2 id="type-headings"><a href="news-updates.php">Latest News</a></h2>
                </div>
                <div class="col-sm-12 col-md-9 post-list">
                    <div class="col-sm-12 col-md-12">
                        <?php
                        $sqlnews = "SELECT * FROM news WHERE active='1'";
                        $sqlnewsresult = mysql_query($sqlnews);
                        while ($rnews = mysql_fetch_assoc($sqlnewsresult)) { ?>

                            <!-- post -->

                            <a href="news_details.php?id=<?php echo $rnews['id']; ?>">

                                <div class="post-item">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="post-image pull-left">
                                                <img src="admin/otherimages/<?php echo $rnews["image"]; ?>" width="320"
                                                     height="282" alt="" title="">
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                            <h2 class="post-title">
                                                <a href="news_details.php?id=<?php echo $rnews['id']; ?>"><?php echo $rnews['title']; ?></a>
                                            </h2>
                                            <div class="post-content"><?php echo $rnews['short_description']; ?></div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                            <!-- post -->


                        <?php } ?>
                    </div>


                </div>

                <div class=" col-sm-12 col-md-3">

                    <div class="widget">
                        <div class="widget-title">
                            <h3 class="title">Advertisements</h3>
                        </div>
                        <div class="owl-carousel navigation-1 owl-theme" data-pagination="false" data-items="1"
                             data-autoplay="true" data-navigation="false" style="opacity: 1; display: block;">


                            <div class="owl-wrapper-outer">

                                <div class="owl-wrapper"
                                     style="width: auto; left: 0px; display: block; transition: all 80ms ease 0s; transform: translate3d(-270px, 0px, 0px);">
                                    <div class="owl-item" style="width: 270px;">
                                        <?php
                                        $sqlslider1 = "SELECT * FROM advertisement1 WHERE active='1' ORDER BY RAND() limit 6";
                                        $resultslider1 = mysql_query($sqlslider1);
                                        while ($rowslider1 = mysql_fetch_assoc($resultslider1)) { ?>


                                            <a href="http://<?php echo $rowslider1["url"]; ?>" target="_blank"> <img
                                                        src="admin/otherimages/<?php echo $rowslider1["image"]; ?>"
                                                        width="270" height="270" alt=""></a>


                                        <?php } ?>

                                    </div>


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
