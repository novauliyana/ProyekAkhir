<div class="main-panel">          
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="d-flex justify-content-between flex-wrap">
          <div class="d-flex align-items-end flex-wrap">
            <div class="mr-md-3 mr-xl-5">
              <h2>Data Siswa</h2>
              <p class="mb-md-0">Lihat Data Siswa
              <?php echo $this->session->flashdata('pesan') ?>
              </p>
            </div>
            <div class="d-flex">
            </div>
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
                  <?php echo form_open('admin/search')?>
                  <div class="form-group">
                    <p class="card-title">Pencarian</p>
                    <input type="text" name="keyword" class="form-control" placeholder="Cari Nama Siswa/Kelas">
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
                <p class="card-title">Data Siswa</p>
                <div class="table-responsive">
                  <table id="recent-purchases-listing" class="table">
                    <thead>
                      <tr>
                        <th>NIS</th>
                        <th>Nama Lengkap</th>
                        <th>Tempat lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Kelas</th>
                        <th colspan="2">Kelola</th>
                      </tr>
                    </thead>  
                    <tbody>
                      <?php foreach ($siswa as $datasiswa) : ?>
                      <tr>
                        <td><?php echo $datasiswa->nis?></td>
                        <td><?php echo $datasiswa->nama_lengkap?></td>
                        <td><?php echo $datasiswa->tempat_lahir?></td>
                        <td><?php echo $datasiswa->tanggal_lahir?></td>
                        <td><?php echo $datasiswa->alamat?></td>
                        <td><?php echo $datasiswa->jenis_kelamin?></td>
                        <td><?php echo $datasiswa->nama_kelas?></td>
                        <td width="20px"><?php echo anchor('admin/detailsiswa/' . $datasiswa->nis, '<div class="btn btn-sm btn-info"><i class="mdi mdi-eye"></i></div>');?></td>
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
  