<?php $this->view('inc/header.php'); ?>
    <!-- AND HEADER -->

    <!-- BREADCRUMBS -->
    <div id="sns_breadcrumbs" class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="sns_titlepage"></div>
                    <div id="sns_pathway" class="clearfix">
                        <div class="pathway-inner">
                            <span class="icon-pointer "></span>
                            <ul class="breadcrumbs">
                                <li class="home">
                                    <a title="Go to Home Page" href="#">
                                        <i class="fa fa-home"></i>
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="category3 last">
                                    <span>Funiture</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- AND BREADCRUMBS -->

    <!-- CONTENT -->
    <div id="sns_content" class="wrap layout-lm">
        <div class="container">
            <div class="row">

                <!-- sns_left -->
                <?php $this->view('inc/side_left.php'); ?>
                <!-- sns_left -->


                <div id="sns_main" class="col-md-9 col-main">
                    <div id="sns_mainmidle">
                        <div class="page-title category-title">
                            <h1>Women</h1>
                        </div>
                        <div class="category-cms-block"></div>
                        <p class="category-image banner5">
                            <a href="#">
                                <img src="<?= base_url() ?>media/images/banner-grid.jpg" alt="">
                            </a>
                        </p>

                        <div class="category-products">

                            <!-- toolbar clearfix -->

                            <div class="toolbar clearfix">
                                <div class="toolbar-inner">
                                    <p class="view-mode">
                                        <label>View as</label>
                                        <strong class="icon-grid" title="Grid"></strong>
                                        <a class="icon-list" title="List" href=""></a>
                                    </p>

                                    <div class="limiter">
                                        <label>Show</label>

                                        <div class="select-new">
                                            <div class="select-inner jqtransformdone">
                                                <div class="jqTransformSelectWrapper" style="z-index: 10; width: 80px;">
                                                    <div>
                                                        <span style="width: 50px;"> 20 </span>
                                                        <a class="jqTransformSelectOpen" href="#"></a>
                                                    </div>
                                                    <ul style="width: 78px; display: none; visibility: visible;">
                                                        <li>
                                                            <a class="selected" href="#"> 20 </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> 28 </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> 36 </a>
                                                        </li>
                                                    </ul>
                                                    <select class="select-limit-show jqTransformHidden"
                                                            onchange="setLocation(this.value)" style="">
                                                        <option selected=""> 20</option>
                                                        <option value=""> 28</option>
                                                        <option value=""> 36</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <span>per page</span>
                                    </div>

                                    <div class="pager">
                                        <p class="amount">
                                            <span>1 to 20 </span>
                                            123 item (s)
                                        </p>

                                        <div class="pages">
                                            <strong>Pages:</strong>
                                            <ol>
                                                <li class="current">1</li>
                                                <li>
                                                    <a href="#">2</a>
                                                </li>
                                                <li>
                                                    <a href="#">3</a>
                                                </li>
                                                <li>
                                                    <a class="next i-next" title="Next" href="#"> Next </a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- toolbar clearfix -->


                            <!-- sns-products-container -->
                            <div class="sns-products-container clearfix">
                                <div class="products-grid row style_grid">

                                    <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                        <div class="item-inner">
                                            <div class="prd">
                                                <div class="item-img clearfix">
                                                    <div class="ico-label">
                                                        <span class="ico-product ico-sale">Sale</span>
                                                    </div>
                                                    <a class="product-image have-additional"
                                                       title="Modular Modern"
                                                       href="">
                                                                <span class="img-main">
                                                               <img src="<?= base_url() ?>media/images/1.jpg" alt="">
                                                                </span>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <a title="Modular Modern"
                                                               href="">
                                                                Modular Modern </a>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-bot action123">
                                                    <div class="wrap-addtocart">
                                                        <button class="btn-cart"
                                                                title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Add to Cart</span>
                                                        </button>
                                                    </div>
                                                    <div class="actions">
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist"
                                                                   href="#"
                                                                   title="Add to Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="link-compare"
                                                                   href="#"
                                                                   title="Add to Compare">
                                                                    <i class="fa fa-random"></i>
                                                                </a>
                                                            </li>
                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                <div class="quickview-wrap">
                                                                    <a class="sns-btn-quickview qv_btn"
                                                                       href="#">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                        <div class="item-inner">
                                            <div class="prd">
                                                <div class="item-img clearfix">
                                                    <div class="ico-label">
                                                        <span class="ico-product ico-sale">Sale</span>
                                                    </div>
                                                    <a class="product-image have-additional"
                                                       title="Modular Modern"
                                                       href="">
                                                                <span class="img-main">
                                                               <img src="<?= base_url() ?>media/images/1.jpg" alt="">
                                                                </span>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <a title="Modular Modern"
                                                               href="">
                                                                Modular Modern </a>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-bot action123">
                                                    <div class="wrap-addtocart">
                                                        <button class="btn-cart"
                                                                title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Add to Cart</span>
                                                        </button>
                                                    </div>
                                                    <div class="actions">
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist"
                                                                   href="#"
                                                                   title="Add to Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="link-compare"
                                                                   href="#"
                                                                   title="Add to Compare">
                                                                    <i class="fa fa-random"></i>
                                                                </a>
                                                            </li>
                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                <div class="quickview-wrap">
                                                                    <a class="sns-btn-quickview qv_btn"
                                                                       href="#">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                        <div class="item-inner">
                                            <div class="prd">
                                                <div class="item-img clearfix">
                                                    <div class="ico-label">
                                                        <span class="ico-product ico-sale">Sale</span>
                                                    </div>
                                                    <a class="product-image have-additional"
                                                       title="Modular Modern"
                                                       href="">
                                                                <span class="img-main">
                                                               <img src="<?= base_url() ?>media/images/1.jpg" alt="">
                                                                </span>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <a title="Modular Modern"
                                                               href="">
                                                                Modular Modern </a>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-bot action123">
                                                    <div class="wrap-addtocart">
                                                        <button class="btn-cart"
                                                                title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Add to Cart</span>
                                                        </button>
                                                    </div>
                                                    <div class="actions">
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist"
                                                                   href="#"
                                                                   title="Add to Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="link-compare"
                                                                   href="#"
                                                                   title="Add to Compare">
                                                                    <i class="fa fa-random"></i>
                                                                </a>
                                                            </li>
                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                <div class="quickview-wrap">
                                                                    <a class="sns-btn-quickview qv_btn"
                                                                       href="#">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                        <div class="item-inner">
                                            <div class="prd">
                                                <div class="item-img clearfix">
                                                    <div class="ico-label">
                                                        <span class="ico-product ico-sale">Sale</span>
                                                    </div>
                                                    <a class="product-image have-additional"
                                                       title="Modular Modern"
                                                       href="">
                                                                <span class="img-main">
                                                               <img src="<?= base_url() ?>media/images/1.jpg" alt="">
                                                                </span>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <a title="Modular Modern"
                                                               href="">
                                                                Modular Modern </a>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-bot action123">
                                                    <div class="wrap-addtocart">
                                                        <button class="btn-cart"
                                                                title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Add to Cart</span>
                                                        </button>
                                                    </div>
                                                    <div class="actions">
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist"
                                                                   href="#"
                                                                   title="Add to Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="link-compare"
                                                                   href="#"
                                                                   title="Add to Compare">
                                                                    <i class="fa fa-random"></i>
                                                                </a>
                                                            </li>
                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                <div class="quickview-wrap">
                                                                    <a class="sns-btn-quickview qv_btn"
                                                                       href="#">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                        <div class="item-inner">
                                            <div class="prd">
                                                <div class="item-img clearfix">
                                                    <div class="ico-label">
                                                        <span class="ico-product ico-sale">Sale</span>
                                                    </div>
                                                    <a class="product-image have-additional"
                                                       title="Modular Modern"
                                                       href="">
                                                                <span class="img-main">
                                                               <img src="<?= base_url() ?>media/images/1.jpg" alt="">
                                                                </span>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <a title="Modular Modern"
                                                               href="">
                                                                Modular Modern </a>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-bot action123">
                                                    <div class="wrap-addtocart">
                                                        <button class="btn-cart"
                                                                title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Add to Cart</span>
                                                        </button>
                                                    </div>
                                                    <div class="actions">
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist"
                                                                   href="#"
                                                                   title="Add to Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="link-compare"
                                                                   href="#"
                                                                   title="Add to Compare">
                                                                    <i class="fa fa-random"></i>
                                                                </a>
                                                            </li>
                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                <div class="quickview-wrap">
                                                                    <a class="sns-btn-quickview qv_btn"
                                                                       href="#">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                        <div class="item-inner">
                                            <div class="prd">
                                                <div class="item-img clearfix">
                                                    <div class="ico-label">
                                                        <span class="ico-product ico-sale">Sale</span>
                                                    </div>
                                                    <a class="product-image have-additional"
                                                       title="Modular Modern"
                                                       href="">
                                                                <span class="img-main">
                                                               <img src="<?= base_url() ?>media/images/1.jpg" alt="">
                                                                </span>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <a title="Modular Modern"
                                                               href="">
                                                                Modular Modern </a>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-bot action123">
                                                    <div class="wrap-addtocart">
                                                        <button class="btn-cart"
                                                                title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Add to Cart</span>
                                                        </button>
                                                    </div>
                                                    <div class="actions">
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist"
                                                                   href="#"
                                                                   title="Add to Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="link-compare"
                                                                   href="#"
                                                                   title="Add to Compare">
                                                                    <i class="fa fa-random"></i>
                                                                </a>
                                                            </li>
                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                <div class="quickview-wrap">
                                                                    <a class="sns-btn-quickview qv_btn"
                                                                       href="#">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                        <div class="item-inner">
                                            <div class="prd">
                                                <div class="item-img clearfix">
                                                    <div class="ico-label">
                                                        <span class="ico-product ico-sale">Sale</span>
                                                    </div>
                                                    <a class="product-image have-additional"
                                                       title="Modular Modern"
                                                       href="">
                                                                <span class="img-main">
                                                               <img src="<?= base_url() ?>media/images/1.jpg" alt="">
                                                                </span>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <a title="Modular Modern"
                                                               href="">
                                                                Modular Modern </a>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-bot action123">
                                                    <div class="wrap-addtocart">
                                                        <button class="btn-cart"
                                                                title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Add to Cart</span>
                                                        </button>
                                                    </div>
                                                    <div class="actions">
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist"
                                                                   href="#"
                                                                   title="Add to Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="link-compare"
                                                                   href="#"
                                                                   title="Add to Compare">
                                                                    <i class="fa fa-random"></i>
                                                                </a>
                                                            </li>
                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                <div class="quickview-wrap">
                                                                    <a class="sns-btn-quickview qv_btn"
                                                                       href="#">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                        <div class="item-inner">
                                            <div class="prd">
                                                <div class="item-img clearfix">
                                                    <div class="ico-label">
                                                        <span class="ico-product ico-sale">Sale</span>
                                                    </div>
                                                    <a class="product-image have-additional"
                                                       title="Modular Modern"
                                                       href="">
                                                                <span class="img-main">
                                                               <img src="<?= base_url() ?>media/images/1.jpg" alt="">
                                                                </span>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <a title="Modular Modern"
                                                               href="">
                                                                Modular Modern </a>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-bot action123">
                                                    <div class="wrap-addtocart">
                                                        <button class="btn-cart"
                                                                title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Add to Cart</span>
                                                        </button>
                                                    </div>
                                                    <div class="actions">
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist"
                                                                   href="#"
                                                                   title="Add to Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="link-compare"
                                                                   href="#"
                                                                   title="Add to Compare">
                                                                    <i class="fa fa-random"></i>
                                                                </a>
                                                            </li>
                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                <div class="quickview-wrap">
                                                                    <a class="sns-btn-quickview qv_btn"
                                                                       href="#">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                        <div class="item-inner">
                                            <div class="prd">
                                                <div class="item-img clearfix">
                                                    <div class="ico-label">
                                                        <span class="ico-product ico-sale">Sale</span>
                                                    </div>
                                                    <a class="product-image have-additional"
                                                       title="Modular Modern"
                                                       href="">
                                                                <span class="img-main">
                                                               <img src="<?= base_url() ?>media/images/1.jpg" alt="">
                                                                </span>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <a title="Modular Modern"
                                                               href="">
                                                                Modular Modern </a>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-bot action123">
                                                    <div class="wrap-addtocart">
                                                        <button class="btn-cart"
                                                                title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Add to Cart</span>
                                                        </button>
                                                    </div>
                                                    <div class="actions">
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist"
                                                                   href="#"
                                                                   title="Add to Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="link-compare"
                                                                   href="#"
                                                                   title="Add to Compare">
                                                                    <i class="fa fa-random"></i>
                                                                </a>
                                                            </li>
                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                <div class="quickview-wrap">
                                                                    <a class="sns-btn-quickview qv_btn"
                                                                       href="#">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                        <div class="item-inner">
                                            <div class="prd">
                                                <div class="item-img clearfix">
                                                    <div class="ico-label">
                                                        <span class="ico-product ico-sale">Sale</span>
                                                    </div>
                                                    <a class="product-image have-additional"
                                                       title="Modular Modern"
                                                       href="">
                                                                <span class="img-main">
                                                               <img src="<?= base_url() ?>media/images/1.jpg" alt="">
                                                                </span>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <a title="Modular Modern"
                                                               href="">
                                                                Modular Modern </a>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-bot action123">
                                                    <div class="wrap-addtocart">
                                                        <button class="btn-cart"
                                                                title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Add to Cart</span>
                                                        </button>
                                                    </div>
                                                    <div class="actions">
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist"
                                                                   href="#"
                                                                   title="Add to Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="link-compare"
                                                                   href="#"
                                                                   title="Add to Compare">
                                                                    <i class="fa fa-random"></i>
                                                                </a>
                                                            </li>
                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                <div class="quickview-wrap">
                                                                    <a class="sns-btn-quickview qv_btn"
                                                                       href="#">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                        <div class="item-inner">
                                            <div class="prd">
                                                <div class="item-img clearfix">
                                                    <div class="ico-label">
                                                        <span class="ico-product ico-sale">Sale</span>
                                                    </div>
                                                    <a class="product-image have-additional"
                                                       title="Modular Modern"
                                                       href="">
                                                                <span class="img-main">
                                                               <img src="<?= base_url() ?>media/images/1.jpg" alt="">
                                                                </span>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <a title="Modular Modern"
                                                               href="">
                                                                Modular Modern </a>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-bot action123">
                                                    <div class="wrap-addtocart">
                                                        <button class="btn-cart"
                                                                title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Add to Cart</span>
                                                        </button>
                                                    </div>
                                                    <div class="actions">
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist"
                                                                   href="#"
                                                                   title="Add to Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="link-compare"
                                                                   href="#"
                                                                   title="Add to Compare">
                                                                    <i class="fa fa-random"></i>
                                                                </a>
                                                            </li>
                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                <div class="quickview-wrap">
                                                                    <a class="sns-btn-quickview qv_btn"
                                                                       href="#">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                        <div class="item-inner">
                                            <div class="prd">
                                                <div class="item-img clearfix">
                                                    <div class="ico-label">
                                                        <span class="ico-product ico-sale">Sale</span>
                                                    </div>
                                                    <a class="product-image have-additional"
                                                       title="Modular Modern"
                                                       href="">
                                                                <span class="img-main">
                                                               <img src="<?= base_url() ?>media/images/1.jpg" alt="">
                                                                </span>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <a title="Modular Modern"
                                                               href="">
                                                                Modular Modern </a>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-bot action123">
                                                    <div class="wrap-addtocart">
                                                        <button class="btn-cart"
                                                                title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Add to Cart</span>
                                                        </button>
                                                    </div>
                                                    <div class="actions">
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist"
                                                                   href="#"
                                                                   title="Add to Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="link-compare"
                                                                   href="#"
                                                                   title="Add to Compare">
                                                                    <i class="fa fa-random"></i>
                                                                </a>
                                                            </li>
                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                <div class="quickview-wrap">
                                                                    <a class="sns-btn-quickview qv_btn"
                                                                       href="#">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                        <div class="item-inner">
                                            <div class="prd">
                                                <div class="item-img clearfix">
                                                    <div class="ico-label">
                                                        <span class="ico-product ico-sale">Sale</span>
                                                    </div>
                                                    <a class="product-image have-additional"
                                                       title="Modular Modern"
                                                       href="">
                                                                <span class="img-main">
                                                               <img src="<?= base_url() ?>media/images/1.jpg" alt="">
                                                                </span>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <a title="Modular Modern"
                                                               href="">
                                                                Modular Modern </a>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-bot action123">
                                                    <div class="wrap-addtocart">
                                                        <button class="btn-cart"
                                                                title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Add to Cart</span>
                                                        </button>
                                                    </div>
                                                    <div class="actions">
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist"
                                                                   href="#"
                                                                   title="Add to Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="link-compare"
                                                                   href="#"
                                                                   title="Add to Compare">
                                                                    <i class="fa fa-random"></i>
                                                                </a>
                                                            </li>
                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                <div class="quickview-wrap">
                                                                    <a class="sns-btn-quickview qv_btn"
                                                                       href="#">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                        <div class="item-inner">
                                            <div class="prd">
                                                <div class="item-img clearfix">
                                                    <div class="ico-label">
                                                        <span class="ico-product ico-sale">Sale</span>
                                                    </div>
                                                    <a class="product-image have-additional"
                                                       title="Modular Modern"
                                                       href="">
                                                                <span class="img-main">
                                                               <img src="<?= base_url() ?>media/images/1.jpg" alt="">
                                                                </span>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <a title="Modular Modern"
                                                               href="">
                                                                Modular Modern </a>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-bot action123">
                                                    <div class="wrap-addtocart">
                                                        <button class="btn-cart"
                                                                title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Add to Cart</span>
                                                        </button>
                                                    </div>
                                                    <div class="actions">
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist"
                                                                   href="#"
                                                                   title="Add to Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="link-compare"
                                                                   href="#"
                                                                   title="Add to Compare">
                                                                    <i class="fa fa-random"></i>
                                                                </a>
                                                            </li>
                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                <div class="quickview-wrap">
                                                                    <a class="sns-btn-quickview qv_btn"
                                                                       href="#">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                        <div class="item-inner">
                                            <div class="prd">
                                                <div class="item-img clearfix">
                                                    <div class="ico-label">
                                                        <span class="ico-product ico-sale">Sale</span>
                                                    </div>
                                                    <a class="product-image have-additional"
                                                       title="Modular Modern"
                                                       href="">
                                                                <span class="img-main">
                                                               <img src="<?= base_url() ?>media/images/1.jpg" alt="">
                                                                </span>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <a title="Modular Modern"
                                                               href="">
                                                                Modular Modern </a>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-bot action123">
                                                    <div class="wrap-addtocart">
                                                        <button class="btn-cart"
                                                                title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Add to Cart</span>
                                                        </button>
                                                    </div>
                                                    <div class="actions">
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist"
                                                                   href="#"
                                                                   title="Add to Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="link-compare"
                                                                   href="#"
                                                                   title="Add to Compare">
                                                                    <i class="fa fa-random"></i>
                                                                </a>
                                                            </li>
                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                <div class="quickview-wrap">
                                                                    <a class="sns-btn-quickview qv_btn"
                                                                       href="#">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                        <div class="item-inner">
                                            <div class="prd">
                                                <div class="item-img clearfix">
                                                    <div class="ico-label">
                                                        <span class="ico-product ico-sale">Sale</span>
                                                    </div>
                                                    <a class="product-image have-additional"
                                                       title="Modular Modern"
                                                       href="">
                                                                <span class="img-main">
                                                               <img src="<?= base_url() ?>media/images/1.jpg" alt="">
                                                                </span>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <a title="Modular Modern"
                                                               href="">
                                                                Modular Modern </a>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-bot action123">
                                                    <div class="wrap-addtocart">
                                                        <button class="btn-cart"
                                                                title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Add to Cart</span>
                                                        </button>
                                                    </div>
                                                    <div class="actions">
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist"
                                                                   href="#"
                                                                   title="Add to Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="link-compare"
                                                                   href="#"
                                                                   title="Add to Compare">
                                                                    <i class="fa fa-random"></i>
                                                                </a>
                                                            </li>
                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                <div class="quickview-wrap">
                                                                    <a class="sns-btn-quickview qv_btn"
                                                                       href="#">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- sns-products-container -->


                            <!-- toolbar clearfix  bottom-->

                            <div class="toolbar clearfix">
                                <div class="toolbar-inner">
                                    <div class="pager">
                                        <p class="amount">
                                            <span>1 to 20 </span>
                                            123 item (s)
                                        </p>

                                        <div class="pages">
                                            <strong>Pages:</strong>
                                            <ol>
                                                <li class="current">1</li>
                                                <li>
                                                    <a href="#">2</a>
                                                </li>
                                                <li>
                                                    <a href="#">3</a>
                                                </li>
                                                <li>
                                                    <a class="next i-next" title="Next" href="#"> Next </a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- toolbar clearfix bottom -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- AND CONTENT -->


    <!-- FOOTER -->
<?php $this->view('inc/footer.php'); ?>