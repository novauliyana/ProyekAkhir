<?php foreach ($user as $tmp) : ?>
    <div class="container-scroller">
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
                <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                    <a class="navbar-brand brand-logo" href="<?= base_url('elearningsiswa') ?>">SMA X BANDUNG</a>
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-sort-variant"></span>
                    </button>
                </div>
            </div>

            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav mr-lg-4 w-100">
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="<?= base_url() . $tmp->image; ?>" class="img-circle">
                            <span class="nav-profile-name"><?= $tmp->username ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="<?= base_url('elearningsiswa/index'); ?>">
                                <i class="mdi mdi-account text-primary"></i>
                                Profile
                            </a>
                            <a class="dropdown-item " href="<?= base_url('auth/logout'); ?>">
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

        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('elearningsiswa/index') ?>">
                            <i class="mdi mdi-account menu-icon"></i>
                            <span class="menu-title">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('elearningsiswa/notification') ?>">
                            <i class="mdi mdi-timetable menu-icon"></i>
                            <span class="menu-title">Aktivitas Terbaru</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('elearningsiswa/class') ?>">
                            <i class="mdi mdi-account-multiple menu-icon"></i>
                            <span class="menu-title">E-learning</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('siswa/berkas_siswa') ?>">
                            <i class="mdi mdi-file-document menu-icon"></i>
                            <span class="menu-title">Berkas siswa</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('siswa/pembayaran') ?>">
                            <i class="mdi mdi-cash-multiple menu-icon"></i>
                            <span class="menu-title">Pembayaran</span>
                        </a>
                    </li>
                </ul>
            </nav>
        <?php endforeach; ?>