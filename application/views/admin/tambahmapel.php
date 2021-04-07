<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
          <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Data Kelas</h4>
                  <form class="form-sample" method="post" action="<?= base_url('admin/tambahmapel_aksi') ?>">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Program</label>
                          <div class="col-sm-9">
                          <select name="program" class="form-control">
                            <option>IPA</option>
                            <option>IPS</option>
                          </select>
                          <?= form_error('program', '<div class="text-danger small ml-3">','</div>')?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kode Mata Pelajaran</label>
                          <div class="col-sm-9">
                          <input type="text" name="kode_mapel" class="form-control">
                          <?= form_error('kode_mapel', '<div class="text-danger small ml-3">','</div>')?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama Mata Pelajaran</label>
                          <div class="col-sm-9">
                          <input type="text" name="nama_mapel" class="form-control">
                          <?= form_error('nama_mapel', '<div class="text-danger small ml-3">','</div>')?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Semester</label>
                          <div class="col-sm-9">
                          <select name="semester" class="form-control">
                            <option>Ganjil</option>
                            <option>Genap</option>
                          </select>
                            <?= form_error('semester', '<div class="text-danger small ml-3">','</div>')?>
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