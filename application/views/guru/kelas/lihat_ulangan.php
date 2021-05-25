<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Lihat Ulangan</h4>
                        <div class="table-responsive pt-3">
                            <form>
                                <?php foreach ($ulangan as $k) : ?>
                                    <table class="table">
                                        <tr>
                                            <td width="200"><b>Judul ulangan</b></td>
                                            <td width="50">:</td>
                                            <td><?= $k['judul_ulangan'] ?>
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

                                    </table>
                                    <br>
                                    <tr>
                                        <td>
                                            <?php if ('Pilihan Ganda' == $k['tipe']) {
                                                echo ('<a href="' . base_url() . 'guru/ulangan_pilgan/' . $k['id_ulangan'] . '/' .
                                                    $k['id_mapel'] . '"><button type="button" class="btn btn-primary btn-sm">
                                        Lihat Soal
                                    </button></a>');
                                            } else {
                                                echo ('<a href="' . base_url() . 'guru/ulangan_essai/' . $k['id_ulangan'] . '/' .
                                                    $k['id_mapel'] . '"><button type="button" class="btn btn-primary btn-sm">
                                        Lihat Soal
                                    </button></a>');
                                            }
                                            ?>

                                            <!-- </td>
                                        <?php echo anchor('guru/soalulangan/' . $k['id_ulangan'] . '/' .
                                            $k['id_mapel'], '<div class="btn btn-primary btn-sm">Lihat Soal</div>') ?> -->
                                            <?php echo anchor('guru/kumpululangan/' . $k['id_ulangan'] . '/' .
                                                $k['id_mapel'], '<div class="btn btn-primary btn-sm">Lihat Pengumpulan</div>') ?>
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