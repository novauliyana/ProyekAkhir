<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <?php foreach ($siswa as $tmp) : ?>
                    <div class="card-body">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Presensi</h2>
                            <p class="card-description">
                                Berikut adalah jadwal, <?= $tmp->nama ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="card-body">

                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="table-info">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Hari
                                    </th>
                                    <th>
                                        Waktu
                                    </th>
                                    <th>
                                        Pelajaran
                                    </th>
                                    <th>
                                        Foto
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($mapel as $tmp) : ?>
                                    <tr>
                                        <td>
                                            <?= $no; ?>
                                        </td>
                                        <td>
                                            <?php $date = $tmp['tanggal_presensi'];
                                            $date   =    date('l, d F Y', strtotime($date));
                                            echo $date;
                                            ?>
                                        </td>
                                        <td>
                                            <?php $date = $tmp['tanggal_presensi'];
                                            $date   =    date('h:i:s a', strtotime($date));
                                            echo $date;
                                            ?>
                                        </td>
                                        <td>
                                            <?= $tmp['nama_mapel'] ?>
                                        </td>
                                        <td class="py-1">
                                            <img src="<?= base_url('assets/templates/'); ?>images/faces/face2.jpg" alt="image" />
                                        </td>
                                    </tr>
                                <?php $no++;
                                endforeach; ?>

                            </tbody>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>