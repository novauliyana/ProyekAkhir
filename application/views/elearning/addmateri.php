<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Materi</h4>
                        <form class="forms-sample" method="POST" action="<?= base_url('elearningguru/addmateri/' . $this->uri->segment('3')); ?> " enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id_mapel" value="<?= $this->uri->segment('3') ?>">
                                <input type="text" class="form-control" name="judul_materi" placeholder="Judul" value="<?= set_value('judul_materi') ?>">
                                <?= form_error('judul_materi', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="file" name="image" value="<?= set_value('image') ?>">
                            </div>
                            <?= form_error('image', '<small class="text-danger">', '</small>'); ?>
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