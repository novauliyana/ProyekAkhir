<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td width="50"><i class="mdi mdi-pen mr-3 icon-md text-success"></td>
                                <td width="100" valign="center">
                                    <?php foreach ($jumlahulangan as $jm) : ?>
                                        <p><b>ULANGAN</b>
                                            <br>
                                            <small><?= $jm->jmlhulangan; ?> Ulangan</small>
                                        <?php endforeach; ?></p>
                                </td>
                                <td align="right"><a href="<?= base_url('elearningguru/addulangan/') . $this->uri->segment('3') ?>">
                                        <button type="button" class="btn btn-success btn-sm">
                                            Tambah
                                        </button></a>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <table>
                            <?php foreach ($ulangan as $sia) : ?>
                                <tr height="50">
                                    <td width="60"><i class="mdi mdi-pen mr-3 icon-md text-success"></i></td>
                                    <td width="550"><?= $sia['judul_ulangan'] ?>
                                        <br><small class="text-danger " style="font-size: 10px"><?= $sia['tanggal'] ?></small>
                                    </td>
                                    <td><?php echo anchor('elearningguru/kumpululangan/' . $sia['id_ulangan'] . '/' . $sia['id_mapel'], '<div class="btn btn-success btn-sm">Lihat</div>') ?></td>
                                    <td><?php echo anchor('elearningguru/edit_ulangan/' . $sia['id_ulangan'] . '/' . $sia['id_mapel'], '<div class="btn btn-primary btn-sm">Edit</div>') ?></td>
                                    <td><?php echo anchor('elearningguru/hapus_ulangan/' . $sia['id_ulangan'] . '/' . $sia['id_mapel'], '<div class="btn btn-danger btn-sm">Hapus</div>') ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>