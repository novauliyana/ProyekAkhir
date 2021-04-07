<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <form class="forms-sample" method="POST" action="<?= base_url('elearningsiswa/submit_ulangan') ?>" enctype="multipart/form-data">
                                <table width="100%">
                                    <?php foreach ($ulangan as $sia) : ?>
                                        <tr>
                                            <td width="150">
                                                <h5 class="card-text"><?= $sia['judul_ulangan'] ?></h5><br>
                                                <input type="hidden" name="id_mapel" class="form-control" value="<?= $sia['id_mapel'] ?>">
                                                <input type="hidden" name="id_ulangan" class="form-control" value="<?= $sia['id_ulangan'] ?>">
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
                                            <td align="right">
                                                <a href=<?= base_url('elearningsiswa/class') ?>>
                                                    <button type="submit" class="btn btn-success">
                                                        Submit Ulangan
                                                    </button>
                                            </td>
                                        </tr>
                                </table>
                            </form>
                        </blockquote>
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
                                    <p><strong>Judul Ulangan : </strong></p>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p><?= $sia['judul_ulangan'] ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p><strong>Deskripsi Ulangan: </strong></p>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p><?= $sia['deskripsi'] ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p class="card-text"><b>Batas Waktu</b></p>
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