<div class="main-panel">          
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="d-flex justify-content-between flex-wrap">
          <div class="d-flex align-items-end flex-wrap">
            <div class="mr-md-3 mr-xl-5">
              <h2>Data Guru</h2>
              <p class="mb-md-0">Lihat Data Guru</p>
            </div>
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
          <div class="row">
            <div class="col-md-6">
              <div class="card-body">
                <div class="template-demo">
                  <?php echo form_open('admin/searchguru')?>
                  <div class="form-group">
                    <p class="card-title">Pencarian</p>
                    <input type="text" name="keyword" class="form-control" placeholder="Cari Guru">
                    <button type="submit" name="search" value="cari" class="btn btn-primary">Cari</button>
                    <?php form_close()?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card-body">
                <p class="card-title">Data Guru</p>
                <div class="table-responsive">
                  <table id="recent-purchases-listing" class="table">
                    <thead>
                      <tr>
                        <!-- <th>NUPTK</th> -->
                        <th>NIP</th>
                        <th>Nama Lengkap</th>
                        <th>Tempat lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th colspan="2">Kelola</th>
                        <!-- <th>Jenis GTK</th> -->
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($guru as $dataguru) : ?>
                      <tr>
                        <!-- <td><?php echo $dataguru->nuptk?></td> -->
                        <td><?php echo $dataguru->nip?></td>
                        <td><?php echo $dataguru->nama_guru?></td>
                        <td><?php echo $dataguru->tempat_lahir?></td>
                        <td><?php echo $dataguru->tanggal_lahir?></td>
                        <td><?php echo $dataguru->alamat?></td>
                        <td><?php echo $dataguru->jenis_kelamin?></td>
                        <td width="20px"><?php echo anchor('admin/detailguru/' . $dataguru->nip, '<div class="btn btn-sm btn-info"><i class="mdi mdi-eye"></i></div>');?></td>
                        <!-- <td width="20px"><?php echo anchor('admin/updateguru/' . $dataguru->nip,'div class="btn btn-sm btn-primary"><i class=" mdi mdi-lead-pencil"></i></div>');?></td> -->
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
    
