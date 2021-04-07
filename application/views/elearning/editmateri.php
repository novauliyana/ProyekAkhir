<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Materi</h4>
                        <?php foreach ($materi as $materi) : ?>
                            <form class="forms-sample" method="POST" action="<?= base_url('elearningguru/edit_materi/'  . $this->uri->segment('3') . '/' . $this->uri->segment('4')); ?> " enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id_mapel" value="<?= $this->uri->segment('4') ?>">
                                    <input type="hidden" name="id_materi" value="<?= $materi['id_materi']; ?>">
                                    <label for="exampleInputUsername1"></label>
                                    <input type="text" class="form-control" name="judul_materi" placeholder="Judul" value="<?= $materi['judul_materi']; ?>">
                                    <?= form_error('judul_materi', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"></label>
                                    <file src="<?= base_url() . $materi['berkas'] ?>"></file>
                                    <input type="file" name="image" value="<?= $materi['berkas'] ?>">
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
                        <?php endforeach;  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>