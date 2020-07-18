<?php include('admin/functions/database.php'); ?>
<?php
$a = $_GET['id'];
$sql22 = "SELECT * FROM press_release WHERE active='1' && id='$a'";
$result22 = mysql_query($sql22);
$row2 = mysql_fetch_assoc($result22) ?>


<!DOCTYPE html>
<html lang="en">
<title><?php echo $row2['title']; ?> of YSS Foundation</title>
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
            <h1 class="title"><?php echo $row2['title']; ?></h1>
        </div>

    </div>


    <section class="page-section">
        <div class="container">

            <div class="col-sm-5 bottom-pad-30">
                <!--styles for slider-->
                <style>
                    .slides {
                        padding: 0;
                        width: 388px;
                        height: 442px;
                        display: block;
                        margin: 0 auto;
                        position: relative;
                    }

                    .slides * {
                        user-select: none;
                        -ms-user-select: none;
                        -moz-user-select: none;
                        -khtml-user-select: none;
                        -webkit-user-select: none;
                        -webkit-touch-callout: none;
                    }

                    .slides input {
                        display: none;
                    }

                    .slide-container {
                        display: block;
                    }

                    .slide {
                        top: 0;
                        opacity: 0;
                        width: 388px;
                        height: 442px;
                        display: block;
                        position: absolute;

                        transform: scale(0);

                        transition: all .7s ease-in-out;
                    }

                    .slide img {
                        width: 100%;
                        height: 100%;
                    }

                    .nav label {
                        width: 200px;
                        height: 100%;
                        display: none;
                        position: absolute;

                        opacity: 0;
                        z-index: 9;
                        cursor: pointer;

                        transition: opacity .2s;

                        color: #FFF;
                        font-size: 156pt;
                        text-align: center;
                        line-height: 380px;
                        font-family: "Varela Round", sans-serif;
                        background-color: rgba(255, 255, 255, .3);
                        text-shadow: 0px 0px 15px rgb(119, 119, 119);
                    }

                    .slide:hover + .nav label {
                        opacity: 0.5;
                    }

                    .nav label:hover {
                        opacity: 1;
                    }

                    .nav .next {
                        right: 0;
                    }

                    input:checked + .slide-container .slide {
                        opacity: 1;

                        transform: scale(1);

                        transition: opacity 1s ease-in-out;
                    }

                    input:checked + .slide-container .nav label {
                        display: block;
                    }

                    .nav-dots {
                        width: 100%;
                        bottom: 9px;
                        height: 11px;
                        display: block;
                        position: absolute;
                        text-align: center;
                    }

                    .nav-dots .nav-dot {
                        top: -5px;
                        width: 11px;
                        height: 11px;
                        margin: 0 4px;
                        position: relative;
                        border-radius: 100%;
                        display: inline-block;
                        background-color: rgba(0, 0, 0, 0.6);
                    }

                    .nav-dots .nav-dot:hover {
                        cursor: pointer;
                        background-color: rgba(0, 0, 0, 0.8);
                    }

                    input#img-1:checked ~ .nav-dots label#img-dot-1,
                    input#img-2:checked ~ .nav-dots label#img-dot-2,
                    input#img-3:checked ~ .nav-dots label#img-dot-3,
                    {
                        background: rgba(0, 0, 0, 0.8);
                    }
                </style>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

                <!--styles for slider end-->


                <!--slider start-->
                <ul class="slides">
                    <input type="radio" name="radio-btn" id="img-1" checked/>
                    <li class="slide-container">
                        <div class="slide">
                            <img src="admin/otherimages/<?php echo $row2['image']; ?>"/>
                        </div>

                    </li>

                    <input type="radio" name="radio-btn" id="img-2"/>
                    <li class="slide-container">
                        <div class="slide">
                            <img src="admin/otherimages/<?php echo $row2['image1']; ?>"/>
                        </div>

                    </li>

                    <input type="radio" name="radio-btn" id="img-3"/>
                    <li class="slide-container">
                        <div class="slide">
                            <img src="admin/otherimages/<?php echo $row2['image2']; ?>"/>
                        </div>

                    </li>


                    <li class="nav-dots">
                        <label for="img-1" class="nav-dot" id="img-dot-1"></label>
                        <label for="img-2" class="nav-dot" id="img-dot-2"></label>
                        <label for="img-3" class="nav-dot" id="img-dot-3"></label>

                    </li>
                </ul>

                <!--slider end-->
            </div>


            <div class="col-sm-7 col-md-7">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="post-content">
                            <p><?php echo $row2['long_description']; ?></p>
                        </div>
                        <!-- AddToAny BEGIN -->
                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                            <a class="a2a_button_facebook"></a>
                            <a class="a2a_button_twitter"></a>
                            <a class="a2a_button_google_plus"></a>
                        </div>
                        <script async src="https://static.addtoany.com/menu/page.js"></script>
                        <!-- AddToAny END -->

                    </div>
                </div>
                <hr>


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
