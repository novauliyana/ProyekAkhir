<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td width="50"><i class="mdi  mdi-file-document-box mr-3 icon-md text-info"></td>
                                <td valign="center" width="100">
                                    <?php foreach ($jumlahtugas as $jm) : ?>
                                        <p><b>TUGAS</b>
                                            <br>
                                            <small><?= $jm->jmlhtugas; ?> Tugas</small>
                                        <?php endforeach; ?>
                                        </p>
                                <td align="right">
                                    <a href="<?= base_url('elearningsiswa/nilaitugas/') . $this->uri->segment('3') ?>"> <button type="button" class="btn btn-success btn-sm">Lihat Nilai </button></a> </td>
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
                                    </td>
                                    <td align="right" width="140">
                                        <a href="<?= base_url($sia['file']); ?>">

                                            <button type="button" class="btn btn-success btn-sm">
                                                Download
                                            </button></a>
                                    </td>
                                    <td width='140'><?php echo anchor('elearningsiswa/kumpultugas/' . $sia['id_tugas'], '<div class="btn btn-success btn-sm">Kumpul Tugas</div>') ?></td>
                                </tr>
                            <?php endforeach;  ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>