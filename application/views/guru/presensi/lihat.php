<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td width="1500" valign="center">
                                    <h5>23 December 2020</h5>
                                </td>
                                <!-- <td width="1000" align="right"><a target="_blank" href="<?= base_url('unduh.php') ?>">
                                        <div class="btn btn-primary btn-sm"> Unduh Presensi </i></div>
                                    </a>
                                </td> -->
                                <td align="left"> <a target="_blank" href="<?= base_url('unduh.php') ?>">
                                        <button type="button" class="btn btn-inverse-success btn-sm">
                                            <i class="mdi mdi-download"></i>
                                        </button>
                                </td>
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
                                            NIS
                                        </th>
                                        <th>
                                            Nama Lengkap
                                        </th>
                                        <th>
                                            Waktu
                                        </th>
                                        <th>
                                            Foto
                                        </th>
                                        <th>
                                            Keterangan
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($detailpresensi as $sia) : ?>
                                        <tr>
                                            <td>
                                                <?= $no ?>
                                            </td>
                                            <td>
                                                <?= $sia['nis'] ?>
                                            </td>
                                            <td>
                                                <?= $sia['nama'] ?>
                                            </td>
                                            <td>
                                                <?= $sia['waktu'] ?>
                                            </td>
                                            <td><img src="<?= base_url() . $sia['foto']; ?> " class="card-img"></td>
                                            <td>
                                                <?php if ($sia['keterangan'] = 1) {
                                                    echo "Hadir";
                                                } else if ($sia['keterangan'] = 2) {
                                                    echo "Tidak Hadir";
                                                } ?>
                                            </td>

                                        </tr>
                                    <?php $no++;
                                    endforeach;  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>