<?php $this->view('inc/header.php'); ?>
    <!-- AND HEADER -->
    <!-- BREADCRUMBS -->
    <!--<div id="sns_breadcrumbs" class="wrap">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-12">-->
    <!--                <div id="sns_titlepage"></div>-->
    <!--                <div id="sns_pathway" class="clearfix">-->
    <!--                    <div class="pathway-inner">-->
    <!--                        <span class="icon-pointer "></span>-->
    <!--                        <ul class="breadcrumbs">-->
    <!--                            <li class="home">-->
    <!--                                <a title="Go to Home Page" href="#">-->
    <!--                                    <i class="fa fa-home"></i>-->
    <!--                                    <span>Contact us</span>-->
    <!--                                </a>-->
    <!--                            </li>-->
    <!--                            <li class="category3 last">-->
    <!--                                <span>Contact us</span>-->
    <!--                            </li>-->
    <!--                        </ul>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- AND BREADCRUMBS -->

    <!-- CONTENT -->
    <div id="sns_content" class="wrap layout-m">
        <div class="container">
            <div class="row">
                <div id="contact_gmap" class="col-md-12">
                    <div class="page-title">
                        <h1>Contact Us</h1>
                    </div>
                    <div class="row clearfix mt">
                        <div class="col-md-4 contact-info">
                            <p>Need to know where to rent furniture? Let us help you with all of your furniture rental
                                needs. Whatever your reason for need, our showroom consultants can help! Stop in and
                                visit one of our furniture showrooms to see and learn more about the CFH advantage!</p>
                            <ul class="fa-ul">
                                <li><i class="fa-li fa fa-map-marker"></i>76 & 78, Kumaran Ratnam Road, Colombo-02.</li>
                                <li><i class="fa-li fa fa-phone"></i>+94 112 304 583</li>
                                <li><i class="fa-li fa fa-envelope-o"></i><a href="mailto:info@canefurnishinghouse.com">info@canefurnishinghouse.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <p class="style1">Send an email. All fields with an (*) are required.</p>

                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="name" class="form-control required-entry input-text" id="name"
                                                   placeholder="Name (*)" title="Name" value="" type="text"/>
                                        </div>
                                        <div class="form-group">
                                            <input name="email"
                                                   class="form-control input-text required-entry validate-email"
                                                   id="email" placeholder="E-mail (*)" title="Email" value=""
                                                   type="text"/>
                                        </div>
                                        <div class="form-group">
                                            <input class="input-text form-control" name="telephone" id="telephone"
                                                   placeholder="Telephone" title="Telephone" value="" type="text"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <textarea name="comment" placeholder="Comment (*)" id="comment"
                                                      title="Comment" class="form-control required-entry input-text"
                                                      cols="5" rows="2"></textarea>
                                        </div>
                                        <div class="buttons-set">
                                            <input type="text" name="hideit" id="hideit" value=""
                                                   style="display:none !important;"/>
                                            <button type="submit" title="Submit" class="button">
                                                <span>Send Email</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt20">
                        <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7085915292387!2d79.84949381436732!3d6.925395094996221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593de454cb01%3A0x9e4dcfff06d5e0!2sKumaran+Ratnam+Rd%2C+Colombo!5e0!3m2!1sen!2slk!4v1476252133599"
                                width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- AND CONTENT -->


    <!-- FOOTER -->
<?php $this->view('inc/footer.php'); ?>