<!DOCTYPE html>
<html lang="en">
<title>Events of YSS Foundation</title>
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
            <h1 class="title">Events</h1>
        </div>

    </div>
    <!-- page-header -->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <?php
                $sql2 = "SELECT * FROM events WHERE active='1' ORDER BY id DESC";
                $result2 = mysql_query($sql2);
                while ($row = mysql_fetch_assoc($result2)) { ?>


                    <div class="col-sm-6 col-md-4">
                        <div class="post-item">
                            <div class="post-image">
                                <img src="admin/otherimages/<?php echo $row["image"]; ?>" width="600" height="400"
                                     alt="<?php echo $row['title']; ?>" title="<?php echo $row['title']; ?>"/>
                            </div>
                            <h2 class="post-title">
                                <a href="event_details.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
                            </h2>
                            <div class="post-content"><?php echo $row['short_description']; ?></div>

                        </div>
                    </div>
                    <!-- post -->

                <?php } ?>


            </div>
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar-right">
                        <ul class="pagination">
                            <li class="disabled">
                                    <span>
                                        <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                                    </span>
                            </li>
                            <li class="active">
                                    <span>1 
                                    <span class="sr-only">(current)</span></span>
                            </li>
                            <li class="">
                                    <span>2 
                                    <span class="sr-only">(current)</span></span>
                            </li>
                            <li class="">
                                    <span>3 
                                    <span class="sr-only">(current)</span></span>
                            </li>
                            <li class="">
                                    <span>4 
                                    <span class="sr-only">(current)</span></span>
                            </li>
                            <li>
                                    <span>
                                        <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                                    </span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- pagination -->
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