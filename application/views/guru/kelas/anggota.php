<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-primary">Daftar Anggota</h3>
                        <?php foreach ($jumlahanggota as $jm) : ?>
                            <p>Total : <b><?= $jm->jmlhanggota; ?> Anggota</b></p>
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
                                    foreach ($anggota as $ag) : ?>
                                        <tbody align="center">
                                            <tr>
                                                <td width="30"><?= $no ?></td>
                                                <td><?= $ag['nis'] ?></td>
                                                <td><?= $ag['nama_siswa'] ?></td>
                                                <td><img src="<?= base_url() . $ag['foto_siswa']; ?> " class="card-img"></td>

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