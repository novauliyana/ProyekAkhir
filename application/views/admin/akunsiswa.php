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
                                    <a class="list-group-item list-group-item-action" id="list-guru-list" data-toggle="list" href="#list-guru" role="tab" aria-controls="guru">Guru</a>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="list-siswa" role="tabpanel" aria-labelledby="list-siswa-list">
                                        <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="table-warning">
                                                        <tr>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Username</th>
                                                        <th scope="col">Password</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($usersiswa as $akunsiswa) : ?>
                                                        <tr>
                                                            <td><?= $akunsiswa['nama_lengkap']?></td>
                                                            <td><?= $akunsiswa['email']?></td>
                                                            <td><?= $akunsiswa['username']?></td>
                                                            <td><?= $akunsiswa['password']?></td>
                                                            
                                                        </tr>
                                                    </tbody>
                                                    <?php endforeach;?>
                                                </table> 
                                            </div>
                                        </div>
                                    <div class="tab-pane fade" id="list-guru" role="tabpanel" aria-labelledby="list-guru-list">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="table-warning">
                                                    <tr>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Username</th>
                                                    <th scope="col">Password</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($userguru as $akunguru) : ?>
                                                    <tr>
                                                        <td><?= $akunguru['nama_lengkap']?></td>
                                                        <td><?= $akunguru['email']?></td>
                                                        <td><?= $akunguru['username']?></td>
                                                        <td><?= $akunguru['password']?></td>
                                                        
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