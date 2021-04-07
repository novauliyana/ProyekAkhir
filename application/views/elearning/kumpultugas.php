<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="<?= base_url('elearningsiswa/submit_tugas') ?>" enctype="multipart/form-data">
                            <blockquote class="blockquote">
                                <table width="100%">
                                    <?php foreach ($tugas as $sia) : ?>
                                        <tr>
                                            <td width="150">
                                                <h5 class="card-text"><?= $sia['judul_tugas'] ?></h5><br>
                                                <input type="hidden" name="id_mapel" class="form-control" value="<?= $sia['id_mapel'] ?>">
                                                <input type="hidden" name="id_tugas" class="form-control" value="<?= $sia['id_tugas'] ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <blockquote class="blockquote">
                                                    <p class="mb-0"> <input type="file" name="file"> </p>
                                                </blockquote>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right"><button type="submit" class="btn btn-success mr-2" value="">Submit</button></td>
                                        </tr>
                                </table>
                            </blockquote>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">KETERANGAN</h4>
                        <hr>
                        <table>
                            <tr>
                                <td colspan="2">
                                    <p><strong>Judul Tugas : </strong></p>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p><?= $sia['judul_tugas'] ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p><strong>Deskripsi Tugas: </strong></p>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p><?= $sia['deskripsi'] ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p><strong>Deadline : </strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p class="card-text text-danger"><b><?= $sia['deadline'] ?></b></p>
                                </td>
                            </tr>

                        <?php endforeach;  ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>