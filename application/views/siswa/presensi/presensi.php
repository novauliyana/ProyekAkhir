<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="mr-md-3 mr-xl-5">
                        <h2>Presensi</h2>
                        <p class="card-description">
                            Berikut adalah rekap absensi, <?= $siswa['nama'] ?>
                        </p>
                    </div>
                </div>
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
                                foreach ($presensi as $presensi) : ?>
                                    <tr>
                                        <td>
                                            <?= $no; ?>
                                        </td>
                                        <td>
                                            <?php $date = $presensi['tanggal_presensi'];
                                            $date   =    date('l, d F Y', strtotime($date));
                                            echo $date;
                                            ?>
                                        </td>
                                        <td>
                                            <?php $date = $presensi['tanggal_presensi'];
                                            $date   =    date('h:i:s a', strtotime($date));
                                            echo $date;
                                            ?>
                                        </td>
                                        <td>
                                            <?= $presensi['nama_mapel'] ?>
                                        </td>
                                        <td class="py-1">
                                            <img src="<?= base_url() . $presensi['foto_absensi'] ?>" alt="image" class="card-img">
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