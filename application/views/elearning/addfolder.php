<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Folder</h4>
                        <form class="forms-sample" method="POST" action="<?= base_url('elearningguru/addfolder/' . $this->uri->segment('3')); ?> " enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id_mapel" value="<?= $this->uri->segment('3') ?>">
                                <input type="text" class="form-control" name="judul" placeholder="Judul" value="<?= set_value('judul') ?>">
                                <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
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