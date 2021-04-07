<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td width="50"><i class="mdi  mdi-file-document-box mr-3 icon-md text-info"></td>
                                <td width="100" valign="center">
                                    <?php foreach ($jumlahtugas as $jm) : ?>
                                        <p><b>TUGAS</b>
                                            <br>
                                            <small><?= $jm->jmlhtugas; ?> Tugas</small>
                                        <?php endforeach; ?></p>
                                </td>
                                <td align="right"><a href="<?= base_url('elearningguru/addtugas/') . $this->uri->segment('3') ?>">
                                        <button type="button" class="btn btn-success btn-sm">
                                            Tambah
                                        </button></a>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <table>
                            <?php foreach ($tugas as $sia) : ?>
                                <tr height="50">
                                    <td width="60"><i class="mdi mdi-file-document-box mr-3 icon-md text-info"></i></td>
                                    <td width="500"><?= $sia['judul_tugas'] ?>
                                        <br><small class="text-danger " style="font-size: 10px"><?= $sia['tanggal'] ?></small>

                                    <td><?php echo anchor('elearningguru/kumpultugas/' . $sia['id_tugas'] . '/' . $sia['id_mapel'], '<div class="btn btn-success btn-sm"> Lihat  </i></div>') ?></td>
                                    <td><?php echo anchor('elearningguru/edit_tugas/' . $sia['id_tugas'] . '/' . $sia['id_mapel'], '<div class="btn btn-primary btn-sm"> Edit </i></div>') ?></td>
                                    <td><?php echo anchor('elearningguru/hapus_tugas/' . $sia['id_tugas'] . '/' . $sia['id_mapel'], '<div class="btn btn-danger btn-sm">Hapus</div>') ?></td>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>