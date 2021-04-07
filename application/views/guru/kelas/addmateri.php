<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h5>Tambah Materi</h5>
                        </center>
                        <br>
                        <form class="forms-sample" method="POST" action="<?= base_url('guru/addmateri/' . $this->uri->segment('3')); ?> " enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id_mapel" value="<?= $this->uri->segment('3') ?>">
                                <label for="exampleInputName1">Judul </label>
                                <input type="text" class="form-control" name="judul_materi" placeholder="Judul" value="<?= set_value('judul_materi') ?>">
                                <?= form_error('judul_materi', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" value="<?= set_value('judul_materi') ?>">

                            </div>
                            <div class="form-group">
                                <label>File upload</label>
                                <input type="file" name="image" class="form-control" value="<?= set_value('berkas') ?>">
                                <!-- <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div> -->
                                <?= form_error('image', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <center>
                                <button type="submit" class="btn btn-success btn-sm">
                                    Submit
                                </button>
                                <button type="cancel" class="btn btn-danger btn-sm">
                                    Batal
                                </button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>