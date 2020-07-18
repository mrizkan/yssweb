<!-- App CSS -->
<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('assets/plugins/bootstrap-sweetalert/sweet-alert.css') ?>" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('assets/css/custom.css') ?>" rel="stylesheet" type="text/css"/>
<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<link href="<?= base_url() ?>assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css"/>
<link href="<?= base_url() ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>


<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<!-- Modernizr js -->
<script src="<?= base_url('assets/js/modernizr.min.js') ?>"></script>

<script type="text/javascript">
    var URL = {
            base: "<?=base_url()?>admin/",
            api: "<?=base_url()?>api/",
            current: "<?=current_url()?>"
        }
        ,
        CONTROLLER = '<?= $this->controller ?>'
</script>

</head>

<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <?php $this->view('includes/topbar.php'); ?>

    <?php $this->view('includes/leftbar.php'); ?>



