<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Halo, <?= $user['nama'] ?>!</h4>
                        <p class="mb-md-0">Pilih kelas yang akan kamu akses.</p>
                        <hr>
                        <table>
                            <tr>
                                <?php foreach ($kelas as $sia) : ?>
                                    <td width="500">
                                        <a class="nav-link text-black" href="<?= base_url('guru/in/' . $sia['id_mapel']) ?>">
                                            <blockquote class="blockquote blockquote-primary">
                                                <h5><?= $sia['nama_mapel'] ?></h5>
                                                <h5><?= $sia['nama_kelas'] ?></h5>
                                                <hr>
                                                <p><?= $sia['kode_kelas'] ?></p>
                                            </blockquote>
                                        </a>
                                    </td>
                                <?php endforeach;  ?>
                            </tr>
                    </div>
                </div>
            </div>
        </div>