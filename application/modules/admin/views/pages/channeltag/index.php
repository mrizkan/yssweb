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
                        <h4 class="page-title">Channel Tag</h4>
                        <ol class="breadcrumb p-0">
                            <li><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                            <li><a href="<?= base_url('admin/channeltag') ?>"> Channel Tag</a></li>
                            <li class="active"> Channel Tag List</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <a class="btn btn-info m_b_10 pull-left fa fa-plus "
                               href="<?= current_url() . "/create" ?>"> Create New </a>
                        </div>
                    </div>
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Channel Tag Details</h4>

                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12">
                                <table id="datatable" class=" table table-striped ">
                                    <thead>
                                    <tr>
                                        <th> #</th>
                                        <th> Channel Tag Name</th>
                                        <th> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($records as $k => $row): ?>
                                        <tr>
                                            <td> <?= $k + 1 ?>  </td>
                                            <td> <?= $row->ChannelTagTitle ?> </td>
                                            <td class="text-center">
                                                <a href="<?= current_url() . "/edit/$row->ChannelTagId" ?>"
                                                   class="btn btn-warning fa fa-edit "> Edit </a>
                                                <a href="<?= current_url() . "/delete/$row->ChannelTagId" ?>"
                                                   class="btn btn-danger fa fa-times delete-btn "> Delete </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- container -->
    </div>
    <!-- content -->
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

<!-- extra js end -->
<?php $this->view('includes/footer_end.php') ?>

