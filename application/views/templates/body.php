<?php foreach ($siswa as $tmp) : ?>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2>Hallo, <?= $tmp->nama; ?> </h2>
                    <?php endforeach; ?>

                    <p class="mb-md-0">Pilih kelas yang akan kamu akses.</p>
                    <hr>
                    <table>
                        <tr>
                            <?php $mapell = 1;
                            foreach ($mapel as $tmp) : ?>
                                <td width="500">
                                    <a class="nav-link text-black" href="<?= base_url('Kelas') ?>">
                                        <blockquote class="blockquote blockquote-primary">
                                            <h5><?= $tmp['nama_mapel'] ?></h5>
                                            <h5><?= $tmp['kode_mapel'] ?></h5>
                                            <hr>
                                            <p>30 Siswa</p>

                                        </blockquote>
                                    </a>
                                </td>
                            <?php $mapell++;
                            endforeach; ?>
                        </tr>

                    </table>

                    </div>

                </div>
            </div>

        </div>