<footer id="footer">
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 widget bottom-xs-pad-20">
                    <div class="widget-title">
                        <!-- Title -->
                        <h3 class="title">About Us</h3>
                    </div>
                    <!-- Text -->
                    <p>We like to provide great site with complete features what you want to impletement in your
                        business!</p>
                    <!-- Address -->
                    <p>
                        <strong>Office:</strong> No 28, rue de moquet,<br> 75017 Paris, France.</p>
                    <!-- Phone -->
                    <p>
                        <strong>Call Us:</strong> +94 777 998 889 or
                        <br/>+94 777 830 034</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 widget bottom-xs-pad-20">
                    <div class="widget-title">
                        <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fyouthsocialsocietypanadura/&amp;width=320&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false"
                                scrolling="no" frameborder="0" style="border: none; overflow: hidden; height: 200px;"
                                allowtransparency="true"></iframe>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 widget newsletter bottom-xs-pad-20">
                    <div class="widget-title">
                        <!-- Title -->
                        <h3 class="title">Newsletter Signup</h3>
                    </div>
                    <div>
                        <!-- Text -->
                        <p>Subscribe to Our Newsletter to get Important News</p>
                        <p class="form-message1" style="display: none;"></p>
                        <div class="clearfix"></div>
                        <!-- Form -->
                        <form id="sub" name="subscribe_form" role="form">
                            <div class="input-text form-group has-feedback">
                                <input class="form-control" type="email" value="" name="email"/>
                                <div id="statussub"></div>
                                <button class="submit bg-color" type="submit">
                                    <span class="glyphicon glyphicon-arrow-right"></span>
                                </button>
                            </div>
                        </form>

                        <script src="js/jquery-1.11.1.min.js"></script>
                        <script src="js/bootstrap.min.js"></script>

                        <script>

                            // this is the id of the form
                            $(document).ready(function () {

                                $("#sub").submit(function (e) {
                                    //  e.preventDefault();
                                    $.ajax({
                                        type: "POST",
                                        url: 'sub.php',
                                        data: $(this).serialize(), // serializes the form's elements.
                                        success: function (data) {
                                            $('#statussub').html('<div class="alert alert-success" role="alert">You are Subscribed Successfully</div>');
                                            $('#sub')[0].reset();
                                        }
                                    });
                                    return false;
                                });

                            });
                        </script>
                    </div>
                    <!-- Count -->


                    <!-- Social Links -->
                    <div class="social-icon gray-bg icons-circle i-3x">
                        <a href="https://www.facebook.com/youthsocialsocietypanadura/" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://twitter.com/YSSPANADURA">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <!-- .newsletter -->
            </div>
        </div>
    </div>
    <!-- footer-top -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <!-- Copyrights -->
                <div class="col-xs-10 col-sm-6 col-md-6"> &copy; 2019 | Powerd by <a href="http://rizcreation.com/"
                                                                                     target="_blank">Riz Creation</a>.
                    <br/>
                </div>
                <div class="col-xs-2 col-sm-6 col-md-6 text-right page-scroll gray-bg icons-circle i-3x">
                    <!-- Goto Top -->
                    <a href="#page">
                        <i class="glyphicon glyphicon-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom -->
</footer>