<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2>Hallo, <?= $siswa['nama'] ?> </h2>
                    <p class="mb-md-0">Pilih kelas yang akan kamu akses.</p>
                    <hr>
                    <div class="row">
                        <?php $mapell = 1;
                        foreach ($mapel as $tmp) : ?>
                            <div class="card ml-2 mt-2" style="width: 18rem;">


                                <a class="nav-link text-black" href="<?= base_url('Home/inKelas/' . $tmp['id_mapel']) ?>">
                                    <blockquote class="blockquote blockquote-primary">
                                        <h5><?= $tmp['nama_mapel'] ?></h5>
                                        <h5><?= $tmp['kode_mapel'] ?></h5>
                                        <hr>
                                        <p>30 Siswa</p>

                                    </blockquote>
                                </a>
                            </div>

                        <?php $mapell++;
                        endforeach; ?>
                    </div>


                </div>

            </div>
        </div>

    </div>