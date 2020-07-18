<!DOCTYPE html>
<html lang="en">
<title>Our Vision of YSS Foundation</title>
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
            <h1 class="title">Our Vision</h1>
        </div>

    </div>

    <?php

    $sql2 = "SELECT * FROM vision";
    $result2 = mysql_query($sql2);
    $row2 = mysql_fetch_assoc($result2) ?>


    <!-- Features -->
    <section class="page-section">
        <div class="container">
            <div class="row top-padding-40">
                <div class="col-md-3 col-sm-5 text-center" data-animation="fadeInLeft">
                    <!-- Image -->
                    <img src="admin/otherimages/<?php echo $row2["image"]; ?>" width="290" height="415" alt=""/>
                </div>
                <div class="col-md-9 col-sm-7" data-animation="fadeInRight">
                    <p class="lead">
                        <strong> Vision : <?php echo $row2['short_description']; ?></strong>
                    </p>

                    <p><?php echo $row2['long_description']; ?></p>


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
