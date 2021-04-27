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
                                            <h5 class="card-text"><?= $sia['judul_tugas'] ?></h5>
                                            <input type="hidden" class="form-control" name="id_mapel" value="<?= $this->uri->segment('3') ?>">
                                            <input type="hidden" class="form-control" name="id_tugas" value="<?= $this->uri->segment('3') ?>">
                                        </td>
                                        <td>
                                            <h5 class="card-text">Due : <?= date('d F Y',  strtotime($sia['deadline'])) ?> <?= $sia['waktu'] ?></h5>
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
                                            <a href="<?= base_url() . $sia['file'] ?>">
                                                <?= $sia['nama_file'] ?>
                                            </a>
                                            <br><br>
                                            <?= form_error('image', '<small class="text-danger">', '</small>'); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <blockquote class="blockquote">
                                                <p class="mb-0"> <input type="file" name="file"> </p>
                                            </blockquote>
                                        </td>
                                    </tr>
                                    <td align="left" width="140">
                                        <a href="<?= base_url('Home/kumpulTugas') ?>">

                                            <button type="button" class="btn btn-success btn-sm">
                                                Submit Tugas
                                            </button></a>
                                    </td>

                                <?php endforeach;  ?>
                            </table>
                        </blockquote>
                    </form>
                </div>

            </div>