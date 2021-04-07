<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

            <?php foreach ($menu as $m) : ?>

                <div class="nav-link text-secondary">
                    <?= $m['nama']; ?>
                </div>

                <?php

                ?>

            <?php endforeach;  ?>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('') ?>">
                    <i class="mdi mdi-home menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <div class="nav-link text-secondary">
                User
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('') ?>">
                    <i class="mdi mdi-account menu-icon"></i>
                    <span class="menu-title">My Profile</span>
                </a>
            </li>
            <div class="nav-link text-secondary">

            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout') ?>">
                    <i class="mdi mdi-logout menu-icon"></i>
                    <span class="menu-title">Logout</span>
                </a>
            </li>



        </ul>
    </nav>