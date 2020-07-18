<!-- Top Bar Start -->
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="<?= base_url() ?>" class="logo" id="logo-tour">
            <span><?= title ?></span></a>
    </div>


    <nav class="navbar navbar-custom">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <button class="button-menu-mobile open-left waves-light waves-effect">
                    <i class="zmdi zmdi-menu"></i>
                </button>
            </li>
        </ul>

        <ul class="nav navbar-nav pull-right">

            <li class="nav-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user"
                   data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img src='<?= base_url('assets/images/user77.png') ?>'
                         style="border: 2px solid #000; background-color: #f5f5f5" width="50" alt="user"
                         class="img-circle">
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-arrow profile-dropdown "
                     aria-labelledby="Preview">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="text-overflow">
                            <small><?= $user->Name ?></small>
                        </h5>
                    </div>

                    <!-- item-->
                    <a href="<?= base_url('admin/setting') ?>" class="dropdown-item notify-item">
                        <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                    </a>


                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item logout">
                        <i class="zmdi zmdi-power"></i> <span>Logout</span>
                    </a>

                </div>
            </li>

        </ul>

    </nav>

</div>
<!-- Top Bar End -->