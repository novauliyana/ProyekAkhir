<div class="main-panel">          
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Data Kelas</h2>
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
                            <a class="nav-link " href="<?php echo site_url('admin/detailkelas')?>">Siswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo site_url('admin/dkjadwal')?>">Jadwal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('admin/dkabsensi')?>">Absensi</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" role="tabpanel" >
                                <table id="recent-purchases-listing" class="table">
                                <thead>
                                    <tr class="text-center">
                                        <th>Jam</th>
                                        <th>Senin</th>
                                        <th>Selasa</th>
                                        <th>Rabu</th>
                                        <th>Kamis</th>
                                        <th>Jumat</th>
                                        <th>Sabtu</th>
                                    </tr>
                                </thead>
                                <!-- <tbody>
                                    <tr>
                                    <td>nisn</td>
                                        <td>nis</td>
                                        <td>nama</td>
                                        <td>L/p</td>
                                        <td>tanggal_lahir</td>
                                    </tr>
                                </tbody> -->
                                </table>
                            </div>
                        </div>
                     </div>
                    </div>
            </div>
        </div>
     </div>