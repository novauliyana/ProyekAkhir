<div class="main-panel">          
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5"><h2>Data Kelas</h2></div>
                        <div class="d-flex"></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-end flex-wrap">
                        <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                            <i class="mdi mdi-download text-muted"></i>
                        </button>
                        <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                            <i class="mdi mdi-clock-outline text-muted"></i>
                        </button>        
                        <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                            <i class="mdi mdi-plus text-muted"></i>
                        </button>
                        <button class="btn btn-primary mt-2 mt-xl-0 mdi mdi-download">Download report</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- <button type="submit" class="btn btn-primary mt-2 mt-xl-0" >Tambah data Kelas</button> -->
                        <?php echo anchor('admin/tambahdatakelas','<button class="btn btn-primary mt-2 mt-xl-0">Tambah Data Kelas</button>')?>
                        <div class="table-responsive">
                        <table class="table table-border table-hover table-striped">
                                <thead>
                                    <tr valign="middle">
                                        <th>Kode Kelas</th>
                                        <th>Nama Kelas</th>
                                        <th colspan="2">Kelola</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                <?php foreach ($kelas as $datakelas) : ?>
                                    <tr>
                                        <td><?php echo $datakelas->kode_kelas?></td>
                                        <td><?php echo $datakelas->nama_kelas?></td>
                                        <td width="20px"><?php echo anchor('admin/detailkelas/' . $datakelas->id_kelas, '<div class="btn btn-sm btn-info"><i class="mdi mdi-eye"></i></div>');?></td>
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