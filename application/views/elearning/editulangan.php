<!-- partial -->


<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Ulangan</h4>
                        <p class="card-description">

                        </p>
                        <?php foreach ($ulangan as $sia) : ?>
                            <form class="forms-sample" method="POST" action="<?= base_url('elearningguru/edit_ulangan/' . $this->uri->segment('3') . '/' . $this->uri->segment('4')); ?> " enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id_mapel" value="<?= $this->uri->segment('4') ?>">
                                    <input type="hidden" name="id_ulangan" value="<?= $sia['id_ulangan']; ?>">
                                    <label for="exampleInputUsername1">Judul </label>
                                    <input type="text" class="form-control" name="judul_ulangan" value="<?= $sia['judul_ulangan'] ?>">
                                    <?= form_error('judul_ulangan', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Deskripsi Ulangan</label>
                                    <input type="text" class="form-control" name="deskripsi" value="<?= $sia['deskripsi'] ?>">
                                    <?= form_error('deskripsi', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Waktu Pengumpulan</label>
                                    <input type="date" class="form-control" name="deadline" value="<?= $sia['deadline'] ?>">
                                    <?= form_error('deadline', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">File</label>
                                    <input type="file" class="form-control" name="file" value="<?= $sia['file'] ?>">
                                </div>

                                <center>
                                    <button type="submit" class="btn btn-success btn-rounded" value="">Edit</button>
                                    <button type="cancel" class="btn btn-danger btn-rounded" value="cancel">Cancel</button>
                                </center>
                            </form>
                        <?php endforeach;  ?>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
</div>

</div>