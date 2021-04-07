<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Video</h4>
                        <form class="forms-sample" method="POST" action="<?= base_url('elearningguru/addvideo/' . $this->uri->segment('3')); ?>" enctype="multipart/form-data">

                            <div class="form-group">

                                <input type="hidden" class="form-control" name="id_mapel" value="<?= $this->uri->segment('3') ?>">

                                <label for="exampleInputUsername1"></label>
                                <input type="text" class="form-control" name="judul_video" placeholder="Judul">
                                <?= form_error('judul_video', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"></label>
                                <input type="file" name="image">
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