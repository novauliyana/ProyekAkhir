<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="list-group" id="list-tab" role="tablist">
                                    <a class="list-group-item list-group-item-action active" id="list-siswa-list" data-toggle="list" href="#list-siswa" role="tab" aria-controls="siswa">Siswa</a>
                                    <a class="list-group-item list-group-item-action" id="list-jadwal-list" data-toggle="list" href="#list-jadwal" role="tab" aria-controls="jadwal">Jadwal</a>
                                </div>
                            </div>

                            <div class="col-10">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="list-siswa" role="tabpanel" aria-labelledby="list-siswa-list">
                                        <h4>Siswa</h4>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="table-warning">
                                                    <tr>
                                                    <th scope="col">Nis</th>
                                                    <th scope="col">Nama Lengkap</th>
                                                    <th scope="col">Jenis Kelamin</th>
                                                    <th scope="col">Tempat Lahir</th>
                                                    <th scope="col">Tanggal Lahir</th>
                                                    <th scope="col">Alamat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($detail as $d_siswa) : ?>
                                                    <tr>
                                                        <td><?php echo $d_siswa->nis?></td>
                                                        <td><?php echo $d_siswa->nama_lengkap?></td>
                                                        <td><?php echo $d_siswa->jenis_kelamin?></td>
                                                        <td><?php echo $d_siswa->tempat_lahir?></td>
                                                        <td><?php echo $d_siswa->tanggal_lahir?></td>
                                                        <td><?php echo $d_siswa->alamat?></td>
                                                    </tr>
                                                </tbody>
                                                <?php endforeach;?>
                                            </table> 
                                        </div>
                                    </div>
                                
                                    <div class="tab-pane fade" id="list-jadwal" role="tabpanel" aria-labelledby="list-jadwal-list">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="table-warning"
                                                    <tr>
                                                        <th scope="col">Jam</th>
                                                        <th scope="col">Senin</th>
                                                        <th scope="col">Selasa</th>
                                                        <th scope="col">Rabu</th>
                                                        <th scope="col">Kamis</th>
                                                        <th scope="col">Jumat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($jampel as $jampel) : ?>
                                                    <tr>
                                                        <td><?php echo $jampel->jam?></td>
                                                        <!-- <td><?php echo $detail_jadwal->nama_mapel?></td> -->
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                                <?php endforeach;?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>