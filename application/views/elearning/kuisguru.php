<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td width="50"><i class="mdi mdi-pencil mr-3 icon-md text-warning"></i></td>
                                <td width="100" valign="center">
                                    <?php foreach ($jumlahkuis as $jm) : ?>
                                        <p><b>KUIS</b>
                                            <br>
                                            <small><?= $jm->jmlhkuis; ?> Kuis</small>
                                        <?php endforeach; ?></p>
                                </td>
                                <td align="right"><a href="<?= base_url('elearningguru/addkuis/') . $this->uri->segment('3') ?>">
                                        <button type="button" class="btn btn-success btn-sm">
                                            Tambah
                                        </button></a>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <table>
                            <?php foreach ($kuis as $sia) : ?>
                                <tr height="50">
                                    <td width="60"><i class="mdi mdi-pencil mr-3 icon-md text-warning"></i></td>
                                    <td width="500"><?= $sia['judul_kuis'] ?>
                                        <br><small class="text-danger " style="font-size: 10px"><?= $sia['tanggal'] ?></small>
                                    </td>
                                    <td><?php echo anchor('elearningguru/kumpulkuis/' . $sia['id_kuis'] . '/' . $sia['id_mapel'], '<div class="btn btn-success btn-sm">Lihat</div>') ?></td>
                                    <td><?php echo anchor('elearningguru/edit_kuis/' . $sia['id_kuis'] . '/' . $sia['id_mapel'], '<div class="btn btn-primary btn-sm">Edit</div>') ?></td>
                                    <td><?php echo anchor('elearningguru/hapus_kuis/' . $sia['id_kuis'] . '/' . $sia['id_mapel'], '<div class="btn btn-danger btn-sm">Hapus</div>') ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>