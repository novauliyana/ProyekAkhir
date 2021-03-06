<?php foreach ($siswa as $tmp) : ?>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
                <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                    <a class="navbar-brand brand-logo" href="<?= base_url('Home/index') ?>">Prestasi Prima</a>
                    <a class="navbar-brand brand-logo-mini" href="<?= base_url('Home/index') ?>"><img src="<?= base_url('assets/templates/'); ?>images/logo-mini.svg" alt="logo" /></a>
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-sort-variant"></span>
                    </button>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

                <ul class="navbar-nav navbar-nav-right">

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="<?= base_url() . $tmp->image ?>" class="img-tumbnail"></<img>
                            <span class="nav-profile-name"><?= $tmp->nama; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="<?= base_url('Home/profil_siswa') ?>">
                                <i class="mdi mdi-settings text-primary"></i>
                                Profil Siswa
                            </a>
                            <a class="dropdown-item" href="<?= base_url('Auth/logout') ?>">
                                <i class="mdi mdi-logout text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <!-- page-body-wrapper ends -->

        <!-- container-scroller -->

    <?php endforeach; ?>