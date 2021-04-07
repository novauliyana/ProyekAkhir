<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">DAFTAR ANGGOTA KELAS</h4>
                        <?php foreach ($jumlahanggota as $jm) : ?>
                            <p><b><?= $jm->jmlhanggota; ?> Anggota</b></p>
                        <?php endforeach; ?></p>
                        <div class="table-responsive pt-3">
                            <form>
                                <table class="table table-bordered">

                                    <thead align="center">

                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama Lengkap</th>
                                            <th>Foto</th>



                                        </tr>
                                    </thead>
                                    <?php $no = 1;
                                    foreach ($anggota as $sia) : ?>
                                        <tbody align="center">
                                            <tr>
                                                <td width="50"><?= $no ?></td>
                                                <td width="100"><?= $sia['nis'] ?></td>
                                                <td width="220"><?= $sia['nama_siswa'] ?></td>
                                                <td width="220"><img src="<?= base_url() . $sia['foto_siswa']; ?> " class="card-img"></td>

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