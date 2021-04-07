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
                    <table>
                        <?php foreach ($materi as $sia) : ?>
                            <tr height="50">
                                <td width="60"><i class="mdi mdi-file-document-box mr-3 icon-md text-info"></i></td>
                                <td width="500">Aljabar
                                    <br><small class="text-danger " style="font-size: 10px">25 Desember 2020</small>
                                </td>
                                <td align="right" width="140">
                                    <a href="<?= base_url() . $sia['berkas'] ?>">
                                        <button type="button" class="btn btn-success btn-sm">
                                            Download
                                        </button></a>
                                </td>
                                <td align="right" width="140">
                                    <a href="<?= base_url('Kelas/lihatTugas') ?>">

                                        <button type="button" class="btn btn-success btn-sm">
                                            Lihat Tugas
                                        </button></a>
                                </td>
                            </tr>
                        <?php endforeach;  ?>
                    </table>
                </div>

            </div>