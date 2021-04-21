<div class="main-panel">
    <div class="content-wrapper">

        <?php foreach ($mapel as $sia) : ?>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td width="300" valign="center">
                                        <h5><b><?= $sia['nama_kelas'] ?> | <?= $sia['nama_mapel'] ?> (<?= $sia['kode_kelas'] ?>) </b></h5>
                                    </td>
                                    <td align="right">
                                    <td><?php echo anchor('Home/inPresensi/' . $sia['id_mapel'], '<div class="btn btn-primary btn-sm"> Presensi </i></div>') ?></td>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <table>
                                <tr height="50">
                                    <td width="50"><i class="mdi mdi-book mr-3 icon-md text-primary"></i></td>
                                    <td width="150">Materi </td>
                                    <td>
                                        <a href="<?= base_url('Home/materi') ?>">
                                    <td align="left" width="200"><?php echo anchor('Home/materi/' . $sia['id_mapel'], '<div class="btn btn-primary btn-sm">Buka</div>') ?></td>
                                    </a>
                                    </td>

                                    <td width="100"></td>
                                    <td width="50"><i class="mdi mdi-file mr-3 icon-md text-primary"></i></td>
                                    <td width="150">Kuis</td>
                                    <td>
                                        <a href="<?= base_url('Home/kuis') ?>">
                                    <td align="left" width="200"><?php echo anchor('Home/kuis/' . $sia['id_mapel'], '<div class="btn btn-primary btn-sm">Buka</div>') ?></td>
                                    </a>
                                    </td>
                                </tr>
                                <tr height="50">
                                    <td width="50"><i class="mdi mdi-file-document mr-3 icon-md text-primary"></td>
                                    <td width="150">Tugas</td>
                                    <td>
                                        <a href="<?= base_url('Home/tugas') ?>">
                                    <td align="left" width="200"><?php echo anchor('Home/tugas/' . $sia['id_mapel'], '<div class="btn btn-primary btn-sm">Buka</div>') ?></td>
                                    </a>
                                    </td>
                                    <td width="100"></td>
                                    <td width="50"><i class="mdi mdi-file-check mr-3 icon-md text-primary"></td>
                                    <td width="150">Ulangan</td>
                                    <td>
                                        <a href="<?= base_url('Home/ulangan') ?>">
                                    <td align="left" width="200"><?php echo anchor('Home/ulangan/' . $sia['id_mapel'], '<div class="btn btn-primary btn-sm">Buka</div>') ?></td>
                                    </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;  ?>
    </div>