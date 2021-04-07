<div class="main-panel">          
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5"><h2>Mata Pelajaran</h2></div>
                        <div class="d-flex"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <?php echo anchor('admin/tambahmapel','<button class="btn btn-primary mt-2 mt-xl-0">Tambah Mata Pelajaran</button>')?>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 stretch-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action active" id="list-ipa-list" data-toggle="list" href="#list-ipa" role="tab" aria-controls="ipa">IPA</a>
                                            <a class="list-group-item list-group-item-action" id="list-ips-list" data-toggle="list" href="#list-ips" role="tab" aria-controls="ips">IPS</a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-10">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="list-ipa" role="tabpanel" aria-labelledby="list-ipa-list">
                                                <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead class="table-warning">
                                                                <tr>
                                                                    <th scope="col">Kode Mata Pelajaran</th>
                                                                    <th scope="col">Nama Mata Pelajaran</th>
                                                                    <th scope="col">Tahun Ajaran</th>
                                                                    <th scope="col" colspan="2">Kelola</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($mapelipa as $ipa) : ?>
                                                                <tr>
                                                                    <td><?= $ipa['kode_mapel']?></td>
                                                                    <td><?= $ipa['nama_mapel']?></td>
                                                                    <td><?= $ipa['semester']?></td>
                                                                    <td width="20px"><div class="btn btn-sm btn-info"><i class="mdi mdi-eye"></i></div></td>
                                                                    <td width="20px"><div class="btn btn-sm btn-primary"><i class=" mdi mdi-lead-pencil"></i></div></td>
                                                                </tr>
                                                            </tbody>
                                                            <?php endforeach;?>
                                                        </table> 
                                                    </div>
                                                </div>
                                                
                                                <div class="tab-pane fade" id="list-ips" role="tabpanel" aria-labelledby="list-ips-list">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead class="table-warning">
                                                                <tr>
                                                                    <th scope="col">Kode Mata Pelajaran</th>
                                                                    <th scope="col">Nama Mata Pelajaran</th>
                                                                    <th scope="col">Tahun Ajaran</th>
                                                                    <th scope="col" colspan="2">Kelola</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($mapelips as $ips) : ?>
                                                                <tr>
                                                                    <td><?= $ips['kode_mapel']?></td>
                                                                    <td><?= $ips['nama_mapel']?></td>
                                                                    <td><?= $ips['semester']?></td>
                                                                    <td width="20px"><div class="btn btn-sm btn-info"><i class="mdi mdi-eye"></i></div></td>
                                                                    <td width="20px"><div class="btn btn-sm btn-primary"><i class=" mdi mdi-lead-pencil"></i></div></td>
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
            </div>
        </div>