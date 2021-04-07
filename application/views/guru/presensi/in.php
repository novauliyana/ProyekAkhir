<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h5>Matematika | X IPA 1</h5>
                        <hr>
                        <!-- <table>
                            <tr>
                                <td width="500" valign="center">
                                    <p>Presensi Keseluruhan</p>
                                </td>
                                <td width="500" align="right"><a href="<?= base_url('kelas/addkuis') ?>">
                                        <div class="btn btn-primary btn-sm"> Unduh Presensi </i></div>
                                    </a>
                                </td>
                            </tr>
                        </table> -->
                        <table>
                            <?php foreach ($presensi as $sia) : ?>
                                <tr>
                                    <td width="1000">
                                        <p><?php $date = $sia['tanggal_presensi'];
                                            $date   =    date('d F Y', strtotime($date));
                                            echo $date;
                                            ?></p>
                                    </td>
                                    <td align="right"> <a class="text-black" href="<?= base_url('guru/lihat_presensi/' . $sia['id_presensi']) ?>">
                                            <button type="button" class="btn btn-inverse-primary btn-sm">
                                                <i class="mdi mdi-eye"></i>
                                            </button>
                                    </td>
                                    <td align="right"> <a target="_blank" href="<?= base_url('unduh.php') ?>">
                                            <button type="button" class="btn btn-inverse-success btn-sm">
                                                <i class="mdi mdi-download"></i>
                                            </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>