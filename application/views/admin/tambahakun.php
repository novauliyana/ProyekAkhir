<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Data Akun Siswa</h4>
            <form  method="post" action="<?= base_url('admin/tambahakun_aksi') ?>">
              <p class="card-description">Informasi Akun</p>
              <!-- <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Sebagai</label>
                    <div class="col-sm-9">
                    <select class="form-control" name="role_id">
                      <option>--Pilih--</option>
                      <?php foreach($user_role as $user_role){?>
                        <option value="<?php echo $user_role->role_id;?>">
                        <?php echo $user_role->role;?></option>
                      <?php }?>
                    </select>
                    <i><?php echo form_error('id_kelas');?></i>
                    </div>
                  </div>
                </div>
              </div> -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input type="email" name="email" class="form-control" value="<?= set_value('email') ?>">
                      <!-- <?= form_error('email', '<div class="text-danger small ml-3">','</div>') ?> -->
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                      <input type="text" name="username" class="form-control" value="<?= set_value('username') ?>">
                      <!-- <?= form_error('username', '<div class="text-danger small ml-3">','</div>') ?> -->
                    </div>
                  </div>
                </div>
              </div>
                    
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9"><input type="text" name="nama_lengkap" class="form-control" value="<?= set_value('nama_lengkap') ?>">
                      <?= form_error('nama_lengkap', '<div class="text-danger small ml-3">','</div>') ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-9">
                      <input type="text" name="no_hp" class="form-control" value="<?= set_value('no_hp') ?>">
                      <?= form_error('no_hp', '<div class="text-danger small ml-3">','</div>') ?>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                      <input type="password" name="password" class="form-control">
                      <!-- <?= form_error('password', '<div class="text-danger small ml-3">','</div>') ?> -->
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Ulangi Password</label>
                    <div class="col-sm-9">
                      <input type="password" name="password2" class="form-control">
                      <?= form_error('alamat', '<div class="text-danger small ml-3">','</div>') ?>
                    </div>
                  </div>
                </div>
              </div>

              <button type="submit" class="btn btn-primary mb-5" >Tambah</button>
              <button type="close" class="btn btn-danger mb-5" >Batal</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>