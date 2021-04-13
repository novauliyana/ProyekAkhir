<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <?php foreach ($siswa as $tmp) : ?>
                    <div class="card-body">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Profil <?= $tmp->nama ?></h2>

                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="card-body">
                    <?php foreach ($data_siswa as $sia) : ?>
                        <form class="form-sample">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">NIS</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $sia->nis; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">NISN</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $sia->nisn; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $sia->nama_lengkap ?>" name="nama">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="jenis_kelamin" value="<?= $sia->jenis_kelamin ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $sia->tempat_lahir ?>" name="tempat_lahir">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="date" placeholder="dd/mm/yyyy" value="<?= $sia->tanggal_lahir ?>" name="tanggal_lahir">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="alamat"><?= $sia->alamat ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomor Handphone</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $sia->no_hp ?>" name="nohp_siswa">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>

</div>