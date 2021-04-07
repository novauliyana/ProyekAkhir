<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <?php foreach ($us as $tmp) : ?>
                            <h3 class="mb-4">LENGKAPILAH DATA DIRI DIBAWAH INI</h3>
                            <form class="pt-3" method="POST" action="<?= base_url('Elearningsiswa/tambah_data'); ?>" enctype="multipart/form-data">
                                <?= $this->session->flashdata('message'); ?>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nomor Penerimaan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="nis" placeholder="Nomor Penerimaan" value="">
                                    </div>
                                    <?= form_error('nis', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?= $tmp->nama ?>">
                                    </div>
                                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="tempatlahir" placeholder="Tempat Lahir" value="<?= $tmp->tempat_lahir ?>">
                                    </div>
                                    <?= form_error('tempatlahir', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="tanggallahir" placeholder="Tanggal Lahir" value="<?= $tmp->tanggal_lahir ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="jk" id="jklk" value="Laki-laki" required="true" checked>
                                                Laki-Laki
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="jk" id="jkpr" value="Perempuan" required="true">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="agama">
                                            <option value="Agama">-Pilih Agama-</option>
                                            <option>Buddha</option>
                                            <option>Hindu</option>
                                            <option>Islam</option>
                                            <option>Katolik</option>
                                            <option>Konghucu</option>
                                            <option>Kristen</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleTextarea1" class="col-sm-3 col-form-label">Alamat Lengkap</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="alamat" rows="4" placeholder="Alamat" value=" "><?= $tmp->alamat ?></textarea>
                                    </div>
                                    <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nomor HP</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="nohp_siswa" placeholder="Nomor Hp Siswa" value="<?= $tmp->nohp_casis ?>" onpaste="return false">
                                    </div>
                                    <?= form_error('nohp_siswa', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <button type=" submit" class="btn btn-primary mr-2">Submit</button>
                                <button type="reset" class="btn btn-light">Cancel</button>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>


        </div>



    </div>