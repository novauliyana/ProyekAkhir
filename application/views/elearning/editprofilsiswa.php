<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">DATA PRIBADI SISWA</h4>
                        <form class="form-sample" method="POST" action="<?= base_url('elearningsiswa/ubah_profil/' . $this->session->userdata('username')); ?> " enctype="multipart/form-data">
                            <?php foreach ($siswa as $sia) : ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">NIS</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" disabled value="<?= $sia['nis']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="<?= $sia['nama_siswa']; ?>" name="nama">
                                                <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="<?= $sia['tempat_lahir'] ?>" name="tempat_lahir">
                                                <?= form_error('tempat_lahir', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="date" placeholder="dd/mm/yyyy" value="<?= $sia['tanggal_lahir'] ?>" name="tanggal_lahir">
                                                <?= form_error('tanggal_lahir', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">No Hp</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="<?= $sia['nohp_siswa'] ?>" name="nohp_siswa">
                                                <?= form_error('nohp_siswa', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-9">

                                                <input type="text" class="form-control" name="jenis_kelamin" value="<?= $sia['jenis_kelamin'] ?>" disabled>

                                                </input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Agama</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="<?= $sia['agama'] ?>" name="agama">
                                                <?= form_error('agama', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Alamat</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" name="alamat"><?= $sia['alamat'] ?></textarea>
                                                <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Foto</label>
                                            <div class="col-sm-9">
                                                <img src="<?= base_url() . $sia['foto_siswa']; ?>" width="200" height="200" class="img-tcircle"></<img>
                                                <input type="file" class="form-control" value="<?= $sia['foto_siswa'] ?>" name="foto_siswa">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2" value="">Edit</button>
                                <button class="btn btn-light" type="cancel">Cancel</button>
                    </div>
                <?php endforeach; ?>
                </form>
                </div>
            </div>
        </div>
    </div>