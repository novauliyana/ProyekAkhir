<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-primary">BUAT UJIAN</p>
                        <hr>
                        <form class="forms-sample" method="POST" action="<?= base_url('elearningguru/addulangan/' . $this->uri->segment('3')); ?> " enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id_mapel" value="<?= $this->uri->segment('3') ?>">
                                <label for="exampleInputUsername1">Judul </label>
                                <input type="text" class="form-control" id="exampleInputUsername1" name="judul_ulangan">
                                <?= form_error('judul_ulangan', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Deskripsi</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="deskripsi">
                                <?= form_error('deskripsi', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Deadline</label>
                                <input type="date" class="form-control" id="exampleInputEmail1" name="deadline">
                                <?= form_error('deadline', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">File</label>
                                <input type="file" class="form-control" id="exampleInputEmail1" name="file">
                                <!-- <?= form_error('file', '<small class="text-danger">', '</small>'); ?> -->
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