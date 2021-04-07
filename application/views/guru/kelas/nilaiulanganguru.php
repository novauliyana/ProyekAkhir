<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">NILAI ULANGAN</h4>

                        <div class="table-responsive pt-3">
                            <form class="forms-sample" method="POST" action="<?= base_url('guru/updatenilaiulangan/') . $this->uri->segment('3') . '/' . $this->uri->segment('4') ?>">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama Lengkap</th>
                                            <th>Pengumpulan</th>
                                            <th>Waktu</th>
                                            <th>Nilai</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php $no = 1;
                                    foreach ($nilaiulangan as $sia) : ?>
                                        <tbody>
                                            <tr>
                                                <input type="hidden" name="id" value="<?= $sia['id'] ?>">
                                                <input type="hidden" name="idmapel" value="<?= $sia['id_mapel'] ?>">
                                                <input type="hidden" name="idtugas" value="<?= $sia['id_ulangan'] ?>">
                                                <td align="center" width="50"><?= $no ?></td>
                                                <td width="80"><?= $sia['nis'] ?></td>
                                                <td width="180"><?= $sia['nama_siswa'] ?></td>
                                                <td width="180"><?= $sia['nama_file'] ?></td>
                                                <td width="150"><?= $sia['tanggal'] ?></td>
                                                <td align="center" width="80">
                                                    <input type="number" name="nilai" value="<?= $sia['nilai'] ?>"></td>
                                                <td width="70">
                                                    <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                                </td>

                                            </tr>
                                        </tbody>
                                    <?php $no++;
                                    endforeach; ?>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>