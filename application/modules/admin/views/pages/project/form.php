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
                        <h4 class="page-title">Project</h4>
                        <ol class="breadcrumb p-0">
                            <li><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                            <li><a href="<?= base_url('admin/project') ?>"> Project</a></li>
                            <li class="active"> Project <?= empty($obj->ProductId) ? "Create" : "Edit" ?> </li>
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
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">General Information</h4>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-lg-6" style="display: none;">


                                            <div class="form-group">
                                                <label for="name">Brand Name</label>


                                                <select class="form-control" name="form[BrandId]">.
                                                    <option value=""> Select Brand</option>
                                                    <?php foreach ($brands as $brand): ?>
                                                        <option
                                                                value="<?= $brand->BrandId ?>" <?= set_value('form[BrandId]', $obj->BrandId) == $brand->BrandId ? "selected" : "" ?> > <?= $brand->BrandTitle ?> </option>
                                                    <?php endforeach; ?>
                                                </select>

                                                <?= form_error('form[BrandId]') ?>

                                            </div>

                                        </div>


                                        <div class="col-lg-6" style="display: none;">
                                            <div class="form-group">
                                                <label for="name">Category Name</label>
                                                <select class="form-control" name="form[CategoryId]">.
                                                    <option value=""> Select Category</option>
                                                    <?php foreach ($categories as $category): ?>
                                                        <option
                                                                value="<?= $category->CategoryId ?>" <?= set_value('form[CategoryId]', $obj->CategoryId) == $category->CategoryId ? "selected" : "" ?> > <?= $category->CategoryTitle ?> </option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <?= form_error('form[CategoryId]') ?>
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="name">Project Title </label>
                                                <input type="text" id="ModelNumber" name="form[ProjectTitle]"
                                                       value="<?= set_value('form[ProjectTitle]', $obj->ProjectTitle) ?>"
                                                       class="form-control">
                                                <?= form_error('form[ProjectTitle]') ?>
                                            </div>

                                        </div>
                                        <div class="col-lg-6" style="display: none;">
                                            <div class="form-group">
                                                <label for="name">Serial Number</label>
                                                <input type="text" id="SerialNumber" name="form[SerialNumber]"
                                                       value="<?= set_value('form[SerialNumber]', $obj->SerialNumber) ?>"
                                                       class="form-control">
                                                <?= form_error('form[SerialNumber]') ?>

                                            </div>
                                        </div>


                                        <div class="col-lg-6" style="display: none;">
                                            <div class="form-group">
                                                <label for="name">Price Range (To) </label>
                                                <input type="text" id="PriceRangeTo" name="form[PriceRangeTo]"
                                                       value="<?= set_value('form[PriceRangeTo]', $obj->PriceRangeTo) ?>"
                                                       class="form-control">
                                                <?= form_error('form[PriceRangeTo]') ?>
                                            </div>

                                        </div>
                                        <div class="col-lg-6" style="display: none;">
                                            <div class="form-group">
                                                <label for="name">Price Range (From)</label>
                                                <input type="text" id="PriceRangeFrom" name="form[PriceRangeFrom]"
                                                       value="<?= set_value('form[PriceRangeFrom]', $obj->PriceRangeFrom) ?>"
                                                       class="form-control">
                                                <?= form_error('form[PriceRangeFrom]') ?>

                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="name">Project Status</label>
                                                <select class="form-control" name="form[Color]">.
                                                    <option value=""> Select Project Status</option>
                                                    <?php
                                                    if ($obj->Color == 1) { ?>
                                                        <option value="1" selected>Ongoing Project</option>
                                                        <option value="2"> Completed Project</option>
                                                        <?php
                                                    } elseif ($obj->Color == 2) { ?>
                                                        <option value="1"> Ongoing Project</option>
                                                        <option value="2" selected> Completed Project</option>
                                                        <?php
                                                    } else { ?>
                                                        <option value="1"> Ongoing Project</option>
                                                        <option value="2"> Completed Project</option>

                                                        <?php
                                                    }
                                                    ?>

                                                </select>
                                                <?= form_error('form[Color]') ?>
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="description">Short Description</label>
                                                    <textarea rows="5" name="form[ShortDescription]"
                                                              class="form-control"><?= set_value('form[ShortDescription]', $obj->ShortDescription) ?></textarea>
                                                    <?= form_error('form[ShortDescription]') ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label> Default Image
                                                    <small> image size ( 800px * 800px )</small>
                                                </label>
                                            </div>
                                            <div class="fileinput-button btn btn-success sepH_b">
                                                <i class="fa fa-plus"></i>
                                                <span> Add file </span>
                                                <input class="image_upload" data-for="#default_img_grid_upload"
                                                       data-name="Image" type="file" name="userfile">
                                            </div>
                                            <input type="hidden" name="form[Image]" value="">
                                            <ul class="img-grid2 img-grid  clearfix" id="default_img_grid_upload">
                                                <?php if ($obj->Image): ?>
                                                    <li>
                                                        <div class="upload_img_single thumbnail">
                                                            <img src="<?= UPT . $obj->Image ?>"
                                                                 class="thumbnail img-responsive" alt=""/>

                                                            <div class="upload_img_actions">
                                                                <span class=" fa fa-times pull-right btn  btn-danger  "
                                                                      onclick="image_upload.remove($(this))"> </span>
                                                                <a style="color: white"
                                                                   href="<?= UP . $obj->Image ?>"
                                                                   class="fa fa-search-plus pull-right btn  btn-success">
                                                                </a>
                                                                <input
                                                                        type="hidden" name="form[Image]"
                                                                        value="<?= $obj->Image ?>"></div>
                                                        </div>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                            <?= form_error('form[Image]') ?>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="description">Video Embed Code </label>
                                                <textarea rows="5" name="form[VideoEmbedCode]"
                                                          class="form-control"><?= $obj->VideoEmbedCode ?></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea id="description" rows="5" name="form[Description]"
                                                          class="form-control"><?= set_value('form[Description]', $obj->Description) ?></textarea>
                                                <?= form_error('form[Description]') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">More Images
                                <small> image size ( 800px * 800px )</small>
                            </h4>

                            <div class="row ">
                                <div class="fileinput-button btn btn-success sepH_b">
                                    <i class="fa fa-plus"></i>
                                    <span>Add files...</span>
                                    <input id="image_upload" type="file" name="userfile" multiple>
                                </div>

                                <ul class="img-grid clearfix" id="img_grid_upload">
                                    <?php $MoreImage = (array)json_decode($obj->MoreImage); ?>
                                    <?php foreach ($MoreImage as $img): ?>
                                        <li class="upload_img_single">
                                            <div class=" thumbnail">
                                                <img src="<?= UPT . $img ?>" class="thumbnail img-responsive" alt=""/>

                                                <div class="upload_img_actions">
                                                     <span class=" fa fa-times pull-right btn  btn-danger  "
                                                           onclick="image_upload.remove($(this))"> </span>
                                                    <a style="color: white"
                                                       href="<?= UP . $img ?>"
                                                       class="fa fa-search-plus pull-right btn  btn-success">
                                                    </a>
                                                    <input type="hidden" name="image[]" value="<?= $img ?>"></div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
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

