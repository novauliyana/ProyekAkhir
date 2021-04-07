<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">DATA PRIBADI GURU</h4>
                        <form class="form-sample" method="POST" action="<?= base_url('guru/ubah_profil/' . $this->session->userdata('username')); ?> " enctype="multipart/form-data">
                            <?php foreach ($guru as $sia) : ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">NIP</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="<?= $sia['nip']; ?>" disabled>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="<?= $sia['nama_guru']; ?>" name="nama">
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
                                                <input class="form-control" placeholder="dd/mm/yyyy" type="date" value="<?= $sia['tanggal_lahir'] ?>" name="tanggal_lahir">
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
                                                <input type="text" class="form-control" value="<?= $sia['telp_guru'] ?>" name="telp_guru">
                                                <?= form_error('telp_guru', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-9">
                                                <input type="text" disabled class="form-control" name="jenis_kelamin" value="<?= $sia['jenis_kelamin'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Foto</label>
                                            <div class="col-sm-9">
                                                <img src="<?= base_url() . $sia['foto_guru']; ?>" width="200" height="200" class="img-tumbnail"></<img>
                                                <input type="file" class="form-control" value="<?= base_url() . $sia['foto_guru'] ?>" name="foto_guru">
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
                                    <button type="submit" class="btn btn-primary mr-2" value="">Edit</button>
                                    <button class="btn btn-light" type="cancel">Cancel</button>
                                </div>
                            <?php endforeach; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>