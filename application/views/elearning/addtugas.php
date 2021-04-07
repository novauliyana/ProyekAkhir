<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-primary">BUAT TUGAS</p>
                        <hr>
                        <form class="forms-sample" method="POST" action="<?= base_url('elearningguru/addtugas/' . $this->uri->segment('3')); ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id_mapel" value="<?= $this->uri->segment('3') ?>">
                                <label for="exampleInputUsername1">Judul </label>
                                <input type="text" class="form-control" name="judul_tugas">
                                <?= form_error('judul_tugas', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Deskripsi Tugas</label>
                                <input type="text" class="form-control" name="deskripsi">
                                <?= form_error('deskripsi', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Waktu Pengumpulan</label>
                                <input type="date" class="form-control" name="deadline">
                                <?= form_error('deadline', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">File</label>
                                <input type="file" class="form-control" name="file">
                            </div>

                            <center>
                                <button type="submit" class="btn btn-success btn-rounded">
                                    Submit
                                </button>
                                <button type="cancel" class="btn btn-danger btn-rounded">
                                    Batal
                                </button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>