<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
          <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Data Guru</h4>
                  <?php foreach ($guru as $guru) : ?>
                  <form class="form-sample" method="post" action="<?= base_url('admin/updatedataguru_aksi') ?>">
                    <p class="card-description">
                      Informasi Pribadi
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">NIP</label>
                          <div class="col-sm-9">
                            <input type="text" name="nip" class="form-control" value="<?php echo $guru->nip?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                          <div class="col-sm-9">
                          <input type="text" name="nip" class="form-control" value="<?php echo $guru->nama_guru?>">
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
                          <input type="text" name="nip" class="form-control" value="<?php echo $guru->tempat_lahir?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                          <div class="col-sm-9"> 
                          <input type="text" name="nip" class="form-control" value="<?php echo $guru->tanggal_lahir?>">
                          </div>
                        </div>
                      </div>
                    </div>
   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Agama</label>
                          <div class="col-sm-9">
                          <input type="text" name="nip" class="form-control" value="<?php echo $guru->agama?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                          <div class="col-sm-9">
                          <input type="text" name="nip" class="form-control" value="<?php echo $guru->no_hp?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Alamat</label>
                          <div class="col-sm-9">
                          <input type="text" name="nip" class="form-control" value="<?php echo $guru->alamat?>">
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
                            <input type="text" name="nip" class="form-control" value="<?php echo $guru->email?>">
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
                  <?php endforeach ; ?>
                </div>
              </div>
            </div>
          </div>
        </div>