<div class="main-panel">
    <div class="content-wrapper">
        <?= $this->session->flashdata('message'); ?>
        <div class="row">

            <div class="col-md-12 grid-margin stretch-card">

                <div class="card">
                    <div class="card-body">
                        <table>
                            <td width="100" valign="center">
                                <?php foreach ($jumlahmateri as $jm) : ?>
                                    <h4>Materi</h4>
                                    <small><?= $jm->jmlhmateri; ?> Materi</small>
                                <?php endforeach; ?></p>
                            </td>
                            <td align="right"><a href="<?= base_url('guru/addmateri/') . $this->uri->segment('3') ?>">
                                    <button type="button" class="btn btn-primary btn-sm">
                                        Tambah
                                    </button></a>
                            </td>
                            </tr>
                        </table>
                        <hr>
                        <table>
                            <?php foreach ($materi as $materi) : ?>
                                <tr height="50">
                                    <td width="60"><i class="mdi mdi-folder-multiple mr-3 icon-md text-primary"></i></td>
                                    <td width="1000"><?= $materi['judul_materi'] ?>
                                        <br><small class="text-success " style="font-size: 10px"><?= $materi['tanggal'] ?></small>
                                    </td>
                                    <td><?php echo anchor('guru/lihat_materi/' . $materi['id_materi'], '<div class="btn btn-inverse-primary btn-sm"><i class="mdi mdi-eye"></div>') ?></td>
                                    <td><?php echo anchor('guru/edit_materi/' . $materi['id_materi'] . '/' . $materi['id_mapel'], '<div class="btn btn-inverse-warning btn-sm"><i class="mdi mdi-pencil"></div>') ?></td>
                                    <td><?php echo anchor('guru/hapus_materi/' . $materi['id_materi'] . '/' . $materi['id_mapel'], '<div class="btn btn-inverse-danger btn-sm"><i class="mdi mdi-delete"></i></div>') ?></td>

                                </tr>
                            <?php endforeach;  ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>