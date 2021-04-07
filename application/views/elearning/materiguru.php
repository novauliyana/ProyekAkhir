<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table>

                            <td width="50"><i class="mdi mdi-book-open-page-variant  mr-3 icon-lg text-info"></i></td>
                            <td width="100" valign="center">
                                <b>MATERI DAN VIDEO</b>
                            </td>
                            <td align="right">
                                <a href="<?= base_url('elearningguru/addFolder/') . $this->uri->segment('3') ?>"> <button type="button" class="btn btn-success btn-sm">Tambah Folder </button></a> </td>







                            <td width="100" valign="center">

                                <!-- </td>
                            <td align="right">
                                <a href="<?= base_url('elearningguru/addmateri/') . $this->uri->segment('3') ?>"> <button type="button" class="btn btn-success btn-sm">Tambah </button></a> </td>
                            <td align="right"><a href="<?= base_url('elearningguru/addvideo/') . $this->uri->segment('3') ?>">
                                    <button type="button" class="btn btn-success btn-sm">
                                        Tambah
                                    </button></a>
                            </td> -->
                                <tr>
                                    <td></td>
                                    <td>
                                        <?php foreach ($jumlahmateri as $jm) : ?>
                                            <small> <b> <?= $jm->jmlhmateri; ?> Materi</b></small>
                                        <?php endforeach; ?></p>
                                    </td>
                                    <td>
                                        <?php foreach ($jumlahvideo as $jm) : ?>

                                            <small><b> <?= $jm->jmlhvideo; ?> Video</b></small>
                                        <?php endforeach; ?></p>
                                    </td>
                                </tr>
                        </table>
                        <hr>
                        <table>
                            <?php foreach ($materi as $materi) : ?>
                                <tr height="50">
                                    <td width="60"><i class="mdi mdi-folder-multiple mr-3 icon-md text-primary"></i></td>
                                    <td width="550"><?= $materi['judul_materi'] ?>
                                        <br><small class="text-danger " style="font-size: 10px"><?= $materi['tanggal'] ?></small>
                                    </td>

                                    <td><?php echo anchor('elearningguru/edit_materi/' . $materi['id_materi'] . '/' . $materi['id_mapel'], '<div class="btn btn-primary btn-sm"> Edit </i></div>') ?></td>
                                    <td><?php echo anchor('elearningguru/hapus_materi/' . $materi['id_materi'] . '/' . $materi['id_mapel'], '<div class="btn btn-danger btn-sm">Hapus</div>') ?></td>
                                </tr>
                                <tr height="50">
                                    <td width="60"><i class="mdi mdi-play-circle mr-3 icon-md text-danger"></i></td>
                                    <td width="550"><?= $materi['judul_video'] ?>
                                        <br><small class="text-danger " style="font-size: 10px"><?= $materi['tanggal'] ?></small>
                                    </td>
                                    <td><?php echo anchor('elearningguru/edit_video/' . $materi['id_video'] . '/' . $materi['id_mapel'], '<div class="btn btn-primary btn-sm">Edit</div>') ?></td>
                                    <td><?php echo anchor('elearningguru/hapus_video/' . $materi['id_video'] . '/' . $materi['id_mapel'], '<div class="btn btn-danger btn-sm">Hapus</div>') ?></td>
                                </tr>
                            <?php endforeach;  ?>
                        </table>
                        <!-- <table>
                            <?php foreach ($materi as $sia) : ?>
                                <tr height="50">
                                    <td width="60"><i class="mdi mdi-play-circle mr-3 icon-md text-danger"></i></td>
                                    <td width="550"><?= $sia['judul_video'] ?>
                                        <br><small class="text-danger " style="font-size: 10px"><?= $sia['tanggal'] ?></small>
                                    </td>
                                    <td><?php echo anchor('elearningguru/edit_video/' . $sia['id_video'] . '/' . $sia['id_mapel'], '<div class="btn btn-primary btn-sm">Edit</div>') ?></td>
                                    <td><?php echo anchor('elearningguru/hapus_video/' . $sia['id_video'] . '/' . $sia['id_mapel'], '<div class="btn btn-danger btn-sm">Hapus</div>') ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </table> -->
                    </div>
                </div>
            </div>
        </div>
    </div>