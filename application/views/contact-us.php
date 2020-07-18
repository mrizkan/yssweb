<!DOCTYPE html>
<html lang="en">
<title>Contact YSS Foundation</title>
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
            <h1 class="title">Contact Us</h1>
        </div>

    </div>
    <!-- page-header -->
    <section id="contact-us" class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 contact-info">
                    <div class="row text-center">
                        <address class="col-sm-4 col-md-4">
                            <i class="fa fa-map-marker i-9x icons-circle text-color light-bg hover-black"></i>
                            <div class="title">Address</div>
                            No 28, rue de moquet, 75017 Paris, France.
                        </address>
                        <address class="col-sm-4 col-md-4">
                            <i class="fa fa-microphone i-9x icons-circle text-color light-bg hover-black"></i>
                            <div class="title">Phones</div>
                            <div>Support: +94 777 998 889</div>
                        </address>
                        <address class="col-sm-4 col-md-4">
                            <i class="fa fa-envelope i-9x icons-circle text-color light-bg hover-black"></i>
                            <div class="title">Email Addresses</div>
                            <div>Support: <a href="mailto:info@yssfoundation.com">info@yssfoundation.com</a></div>
                        </address>
                    </div>
                    <hr>

                    <br/>
                </div>
                <p class="form-message" style="display: none;"></p>
                <div class="contact-form">
                    <!-- Form Begins -->
                    <form id="contactfrm">
                        <div class="col-md-6">
                            <!-- Field 1 -->
                            <div class="input-text form-group">
                                <input type="text" name="contact_name" class="input-name form-control"
                                       placeholder="Full Name"/>
                            </div>
                            <!-- Field 2 -->
                            <div class="input-email form-group">
                                <input type="email" name="contact_email" class="input-email form-control"
                                       placeholder="Email"/>
                            </div>
                            <!-- Field 3 -->
                            <div class="input-email form-group">
                                <input type="text" name="contact_phone" class="input-phone form-control"
                                       placeholder="Phone"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Field 4 -->
                            <div class="textarea-message form-group">
                                <textarea name="contact_message" class="textarea-message height-82 form-control"
                                          placeholder="Message" rows="2"></textarea>
                            </div>
                            <!-- Button -->
                            <div id="status"></div>
                            <button class="btn btn-default btn-block" type="submit">Send Now <i
                                        class="icon-paper-plane"></i></button>
                        </div>
                </div>
                </form>


                <script src="js/jquery-1.11.1.min.js"></script>
                <script src="js/bootstrap.min.js"></script>

                <script>

                    // this is the id of the form
                    $(document).ready(function () {

                        $("#contactfrm").submit(function (e) {
                            //  e.preventDefault();
                            $.ajax({
                                type: "POST",
                                url: 'mail.php',
                                data: $(this).serialize(), // serializes the form's elements.
                                success: function (data) {
                                    $('#status').html('<div class="alert alert-success" role="alert">Your Query Sent Successfully, We will Contact you Soon</div>');
                                    $('#contactfrm')[0].reset();
                                }
                            });
                            return false;
                        });

                    });
                </script>


                <!-- Form Ends -->
            </div>
        </div>
    </section><!-- page-section -->
    <section style="margin-bottom: -20px;">
        <div class="map-section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.1754903236993!2d79.89632331409484!3d6.748439922381338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae245ea5ee242c3%3A0x6204ce251ed96aaf!2sYSS+Head+Office!5e0!3m2!1sen!2slk!4v1554827540199!5m2!1sen!2slk"
                    width="100%" height="490" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section> <!-- map -->


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
