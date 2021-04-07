<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Lihat Tugas</h4>
                        <div class="table-responsive pt-3">
                            <form>
                                <?php foreach ($tugas as $k) : ?>
                                    <table class="table">
                                        <tr>
                                            <td width="200"><b>Judul tugas</b></td>
                                            <td width="50">:</td>
                                            <td><?= $k['judul_tugas'] ?>
                                        </tr>
                                        <tr>
                                            <td><b>Deskripsi</b></td>
                                            <td>:</td>
                                            <td><?= $k['deskripsi'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Tanggal Pengumpulan</b></td>
                                            <td>:</td>
                                            <td><?= $k['deadline'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Waktu Pengumpulan</b></td>
                                            <td>:</td>
                                            <td><?= $k['waktu'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>File</b></td>
                                            <td>:</td>
                                            <td>
                                                <a href="<?= base_url() . $k['file'] ?>">
                                                    <?= $k['nama_file'] ?></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?php echo anchor('guru/kumpultugas/' . $k['id_tugas'] . '/' .
                                                    $k['id_mapel'], '<div class="btn btn-primary btn-sm"> Lihat Pengumpulan </i></div>') ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </table>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>