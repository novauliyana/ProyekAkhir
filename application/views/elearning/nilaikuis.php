<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">NILAI KUIS</h4>
                        <div class="table-responsive pt-3">
                            <form class="forms-sample" method="POST" action="<?= base_url('elearningguru/updatenilaitugas') ?>">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>

                                            <th>No</th>
                                            <th>Judul Tugas</th>
                                            <th>Deadline</th>
                                            <th>Pengumpulan</th>
                                            <th>Waktu</th>
                                            <th>Nilai</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <?php $no = 1;
                                    foreach ($nkuis as $sia) : ?>
                                        <tbody>
                                            <tr>
                                                <td align="center" width="50"><?= $no ?></td>
                                                <td width="150"><?= $sia['judul_kuis'] ?></td>
                                                <td width="180"><?= $sia['deadline'] ?></td>
                                                <td width="180"><?= $sia['nama_file'] ?></td>
                                                <td width="150"><?= $sia['tanggal'] ?></td>
                                                <td align="center" width="80"><?= $sia['nilai'] ?></td>
                                                <td>
                                                    <?php
                                                    if ($sia['nilai'] > 50) {
                                                    ?>
                                                        <label class="badge badge-success"> Lulus </label>
                                                    <?php
                                                    } else {
                                                    ?>

                                                        <label class="badge badge-danger"> Tidak Lulus </label>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php $no++;
                                    endforeach; ?>
                                </table>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>