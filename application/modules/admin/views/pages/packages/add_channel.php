<?php $this->view('includes/header_start.php'); ?>
<!-- extra css start -->
<!-- extra css end -->
<?php $this->view('includes/header_end.php'); ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Channels Collection</h4>
                        <ol class="breadcrumb p-0">
                            <li><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                            <li><a href="<?= base_url('admin/packages') ?>"> Packages</a></li>
                            <li><a href="<?= base_url('admin/packages/edit/') . $objData->PackagesId ?>"> Edit
                                    Package</a></li>
                            <li class="active"> Add Channel Package</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <?php $this->view('includes/notification.php'); ?>

            <div class="row">
                <div class="col-sm-12">
                    <?= form_open() ?>


                    <div>
                        <?php

                        ?>
                        <?php foreach ($channelTags as $channelTag): ?>


                            <div class="card-box">

                                <h4 class="header-title m-t-0 m-b-30">
                                    <small> Channel Tag Name :-</small>
                                    <?= $channelTag->ChannelTagTitle ?>
                                </h4>

                                <h4 class="header-title m-t-0 m-b-30">
                                    <small> Select Channels</small>
                                </h4>

                                <div class="row ">
                                    <select class="select2 form-control select2-multiple" multiple="multiple" multiple
                                            data-placeholder="Choose ..."
                                            name="ChannelList[<?= $channelTag->ChannelTagId ?>][]">

                                        <?php foreach ($channels as $channel): ?>
                                            <option value="<?= $channel->ChannelId ?>" <?= in_array($channel->ChannelId, isset($obj[$channelTag->ChannelTagId]) ? $obj[$channelTag->ChannelTagId] : []) ? "selected" : "" ?>>
                                                <?= $channel->ChannelTitle ?>
                                            </option>
                                        <?php endforeach; ?>

                                    </select>
                                </div>
                            </div>

                        <?php endforeach; ?>

                    </div>

                    <button class="btn btn-success pull-right"> Save</button>

                    <?= form_close() ?>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

</div>
<!-- container -->

</div>
<!-- content -->

</div>
<!-- End content-page -->

<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<?php $this->view('includes/footer_start.php') ?>
<!-- extra js start -->
<!-- multiupload -->
<script src="<?= base_url() ?>assets/plugins/jQuery-UI/jquery.ui.widget.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.fileupload.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/extras/load-image.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.fileupload-process.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.fileupload-image.js"></script>
<!-- magnific popup -->

<script src="<?= base_url() ?>assets/ckeditor/ckeditor.js"></script>


<!-- extra js end -->
<?php $this->view('includes/footer_end.php') ?>
