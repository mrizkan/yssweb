<div id="sns_footer" class="footer_style vesion2 wrap" style="">
    <div id="sns_footer_top" class="footer">
        <div class="container">
            <div class="container_in">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12 column0">
                        <div class="contact_us">
                            <h6>Contact us</h6>
                            <ul class="fa-ul">
                                <li class="pd-right">
                                    <i class="fa-li fa fw fa-home"> </i>
                                    <b>Cane Furnishing House</b><br/>
                                    76 & 78, Kumaran Ratnam Road,<br/>
                                    Colombo-02.
                                </li>
                                <li>
                                    <i class="fa-li fa fw fa-phone"> </i>

                                    <p>+94 112 304 583</p>

                                </li>
                                <li>
                                    <i class="fa-li fa fw fa-envelope"> </i>

                                    <p>
                                        <a href="mailto:info@canefurnishinghouse.com">info@canefurnishinghouse.com</a>
                                    </p>

                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-phone-12 col-xs-6 col-sm-3 col-md-2 column column1">
                        <h6>Menu</h6>
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Products</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-phone-12 col-xs-6 col-sm-3 col-md-2 column column2">
                        <h6>Products</h6>
                        <ul>
                            <li>
                                <a href="#">Banquet Chairs</a>
                            </li>
                            <li>
                                <a href="#">Plastic Arm Chairs</a>
                            </li>
                            <li>
                                <a href="#">Chafing Dishes</a>
                            </li>
                            <li>
                                <a href="#">Industrial Fans</a>
                            </li>
                            <li>
                                <a href="#">Plastic Teapoys</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-phone-12 col-xs-6 col-sm-3 col-md-2 column column3">
                        <h6>Products</h6>
                        <ul>
                            <li>
                                <a href="#">Garden Umbrellas</a>
                            </li>
                            <li>
                                <a href="#">Baby Chairs</a>
                            </li>
                            <li>
                                <a href="#">Gas Cookers</a>
                            </li>
                            <li>
                                <a href="#">Air Condition</a>
                            </li>
                            <li>
                                <a href="#">Tables</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-phone-12 col-xs-6 col-sm-3 col-md-2 column column3">
                        <h6>Products</h6>
                        <ul>
                            <li>
                                <a href="#">Barbecue Grills</a>
                            </li>
                            <li>
                                <a href="#">Cutlery & Crockery</a>
                            </li>
                            <li>
                                <a href="#">Wooden Tables</a>
                            </li>

                            <li>
                                <a href="#">Glassware</a>
                            </li>
                            <li>
                                <a href="#">Plates</a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="sns_footer_bottom" class="footer">
        <div class="container">
            <div class="row">
                <div class="bottom-pd1 col-sm-12">
                    <div class="sns-copyright">
                        Cane Furnishing House. &copy; Copyright 2016 | Powered By <a href="">ITMARTX</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- AND FOOTER -->
<div id="sns_tools">
    <div class="sns-croll-to-top"><a href="#" id="sns-totop" class=""><i class="fa fa-angle-up"></i></a>
        <script type="text/javascript">
            jQuery(function ($) {
                $("#sns-totop").hide();
                $(function () {
                    var wh = $(window).height();
                    var whtml = $(document).height();
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > whtml / 10) {
                            $('#sns-totop').fadeIn();
                        } else {
                            $('#sns-totop').fadeOut();
                        }
                    });
                    $('#sns-totop').click(function () {
                        $('body,html').animate({
                            scrollTop: 0
                        }, 800);
                        return false;
                    });
                });
            });
        </script>
    </div>

</div>
</div>
<div id="yith-quick-view-modal">
    <div class="yith-quick-view-overlay"></div>
    <div class="yith-wcqv-wrapper">
        <div class="yith-wcqv-main">
            <div class="yith-wcqv-head"><a href="#" id="yith-quick-view-close" class="yith-wcqv-close">X</a>
            </div>
            <div id="yith-quick-view-content" class="woocommerce single-product"></div>
        </div>
    </div>
</div>
<script type="text/template" id="tmpl-variation-template">/*
    <![CDATA[*/
    <div class="woocommerce-variation-description">{{{data.variation.variation_description}}}</div>
    <div class="woocommerce-variation-price">{{{data.variation.price_html}}}</div>
    <div class="woocommerce-variation-availability">{{{data.variation.availability_html}}}</div>/*]]>*/</script>
<script type="text/template" id="tmpl-unavailable-variation-template">/*
    <![CDATA[*/<p>Sorry,this product is unavailable.Please choose a different combination.</p>/*]]>*/</script>
<script type='text/javascript' src='<?= base_url() ?>media/js/sns-metabox.js'></script>
<script type='text/javascript' src='<?= base_url() ?>media/js/jquery.form.min.js'></script>
<script type='text/javascript'>
    var _wpcf7 = {
        "loaderUrl": "http:\/\/demo.snstheme.com\/wp\/simen\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif",
        "recaptcha": {
            "messages": {
                "empty": "Please verify that you are not a robot."
            }
        },
        "sending": "Sending ...",
        "cached": "1"
    };
</script>
<script type='text/javascript' src='<?= base_url() ?>media/js/scripts.js'></script>
<script type='text/javascript' src='<?= base_url() ?>media/js/jquery.prettyPhoto.min.js'></script>
<script type='text/javascript'>
    var wc_single_product_params = {
        "i18n_required_rating_text": "Please select a rating",
        "review_rating_required": "yes"
    };
