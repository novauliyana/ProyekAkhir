<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">DETAIL KELAS</h4>
                        <div class="table-responsive pt-3">
                            <form>
                                <?php foreach ($kelas as $k) : ?>
                                    <table class="table">
                                        <tr>
                                            <td width="200"><b>Nama Kelas</b></td>
                                            <td width="50">:</td>
                                            <td><?= $k['nama_kelas'] ?>
                                        </tr>
                                        <tr>
                                            <td><b>Nama Mata Pelajaran</b></td>
                                            <td>:</td>
                                            <td><?= $k['nama_mapel'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Kode Mata Pelajaran</b></td>
                                            <td>:</td>
                                            <td><?= $k['kode'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Nama Guru Pengajar</b></td>
                                            <td>:</td>
                                            <td><?= $k['nama_guru'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>NIP Guru Pengajar</b></td>
                                            <td>:</td>
                                            <td><?= $k['nip'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Anggota</b></td>
                                            <td>:</td>
                                            <td><?php echo anchor('elearningguru/anggota/' . $k['id_kelas'], '<div class="btn btn-primary btn-sm"> Lihat Anggota </i></div>') ?></td>
                                        </tr>

                                    <?php endforeach; ?>
                                    </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>