<script>

    $(function () {
        CKEDITOR.replace('description');
        image_upload.init();
        image_upload.default_image();
    });

    image_upload = {
        init: function () {
            if ($("#image_upload").length) {
                var e = $("<button/>").addClass("btn btn-success btn-block").prop("disabled", !0).text("Processing...").on("click", function (e) {
                    var a = $(this), i = a.data();
                    a.off("click").text("Abort").on("click", function () {
                        a.remove(), i.abort()
                    }), i.submit().always(function () {
                        a.remove()
                    }), e.preventDefault()
                });
                $("#image_upload").fileupload({
                    url: URL.base + CONTROLLER + "/do_upload/",
                    dataType: "json",
                    autoUpload: !1,
                    acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
                    maxFileSize: 5e6,
                    disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),
                    previewMaxWidth: 220,
                    previewMaxHeight: 220,
                    previewCrop: !0
                }).on("fileuploadsubmit", function (e, a) {
                    var i = $("#image_upload");
                    return a.formData = {files: i.data(a)}, a.formData.files ? void 0 : (i.focus(), !1)
                }).on("fileuploadadd", function (a, i) {
                    i.context = $("<li/>").appendTo("#img_grid_upload"), $("#upload_progress").length || $("body").append('<div id="upload_progress"><i class="fa fa-spinner fa-spin"></i></div>'), $.each(i.files, function (a, o) {
                        var t = $('<div class="upload_img_actions">').wrapInner('<span class=" fa fa-times pull-right btn  btn-danger  " onclick="image_upload.remove($(this))" > </span>  '),
                            n = $('<div class="upload_img_single thumbnail" />').append(t);
                        a || t.append(e.clone(!0).data(i)), n.appendTo(i.context)
                    })
                }).on("fileuploadprocessalways", function (e, a) {
                    var i = a.index, o = a.files[i], t = $(a.context.children()[i]);
                    o.preview && t.prepend(o.preview), o.error && t.find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text(o.error)), i + 1 === a.files.length && a.context.find("button").text("Upload").prop("disabled", !!a.files.error)
                }).on("fileuploadprogressall", function (e, a) {
                    $("#upload_progress").addClass("show_progress");
                    var i = parseInt(a.loaded / a.total * 100, 10);
                    $("#upload_progress div").width(i + "%").html(i + "%");
                    100 == i && setTimeout("$('#upload_progress').removeClass('show_progress')", 500)
                }).on("fileuploaddone", function (e, a) {
                    $.each(a.result.files, function (e, i) {
                        i.url ? $(a.context.children()[e]).find(".upload_img_actions").append('<div class="alert alert-success">  Upload success <input type="hidden" name="image[]" value="' + i.name + '" > </div>') : i.error && $(a.context.children()[e]).find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text(i.error))
                    })
                }).on("fileuploadfail", function (e, a) {
                    $("#upload_progress").addClass("show_progress"), $.each(a.files, function (e, i) {
                        $(a.context.children()[e]).find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text("File upload failed."))
                    }), setTimeout("$('#upload_progress').removeClass('show_progress')", 500)
                }).prop("disabled", !$.support.fileInput).parent().addClass($.support.fileInput ? void 0 : "disabled")
            }
        }, remove: function (e) {
            confirm("Do you want to remove this file ") && e.closest("li").remove()
        },
        default_image: function () {
            var e = $("<button/>").addClass("btn btn-success btn-block").prop("disabled", !0).text("Processing...").on("click", function (e) {
                var a = $(this), i = a.data();
                a.off("click").text("Abort").on("click", function () {
                    a.remove(), i.abort()
                }), i.submit().always(function () {
                    a.remove()
                }), e.preventDefault()
            }), a = null;
            $(".image_upload").click(function () {
                a = $(this)
            }).fileupload({
                url: URL.base + CONTROLLER + "/do_upload/",
                dataType: "json",
                autoUpload: !1,
                acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
                maxFileSize: 5e6,
                disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),
                previewMaxWidth: 220,
                previewMaxHeight: 220,
                previewCrop: !0
            }).on("fileuploadsubmit", function (e, a) {
                var i = $(".image_upload");
                return a.formData = {files: i.data(a)}, a.formData.files ? void 0 : (i.focus(), !1)
            }).on("fileuploadadd", function (i, o) {
                $(a.data("for")).html(" "), o.context = $("<li/>").appendTo(a.data("for")), $("#upload_progress").length || $("body").append('<div id="upload_progress"><i class="fa fa-spinner fa-spin"></i></div>'), $.each(o.files, function (a, i) {
                    var t = $('<div class="upload_img_actions">').wrapInner('<span class=" fa fa-times pull-right btn  btn-danger  " onclick="image_upload.remove($(this))" > </span> '),
                        n = $('<div class="upload_img_single thumbnail" />').append(t);
                    a || t.append(e.clone(!0).data(o)), n.appendTo(o.context)
                })
            }).on("fileuploadprocessalways", function (e, a) {
                var i = a.index, o = a.files[i], t = $(a.context.children()[i]);
                o.preview && t.prepend(o.preview), o.error && t.find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text(o.error)), i + 1 === a.files.length && a.context.find("button").text("Upload").prop("disabled", !!a.files.error)
            }).on("fileuploadprogressall", function (e, a) {
                $("#upload_progress").addClass("show_progress");
                var i = parseInt(a.loaded / a.total * 100, 10);
                $("#upload_progress div").width(i + "%").html(i + "%");
                100 == i && setTimeout("$('#upload_progress').removeClass('show_progress')", 500)
            }).on("fileuploaddone", function (e, i) {
                $.each(i.result.files, function (e, o) {
                    o.url ? $(i.context.children()[e]).find(".upload_img_actions").append('<div class="alert alert-success">Upload success <br/><input type="hidden" name="form[' + a.data("name") + ']" value="' + o.name + '" > </div>') : o.error && $(i.context.children()[e]).find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text(o.error))
                })
            }).on("fileuploadfail", function (e, a) {
                $("#upload_progress").addClass("show_progress"), $.each(a.files, function (e, i) {
                    $(a.context.children()[e]).find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text("File upload failed."))
                }), setTimeout("$('#upload_progress').removeClass('show_progress')", 500)
            }).prop("disabled", !$.support.fileInput).parent().addClass($.support.fileInput ? void 0 : "disabled")
        }
    }
</script>

<!-- extra js end -->
<?php $this->view('includes/footer_end.php') ?>
