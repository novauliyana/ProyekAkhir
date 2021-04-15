<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    <div class="mr-md-3 mr-xl-5">
                        <h2>Profil <?= $siswa['nama'] ?></h2>

                    </div>
                </div>
                <div class="card-body">
                    <?php foreach ($data_siswa as $sia) : ?>
                        <form class="form-sample" method="POST" action="<?= base_url('Home/ubah_profil/' . $this->session->userdata('id_user')); ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">NIS</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $sia['nis'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">NISN</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $sia['nisn'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $sia['nama_lengkap'] ?>" name="nama">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled name="jenis_kelamin" value="<?= $sia['jenis_kelamin'] ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $sia['tempat_lahir'] ?>" name="tempat_lahir">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="date" disabled placeholder="dd/mm/yyyy" value="<?= $sia['tanggal_lahir'] ?>" name="tanggal_lahir">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="alamat"><?= $sia['alamat'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomor Handphone</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $sia['no_hp'] ?>" name="nohp_siswa">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="username"><?= $sia['username'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $sia['password'] ?>" name="password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Foto</label>
                                        <div class="col-sm-9">
                                            <img src="<?= base_url() . $sia['image']; ?>" width="200" height="200" class="img-tumbnail"></<img>
                                            <?php echo form_open_multipart('Home/do_upload'); ?>
                                            <input type="file" class="form-control" value="<?= base_url() . $sia['image'] ?>" name="foto">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2" value="">Edit</button>
                            <button class="btn btn-light" type="cancel">Cancel</button>

                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>

</div>