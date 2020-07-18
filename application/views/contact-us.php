<!DOCTYPE html>
<html lang="en">
<title>Contact Us</title>
<?php include ('inc/header_top.php');?>
<body>
<div id="page">
    <!-- Page Loader -->
    <div id="pageloader">
        <div class="loader-item fa fa-spin text-color"></div>
    </div>
    <!-- Top Bar -->
    <?php include ('inc/top_bar.php');?>
    <!-- Top Bar -->
    <!-- Sticky Navbar -->
    <?php include ('inc/nav.php');?>
    <!-- Sticky Navbar -->
<div class="page-header">
    <div class="container">
        <h1 class="title">Contact Us</h1>
    </div>
    <div class="breadcrumb-box">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- page-header -->
<section id="contact-us" class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-8">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <address>
                            <h5 class="title"><i class="icon-map-pin text-color"></i> Address</h5>
                            Door no, your Steer address, City,<br>
                            City, state, <br>
                            Country. <br>
                            zipcode - xxxxx.
                        </address>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <h5 class="title"><i class="icon-phone10 text-color"></i> Phone</h5>
                        <div>Support : +0123 (345) 6789</div>
                        <div>Sales : +0123 (345) 6789</div>
                        <div>Admin : +0123 (345) 6789</div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <h5 class="title"><i class="icon-envelope7 text-color"></i> Email Addresses</h5>
                        <div>Support : support@yoursite.com</div>
                        <div>Sales : sales@yoursite.com</div>
                        <div>Admin : admin@yoursite.com</div>
                    </div>
                </div>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="col-md-6 col-md-4">
                <h3 class="title">Contact Form</h3>
                <p class="form-message" style="display: none;"></p>
                <div class="contact-form">
                    <!-- Form Begins -->
                    <form role="form" name="contactform" id="contactform" method="post" action="php/contact-form.php">
                        <!-- Field 1 -->
                        <div class="input-text form-group">
                            <input type="text" name="contact_name" class="input-name form-control" placeholder="Full Name" />
                        </div>
                        <!-- Field 2 -->
                        <div class="input-email form-group">
                            <input type="email" name="contact_email" class="input-email form-control" placeholder="Email"/>
                        </div>
                        <!-- Field 3 -->
                        <div class="input-email form-group">
                            <input type="text" name="contact_phone" class="input-phone form-control" placeholder="Phone"/>
                        </div>
                        <!-- Field 4 -->
                        <div class="textarea-message form-group">
                            <textarea name="contact_message" class="textarea-message form-control" placeholder="Message" rows="2" ></textarea>
                        </div>
                        <!-- Button -->
                        <button class="btn btn-default" type="submit">Send Now <i class="icon-paper-plane"></i></button>
                </div>
                </form>
                <!-- Form Ends -->
            </div>
        </div>
    </div>
</section><!-- page-section -->
<section style="margin-bottom: -2%;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2644.439548460555!2d79.8992743928778!3d6.747581150428673!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6204ce251ed96aaf!2sYSS+Head+Office!5e0!3m2!1sen!2slk!4v1521557697455" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section> <!-- map -->
<div id="get-quote" class="bg-color get-a-quote black text-center" data-appear-animation="fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                Get A Free Quote / Need a Help ? <a class="black" href="#">Contact Us </a>
            </div>
        </div>
    </div>
</div>
<!-- request -->
<!-- request -->
<?php include ('inc/footer_top.php'); ?>
<!-- footer -->
</div>
<!-- page -->
<?php include ('inc/footer_below.php');?>
<!-- Scripts --></body>
</html>