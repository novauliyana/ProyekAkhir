<!-- partial -->


<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Video</h4>
                        <p class="card-description">

                        </p>
                        <?php foreach ($video as $sia) : ?>
                            <form class="forms-sample" method="POST" action="<?= base_url('elearningguru/edit_video/' . $this->uri->segment('3') . '/' . $this->uri->segment('4')); ?> " enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id_mapel" value="<?= $this->uri->segment('4') ?>">
                                    <input type="hidden" name="id_video" value="<?= $sia['id_video']; ?>">
                                    <label for="exampleInputUsername1"></label>
                                    <input type="text" class="form-control" name="judul_video" placeholder="Judul" value="<?= $sia['judul_video']; ?>">
                                    <?= form_error('judul_video', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"></label>
                                    <video src="<?= base_url() . $sia['berkas'] ?>" style="max-width: 200px " style="max-height: 200px"></video><br>
                                    <input type="file" name="image" value="<?= $sia['berkas'] ?>">
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