<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kelas</title>
    <link rel="stylesheet" href="<?= base_url('assets/templates/') ?>vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/templates/') ?>vendors/base/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url('assets/templates/') ?>vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url('assets/templates/') ?>css/style.css">
    <link rel="shortcut icon" href="<?= base_url('assets/templates/') ?>images/favicon.png" />
</head>

<div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo" href="<?= base_url('guru/index') ?>">Prestasi Prima</a>
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
                        <img src="<?= base_url() .
                                        $user['image']; ?>" class="img-circle">
                        <span class="nav-profile-name"><?= $user['nama'] ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="<?= base_url('guru/profil'); ?>">
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
                    <a class="nav-link" href="<?= base_url('guru/profil') ?>">
                        <i class="mdi mdi-account menu-icon"></i>
                        <span class="menu-title">Profil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('guru/index') ?>">
                        <i class="mdi mdi-account-multiple menu-icon"></i>
                        <span class="menu-title">Kelas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('guru/jadwal') ?>">
                        <i class="mdi mdi-calendar menu-icon"></i>
                        <span class="menu-title">Jadwal </span>
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('guru/presensi') ?>">
                        <i class="mdi mdi-checkbox-multiple-marked menu-icon"></i>
                        <span class="menu-title">Presensi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('guru/pesan') ?>">
                        <i class="mdi mdi-message-text menu-icon"></i>
                        <span class="menu-title">Pesan</span>
                    </a>
                </li>

            </ul>
        </nav>