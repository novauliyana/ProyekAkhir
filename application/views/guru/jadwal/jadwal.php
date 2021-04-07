<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <table>
                            <tr>
                                <td width="500" valign="center">
                                    <h5>Jadwal Pengajar</h5>
                                </td>
                                <!-- <td width="500" align="right"><a href="<?= base_url('kelas/addkuis') ?>">
                                        <div class="btn btn-primary btn-sm"> Unduh Jadwal </i></div>
                                    </a>
                                </td> -->
                            </tr>
                        </table>
                        <hr>

                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="table-primary">
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
                                            Kelas
                                        </th>
                                        <th>
                                            Mata Pelajaran
                                        </th>
                                    </tr>
                                </thead>
                                <?php $no = 1;
                                foreach ($jadwal as $jdwl) : ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?= $no ?>
                                            </td>
                                            <td>
                                                <?= $jdwl['hari'] ?>
                                            </td>
                                            <td>
                                                <p><?= $jdwl['jam_mulai'] ?> - <?= $jdwl['jam_akhir'] ?>
                                            </td>
                                            <td>
                                                <?= $jdwl['nama_kelas'] ?>
                                            </td>
                                            <td>
                                                <?= $jdwl['nama_mapel'] ?>
                                            </td>

                                        </tr>
                                    </tbody>
                                <?php $no++;
                                endforeach;  ?>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>