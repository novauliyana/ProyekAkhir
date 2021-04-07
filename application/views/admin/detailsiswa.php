<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Detail Data Siswa</h4>
            <?php foreach ($detail as $dt) : ?>
              <p class="card-description">Informasi Pribadi</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">NIS</label>
                    <div class="col-sm-9">
                    <label class="col-sm-6 col-form-label">: <?php echo $dt->nis?></label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">NISN</label>
                    <div class="col-sm-9">
                    <label class="col-sm-6 col-form-label">: <?php echo $dt->nisn?></label>
                    </div>
                  </div>
                </div>  
              </div>
                    
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <label class="col-sm-6 col-form-label">: <?php echo $dt->nama_lengkap?></label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                    <label class="col-sm-6 col-form-label">: <?php echo $dt->jenis_kelamin?></label>
                    </div>
                  </div>
                </div>
              </div>
                    
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-9">
                    <label class="col-sm-6 col-form-label">: <?php echo $dt->tempat_lahir?></label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-9">
                    <label class="col-sm-6 col-form-label">: <?php echo $dt->tanggal_lahir?></label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                    <label class="col-sm-6 col-form-label">: <?php echo $dt->alamat?></label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Kelas</label>
                    <div class="col-sm-9">
                    <label class="col-sm-6 col-form-label">: <?php echo $dt->nama_kelas?></label>
                    </div>
                  </div>
                </div>
              </div>
   
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Agama</label>
                    <div class="col-sm-9">
                    <label class="col-sm-6 col-form-label">: <?php echo $dt->agama?></label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-9">
                    <label class="col-sm-6 col-form-label">: <?php echo $dt->no_hp?></label>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach;?>
            <?php echo anchor('admin/datasiswa','<button class="btn btn-sm btn-primary">Kembali</button>')?>
          </div>
        </div>
      </div>
    </div>
  </div>