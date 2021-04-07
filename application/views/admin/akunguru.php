<div class="main-panel">          
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Data Akun</h2>
                        </div>
                        <div class="d-flex">
                        </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-end flex-wrap">
                            <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                                <i class="mdi mdi-download text-muted"></i>
                            </button>
                
                            <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                                <i class="mdi mdi-clock-outline text-muted"></i>
                            </button>
                            
                            <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                                <i class="mdi mdi-plus text-muted"></i>
                            </button>
                            <button class="btn btn-primary mt-2 mt-xl-0 mdi mdi-download">Download report</button>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('admin/akunsiswa')?>">Siswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo site_url('admin/akunguru')?>">Guru</a>
                        </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" role="tabpanel">
                                <table id="recent-purchases-listing" class="table">
                                <thead>
                                    <tr class="text-center">
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                    </tr>
                                </thead>
                                <tbody><?php foreach ($user as $akun) : ?>
                                    <tr>
                                        <td><?= $akun['nama_lengkap']?></td>
                                        <td><?= $akun['email']?></td>
                                        <td><?= $akun['username']?></td>
                                        <td><?= $akun['password']?></td>
                                        
                                    </tr>
                                </tbody>
                                <?php endforeach;?>
                                </table>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
     </div>