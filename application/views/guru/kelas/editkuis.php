<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Kuis</h4>
                        <?php foreach ($kuis as $materi) : ?>
                            <form class="forms-sample" method="POST" action="<?= base_url('guru/edit_kuis/'  . $this->uri->segment('3') . '/' . $this->uri->segment('4')); ?> " enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id_mapel" value="<?= $this->uri->segment('4') ?>">
                                    <input type="hidden" name="id_kuis" value="<?= $materi['id_kuis']; ?>">
                                    <label for="exampleInputName1">Judul</label>
                                    <input type="text" class="form-control" name="judul_kuis" placeholder="Judul" value="<?= $materi['judul_kuis']; ?>">
                                    <?= form_error('judul_kuis', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Deskripsi</label>
                                    <input type="text" class="form-control" name="deskripsi" placeholder="deskripsi" value="<?= $materi['deskripsi']; ?>">
                                    <?= form_error('deskripsi', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Tanggal Pengumpulan</label>
                                    <input type="date" class="form-control" name="deadline" placeholder="deskripsi" value="<?= $materi['deadline']; ?>">
                                    <?= form_error('deskripsi', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Deskripsi</label>
                                    <input type="time" class="form-control" name="waktu" placeholder="deskripsi" value="<?= $materi['waktu']; ?>">
                                    <?= form_error('deskripsi', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Upload File</label>
                                    <file src="<?= base_url() . $materi['file'] ?>"></file>
                                    <input type="file" name="image" value="<?= $materi['file'] ?>" class="form-control">
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
                        <?php endforeach;  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>