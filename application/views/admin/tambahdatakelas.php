<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
          <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Data Kelas</h4>
                  <form class="form-sample" method="post" action="<?= base_url('admin/tambahdatakelas_aksi') ?>">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kode Kelas</label>
                          <div class="col-sm-9">
                          <input type="text" name="kode_kelas" class="form-control">
                          <?= form_error('kode_kelas', '<div class="text-danger small ml-3">','</div>')?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama Kelas</label>
                          <div class="col-sm-9">
                          <input type="text" name="nama_kelas" class="form-control">
                          <?= form_error('nama_kelas', '<div class="text-danger small ml-3">','</div>')?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tahun Ajaran</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="th_ajar">
                            <?= form_error('th_ajar', '<div class="text-danger small ml-3">','</div>')?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 mt-xl-0" >Tambah</button>
                    <button type="submit" class="btn btn-danger mt-2 mt-xl-0" >Batal</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>