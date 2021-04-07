<div class="main-panel">
    <div class="content-wrapper">

        <?php foreach ($kelas as $sia) : ?>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td width="50"><i class="mdi mdi-book-open-page-variant  mr-3 icon-lg text-info"></i></td>
                                    <td width="300" valign="center">
                                        <p><b><?= $sia['nama_kelas'] ?> | <?= $sia['nama_mapel'] ?> (<?= $sia['kode'] ?>) </b></p>
                                    </td>
                                    <td align="right">
                                    <td><?php echo anchor('elearningguru/detailkelas/' . $sia['id_mapel'], '<div class="btn btn-primary btn-sm"> Detail Kelas </i></div>') ?></td>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <table>
                                <tr height="50">
                                    <td width="50"><i class="mdi mdi-folder-multiple mr-3 icon-md text-primary"></i></td>
                                    <td width="300">Materi Pembelajaran</td>
                                    <td align="right" width="200"><?php echo anchor('elearningguru/folder/' . $sia['id_mapel'], '<div class="btn btn-success btn-sm">Buka</div>') ?></td>

                                    <td width="50"></td>
                                    <td width="50"><i class="mdi mdi-pencil mr-3 icon-md text-secondary"></i></td>
                                    <td width="300">Kuis</td>
                                    <td align="right" width="200"><?php echo anchor('elearningguru/kuis/' . $sia['id_mapel'], '<div class="btn btn-success btn-sm">Buka</div>') ?></td>
                                </tr>
                                <tr height="50">

                                    <td width="50"><i class="mdi mdi-play-circle mr-3 icon-md text-danger"></i></td>
                                    <td width="300">Video Pembelajaran</td>
                                    <td align="right" width="200"><?php echo anchor('elearningguru/video/' . $sia['id_mapel'], '<div class="btn btn-success btn-sm">Buka</div>') ?></td>

                                    <td width="50"></td>
                                    <td width="50"><i class="mdi mdi-pen mr-3 icon-md text-success"></td>
                                    <td width="300">Ulangan</td>
                                    <td align="right" width="200"><?php echo anchor('elearningguru/ulangan/' . $sia['id_mapel'], '<div class="btn btn-success btn-sm">Buka</div>') ?></td>
                                </tr>
                                <tr height="50">
                                    <td width="50"><i class="mdi  mdi-file-document-box mr-3 icon-md text-info"></td>
                                    <td width="300">Tugas</td>
                                    <td align="right" width="200"><?php echo anchor('elearningguru/tugas/' . $sia['id_mapel'], '<div class="btn btn-success btn-sm">Buka</div>') ?></td>


                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;  ?>
    </div>