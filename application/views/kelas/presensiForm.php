<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <table>
                        <tr>
                            <td width="50"><i class="mdi  mdi-file-document-box mr-3 icon-md text-info"></i></td>
                            <td valign="center">
                                <h3><b>Presensi</b></h3>
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <form class="forms-sample" method="POST" action="<?= base_url('Kelas') ?>" enctype="multipart/form-data">
                        <blockquote class="blockquote">
                            <table width="100%">
                                <tr>
                                    <td>
                                        <h5 class="card-text">Silahkan Upload Foto terbaru anda</h5>
                                        <input type="hidden" name="id_mapel" class="form-control" value="1">
                                        <input type="hidden" name="id_tugas" class="form-control" value="2">
                                    </td>

                                </tr>
                                <tr>
                                    <h4 class="card-text">Kelas Matematika</h4>
                                    <br>Silahkan lakukan presensi seperti biasa
                                    <br><br> Kamis 24 Desember 2020 <br>
                                    <br>12.00 - 14.00 <br><br><br>
                                </tr>
                                <tr>
                                    <td>
                                        <blockquote class="blockquote">
                                            <p class="mb-0"> <input type="file" name="file"> </p>
                                        </blockquote>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right"><a href="<?= base_url('Kelas/index') ?>"><button type="submit" class="btn btn-success mr-2" value="" colspan="2">Submit</button></a></td>
                                </tr>
                            </table>
                        </blockquote>
                    </form>
                </div>

            </div>