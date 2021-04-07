<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td width="50"><i class="mdi mdi-pencil mr-3 icon-md text-warning"></i></i></td>
                                <td valign="center">
                                    <?php foreach ($jumlahkuis as $jm) : ?>
                                        <p><b>KUIS</b>
                                            <br>
                                            <small><?= $jm->jmlhkuis; ?> Kuis</s>
                                            <?php endforeach; ?></p>
                                <td align="right">
                                    <a href="<?= base_url('elearningsiswa/nilaikuis/') . $this->uri->segment('3') ?>"> <button type="button" class="btn btn-success btn-sm">Lihat Nilai </button></a> </td>
                                </td>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <table>
                            <?php foreach ($kuis as $sia) : ?>
                                <tr height="50">
                                    <td width="60"><i class="mdi mdi-pencil mr-3 icon-md text-warning"></i></td>
                                    <td width="500"><?= $sia['judul_kuis'] ?>
                                        <br><small class="text-danger" style="font-size: 10px"><?= $sia['tanggal'] ?></small>
                                    </td>
                                    <td align="right" width="140">
                                        <a href="<?= base_url() . $sia['file']; ?>">
                                            <button type="button" class="btn btn-success btn-sm">
                                                Download
                                            </button></a>
                                    </td>
                                    <td width='140'><?php echo anchor('elearningsiswa/kumpulkuis/' . $sia['id_kuis'], '<div class="btn btn-success btn-sm">Kumpul Kuis</div>') ?></td>
                                </tr>
                            <?php endforeach;  ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>