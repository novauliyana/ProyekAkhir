<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td width="50"><i class="mdi mdi-book-open-page-variant  mr-3 icon-lg text-info"></i></td>
                                <td valign="center">

                                    <?php foreach ($jumlahmateri as $jm) : ?>
                                        <p><b>MATERI</b>
                                            <br>
                                            <small> <?= $jm->jmlhmateri; ?> Materi</small>
                                        <?php endforeach; ?></p>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <table>
                            <?php foreach ($materi as $sia) : ?>
                                <tr height="50">
                                    <td width="60"><i class="mdi mdi-folder-multiple mr-3 icon-md text-primary"></i></td>
                                    <td width="500"><?= $sia['judul_materi'] ?>
                                        <br><small class="text-danger " style="font-size: 10px"><?= $sia['tanggal'] ?></small>
                                    </td>
                                    <td align="right" width="140">
                                        <a href="<?= base_url() . $sia['berkas'] ?>">
                                            <button type="button" class="btn btn-success btn-sm">
                                                Download
                                            </button></a>
                                    </td>
                                </tr>
                            <?php endforeach;  ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>