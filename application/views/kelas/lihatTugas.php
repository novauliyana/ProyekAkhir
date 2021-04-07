<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <table>
                        <tr>
                            <td width="50"><i class="mdi  mdi-file-document-box mr-3 icon-md text-info"></i></td>
                            <td valign="center">
                                <h3><b>Tugas</b></h3>
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <form class="forms-sample" method="POST" action="" enctype="multipart/form-data">
                        <blockquote class="blockquote">
                            <table width="100%">
                                <?php foreach ($materi as $sia) : ?>
                                    <tr>
                                        <td>
                                            <h5 class="card-text"><?= $sia['judul_materi'] ?></h5>
                                            <input type="hidden" name="id_mapel" class="form-control" value="1">
                                            <input type="hidden" name="id_tugas" class="form-control" value="2">
                                        </td>
                                        <td>
                                            <h5 class="card-text">Due : 25 November 2020</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h5 class="card-text">Grade : 0/100</h5><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p class="card-text"><?= $sia['deskripsi'] ?></p><br>
                                            <?= $sia['berkas'] ?><br><br>
                                        </td>
                                    </tr>
                                    <td align="left" width="140">
                                        <a href="<?= base_url('Kelas/kumpulTugas') ?>">

                                            <button type="button" class="btn btn-success btn-sm">
                                                Kerjakan Tugas
                                            </button></a>
                                    </td>

                                <?php endforeach;  ?>
                            </table>
                        </blockquote>
                    </form>
                </div>

            </div>