<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Daftar Tugas <?= $siswa['nama'] ?></h2>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Tugas
                                    </th>
                                    <th>
                                        Mata Pelajaran
                                    </th>
                                    <th>
                                        Deadline
                                    </th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($tugas_all as $tugas) : ?>
                                    <tr>
                                        <td>
                                            <?= $no; ?>
                                        </td>
                                        <td>
                                            <?= $tugas['judul_tugas']; ?>
                                        </td>
                                        <td>
                                            <?= $tugas['nama_mapel']; ?>
                                        </td>
                                        <td>
                                            <?= date('d F Y',  strtotime($tugas['deadline'])) ?> <?= $tugas['waktu'] ?>
                                        </td>
                                        <td>
                                            Selesai
                                        </td>
                                    </tr>
                                <?php $no++;
                                endforeach; ?>

                    </div>

                </div>