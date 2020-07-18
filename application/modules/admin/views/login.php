<?php $this->view('includes/header_account.php'); ?>

    <div class="account-bg">
        <div class="card-box m-b-0">
            <div class="text-xs-center m-t-20">
                <a href="" class="logo">
                    <span><?= title ?></span>
                </a>
            </div>
            <div class="m-t-30 m-b-20">
                <div class="col-xs-12 text-xs-center">
                    <h6 class="text-muted text-uppercase m-b-0 m-t-0">Sign In</h6>
                </div>
                <form method="post" class="form-horizontal m-t-20">

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" name="username" type="text" required="" placeholder="Username">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" name="password" type="password" required=""
                                   placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group center-block text-center   ">
                        <center>
                            <strong class="text-danger "> <?= @$error ?> </strong>
                        </center>
                    </div>

                    <div class="form-group text-center m-t-30">
                        <div class="col-xs-12">
                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Log In
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- end card-box-->


    </div>
    <!-- end wrapper page -->


<?php $this->view('includes/footer_account.php'); ?>