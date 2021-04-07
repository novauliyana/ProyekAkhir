<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <table>
                        <tr>
                            <td width="50"><i class="mdi mdi-book-open-page-variant  mr-3 icon-lg text-info"></i></td>
                            <td valign="center">
                                <p><b>MATERI</b>
                                    <br>
                                    <small> Materi</small>
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <table>
                        <?php foreach ($materi as $sia) : ?>
                            <tr height="50">
                                <td width="60"><i class="mdi mdi-folder-multiple mr-3 icon-md text-info"></i></td>
                                <td width="500"><?= $sia['judul_materi'] ?>
                                    <br><small class="text-danger " style="font-size: 10px"></small>
                                </td>
                                <?php echo form_open_multipart('kelas/do_upload'); ?>
                                <td align="right" width="140">


                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#materi">
                                        Lihat
                                    </button>
                                    <div id="materi" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- konten modal-->
                                            <div class="modal-content">
                                                <!-- heading modal -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Materi</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <!-- body modal -->
                                                <div class="modal-body">
                                                    <?= $sia['berkas'] ?>
                                                </div>
                                                <!-- footer modal -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                </td>
                                <td align="right" width="140">
                                    <a href="<?= base_url() . $sia['berkas'] ?>">
                                        <button type="button" class="btn btn-info btn-sm">
                                            Unduh
                                        </button></a>
                                </td>
                            </tr>
                        <?php endforeach;  ?>

                    </table>
                </div>

            </div>