<div class="main-panel">
    <div class="content-wrapper">
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td width="100" valign="center">
                                    <?php foreach ($jumlahtugas as $jm) : ?>
                                        <h4>Tugas</h4>
                                        <small><?= $jm->jmlhtugas; ?> Tugas</small>
                                    <?php endforeach; ?></p>
                                </td>
                                <td align="right"><a href="<?= base_url('guru/addtugas/') . $this->uri->segment('3') ?>">
                                        <button type="button" class="btn btn-primary btn-sm">
                                            Tambah
                                        </button></a>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <table>
                            <?php foreach ($tugas as $sia) : ?>
                                <tr height="50">
                                    <td width="60"><i class="mdi mdi-file-document mr-3 icon-md text-primary"></i></td>
                                    <td width="1000"><?= $sia['judul_tugas'] ?>
                                        <br><small class="text-success " style="font-size: 10px"><?= $sia['tanggal'] ?></small>

                                    <td><?php echo anchor('guru/lihat_tugas/' . $sia['id_tugas'], '<div class="btn btn-inverse-primary btn-sm"><i class="mdi mdi-eye"></div>') ?></td>
                                    <td><?php echo anchor('guru/edit_tugas/' . $sia['id_tugas'] . '/' . $sia['id_mapel'], '<div class="btn btn-inverse-warning btn-sm"><i class="mdi mdi-pencil"></div>') ?></td>
                                    <td><?php echo anchor('guru/hapus_tugas/' . $sia['id_tugas'] . '/' . $sia['id_mapel'], '<div class="btn btn-inverse-danger btn-sm"><i class="mdi mdi-delete"></i></div>') ?></td>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>