<?php $this->view('includes/header_start.php'); ?>
<!-- extra css start -->
<link href="<?= base_url("assets/plugins/datatables/dataTables.bootstrap4.min.css") ?>" rel="stylesheet"
      type="text/css"/>
<link href="<?= base_url("assets/plugins/datatables/buttons.bootstrap4.min.css") ?>" rel="stylesheet" type="text/css"/>
<link href="<?= base_url("assets/plugins/datatables/responsive.bootstrap4.min.css") ?>" rel="stylesheet"
      type="text/css"/>
<!-- extra css end -->
<?php $this->view('includes/header_end.php'); ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Channel Tag Re-arrange</h4>
                        <ol class="breadcrumb p-0">
                            <li><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                            <li><a href="<?= base_url('admin/channeltag') ?>"> Channel Tag</a></li>
                            <li class="active"> Channel Tag Re-arrange</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">

                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Channel Tag Re-arrange</h4>

                        <p id="status"></p>

                        <input type="hidden" id="view" value="channeltag"/>
                        <input type="hidden" id="id" value="ChannelTagId"/>
                        <input type="hidden" id="action" value="<?= base_url('admin/reorder/do_update') ?>"/>

                        <div class="row" id="sortable">
                            <?php
                            if (is_array($record)):
                                foreach ($record as $k => $row):
                                    ?>
                                    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-4"
                                         id="conid_<?= $row->ChannelTagId ?>">
                                        <div class="alert alerts-demo" role="alert" style="cursor: move">
                                            <strong> <?= $row->Order ?></strong> <?= $row->ChannelTagTitle ?>
                                        </div>
                                    </div>

                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- container -->
</div> <!-- content -->
</div><!-- End content-page -->

<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<?php $this->view('includes/footer_start.php') ?>
<!-- extra js start -->
<!-- Required datatable js -->

<script src="<?= base_url("assets/plugins/datatables/jquery.dataTables.min.js") ?>"></script>
<script src="<?= base_url("assets/plugins/datatables/dataTables.bootstrap4.min.js") ?>"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').DataTable();

    });
</script>
<script>
    //    $('#sortable').onclick(function() {
    $(function () {

        $("#sortable").sortable({

            opacity: 0.6, cursor: 'move', update: function () {
                var self = $(this);
//                bootbox.confirm("Are you sure to re-arrange the record order ?", function (result) {
                var result = confirm("Are you sure to re-arrange the record order ?");
                if (result == true) {
                    var table = $("#view").val();
                    var id = $("#id").val();
                    var path = $("#action").val();
//                        console.log(table);
//                        console.log(path);
                    var order = self.sortable("serialize") + '&table=' + table + '&id=' + id;
//                        console.log(order);
                    $.post(path, order, function (theResponse) {
                        $('#legend').removeClass('preloader');
                        $("#status").html("<div class='animated fadeIn text-center alert alert-success'>Re-arrange Success </div>");
                        location.reload()
                    });
                }
//                });
            }
        });

    });
</script>
<!-- extra js end -->
<?php $this->view('includes/footer_end.php') ?>

