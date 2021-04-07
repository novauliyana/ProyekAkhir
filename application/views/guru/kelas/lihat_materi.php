<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Lihat Materi</h4>
                        <div class="table-responsive pt-3">
                            <form>
                                <?php foreach ($materi as $k) : ?>
                                    <table class="table">
                                        <tr>
                                            <td width="200"><b>Judul materi</b></td>
                                            <td width="50">:</td>
                                            <td><?= $k['judul_materi'] ?>
                                        </tr>
                                        <tr>
                                            <td><b>Deskripsi</b></td>
                                            <td>:</td>
                                            <td><?= $k['deskripsi'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>File</b></td>
                                            <td>:</td>
                                            <td>
                                                <a href="<?= base_url() . $k['berkas'] ?>">
                                                    <?= $k['nama_file'] ?></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>