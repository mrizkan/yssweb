<!DOCTYPE html>
<html lang="en">
<title>Become a Volunteer of YSS Foundation</title>
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
            <h1 class="title">Become a Volunteer</h1>
        </div>

    </div>
    <!-- page-header -->
    <section class="page-section">
        <div class="container">

            <hr/>
            <div class="row">
                <div class="content col-sm-12 col-md-8">
                    <form id="volunteer">
                        <h3 class="title">Be a Volunteer! Register Now.</h3>
                        <div id="success"></div>
                        <input class="form-control" type="text" name="name" placeholder="Name *"/>
                        <input class="form-control" type="text" name="phone" placeholder="Phone *"/>
                        <input class="form-control" type="email" name="email" placeholder="Email *"/>
                        <input class="form-control" type="text" name="bpalce" placeholder="Place of Birth *"/>


                        <div class="clearfix"></div>
                        <div id="statusre"></div>
                        <button id="submit" class="btn btn-default">Register Now</button>
                        <!-- .buttons-box --></form>

                    <script src="js/jquery-1.11.1.min.js"></script>
                    <script src="js/bootstrap.min.js"></script>

                    <script>

                        // this is the id of the form
                        $(document).ready(function () {

                            $("#volunteer").submit(function (e) {
                                //  e.preventDefault();
                                $.ajax({
                                    type: "POST",
                                    url: 'vregister.php',
                                    data: $(this).serialize(), // serializes the form's elements.
                                    success: function (data) {
                                        $('#statusre').html('<div class="alert alert-success" role="alert">Registration Success</div>');
                                        $('#volunteer')[0].reset();
                                    }
                                });
                                return false;
                            });

                        });
                    </script>
                </div>
                <!-- .content -->

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
