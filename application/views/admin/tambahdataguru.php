<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
          <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Data Guru</h4>
                  <form class="form-sample" method="post" action="<?= base_url('admin/tambahdataguru_aksi') ?>">
                    <p class="card-description">
                      Informasi Pribadi
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">NIP</label>
                          <div class="col-sm-9">
                            <input type="text" name="nip" class="form-control">
                            <?= form_error('nip', '<div class="text-danger small ml-3">','</div>')?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                          <div class="col-sm-9">
                          <input type="text" name="nama_guru" class="form-control">
                          <?= form_error('nama_guru', '<div class="text-danger small ml-3">','</div>')?>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="jenis_kelamin">
                              <option>Laki-laki</option>
                              <option>Perempuan</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="tempat_lahir">
                            <?= form_error('tempat_lahir', '<div class="text-danger small ml-3">','</div>')?>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                          <div class="col-sm-9"> 
                            <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="tanggal_lahir">
                            <?= form_error('tanggal_lahir', '<div class="text-danger small ml-3">','</div>')?>
                          </div>
                        </div>
                      </div>
                    </div>
   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Agama</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="agama">
                            <?= form_error('agama', '<div class="text-danger small ml-3">','</div>')?>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                          <div class="col-sm-9">
                            <input type="text" name="no_hp" class="form-control">
                            <?= form_error('no_hp', '<div class="text-danger small ml-3">','</div>') ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Alamat</label>
                          <div class="col-sm-9">
                            <input type="text" name="alamat" class="form-control">
                            <?= form_error('alamat', '<div class="text-danger small ml-3">','</div>') ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description">Informasi Akun</p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" name="email" class="form-control">
                            <!-- <?= form_error('email', '<div class="text-danger small ml-3">','</div>') ?> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Username</label>
                          <div class="col-sm-9">
                            <input type="text" name="username" class="form-control">
                            <!-- <?= form_error('username', '<div class="text-danger small ml-3">','</div>') ?> -->
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
                            <?= form_error('password2', '<div class="text-danger small ml-3">','</div>') ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-5" >Tambah</button>
                    <a class="btn btn-danger mb-5" href="<?php echo base_url()?>admin/dataguru">Batal </a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>