</script>
<script type='text/javascript' src='<?= base_url() ?>media/js/single-product.min.js'></script>
<script type='text/javascript' src='<?= base_url() ?>media/js/jquery.blockUI.min.js'></script>
<script type='text/javascript'>
    /*<![CDATA[*/
    var woocommerce_params = {
        "ajax_url": "\/wp\/simen\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/wp\/simen\/?product=modular-modern-7&wc-ajax=%%endpoint%%"
    };
    /*]]>*/
</script>
<script type='text/javascript' src='<?= base_url() ?>media/js/woocommerce.min.js'></script>
<script type='text/javascript' src='<?= base_url() ?>media/js/jquery.cookie.min.js'></script>
<script type='text/javascript'>
    /*<![CDATA[*/
    var wc_cart_fragments_params = {
        "ajax_url": "\/wp\/simen\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/wp\/simen\/?product=modular-modern-7&wc-ajax=%%endpoint%%",
        "fragment_name": "wc_fragments"
    };
    /*]]>*/
</script>
<script type='text/javascript' src='<?= base_url() ?>media/js/cart-fragments.min.js'></script>
<script type='text/javascript'>
    /*<![CDATA[*/
    var yith_woocompare = {
        "ajaxurl": "\/wp\/simen\/?product=modular-modern-7&wc-ajax=%%endpoint%%",
        "actionadd": "yith-woocompare-add-product",
        "actionremove": "yith-woocompare-remove-product",
        "actionview": "yith-woocompare-view-table",
        "added_label": "Added",
        "table_title": "Product Comparison",
        "auto_open": "yes",
        "loader": "http:\/\/demo.snstheme.com\/wp\/simen\/wp-content\/plugins\/yith-woocommerce-compare\/assets\/images\/loader.gif",
        "button_text": "Compare"
    };
    /*]]>*/
</script>
<script type='text/javascript' src='<?= base_url() ?>media/js/woocompare.js'></script>
<script type='text/javascript' src='<?= base_url() ?>media/js/jquery.colorbox-min.js'></script>
<script type='text/javascript'>
    var yith_qv = {
        "ajaxurl": "http:\/\/demo.snstheme.com\/wp\/simen\/wp-admin\/admin-ajax.php",
        "is2_2": "",
        "loader": "http:\/\/demo.snstheme.com\/wp\/simen\/wp-content\/plugins\/yith-woocommerce-quick-view\/assets\/image\/qv-loader.gif"
    };
</script>
<script type='text/javascript' src='<?= base_url() ?>media/js/frontend.min.js'></script>
<script type='text/javascript' src='<?= base_url() ?>media/js/jquery.selectBox.min.js'></script>
<script type='text/javascript'>
    /*<![CDATA[*/
    var yith_wcwl_l10n = {
        "ajax_url": "\/wp\/simen\/wp-admin\/admin-ajax.php",
        "redirect_to_cart": "no",
        "multi_wishlist": "",
        "hide_add_button": "1",
        "is_user_logged_in": "",
        "ajax_loader_url": "http:\/\/demo.snstheme.com\/wp\/simen\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader.gif",
        "remove_from_wishlist_after_add_to_cart": "yes",
        "labels": {
            "cookie_disabled": "We are sorry, but this feature is available only if cookies are enabled on your browser.",
            "added_to_cart_message": "<div class=\"woocommerce-message\">Product correctly added to cart<\/div>"
        },
        "actions": {
            "add_to_wishlist_action": "add_to_wishlist",
            "remove_from_wishlist_action": "remove_from_wishlist",
            "move_to_another_wishlist_action": "move_to_another_wishlsit",
            "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem"
        }
    };
    /*]]>*/
</script>
<script type='text/javascript' src='<?= base_url() ?>media/js/jquery.yith-wcwl.js'></script>
<script type='text/javascript' src='<?= base_url() ?>media/js/sns-woocommerce.js'></script>
<script type='text/javascript' src='<?= base_url() ?>media/js/elevatezoom-custom.js'></script>
<script type='text/javascript' src='<?= base_url() ?>media/js/bootstrap.min.js'></script>
<script type='text/javascript' src='<?= base_url() ?>media/js/bootstrap-tabdrop.min.js'></script>
<script type='text/javascript' src='<?= base_url() ?>media/js/jquery.lazyload.min.js'></script>
<script type='text/javascript' src='<?= base_url() ?>media/js/smooth-scroll.min.js'></script>
<script type='text/javascript' src='<?= base_url() ?>media/js/sns-script.min.js'></script>
<script type='text/javascript' src='<?= base_url() ?>media/js/wp-embed.min.js'></script>
<script type='text/javascript' src='<?= base_url() ?>media/js/owl.carousel.min.js'></script>
<script type='text/javascript' src='<?= base_url() ?>media/js/underscore.min.js'></script>
<script type='text/javascript'>
    var _wpUtilSettings = {
        "ajax": {
            "url": "\/wp\/simen\/wp-admin\/admin-ajax.php"
        }
    };
</script>
<script type='text/javascript' src='<?= base_url() ?>media/js/wp-util.min.js'></script>
<script type='text/javascript'>
    var wc_add_to_cart_variation_params = {
        "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
        "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
        "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
    };
</script>
<script type='text/javascript' src='<?= base_url() ?>media/js/add-to-cart-variation.min.js'></script>
<script type="text/javascript"></script>

</body>

</html>