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
                    <form class="forms-sample" method="POST" action="<?= base_url('Kelas') ?>" enctype="multipart/form-data">
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
                                        <td>
                                            <blockquote class="blockquote">
                                                <p class="mb-0"> <input type="file" name="file"> </p>
                                            </blockquote>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right"><a href="<?= base_url('Kelas/tugas') ?>"><button type="submit" class="btn btn-success mr-2" value="" colspan="2"> Submit</button></a></td>
                                    </tr>
                                <?php endforeach;  ?>
                            </table>
                        </blockquote>
                    </form>
                </div>

            </div>