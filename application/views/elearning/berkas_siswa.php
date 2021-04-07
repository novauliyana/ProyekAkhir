<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-4">UPLOAD BERKAS SISWA</h3>
                        <p>Silahkan Upload hasil scan dokumen dibawah ini. berformat JPG, PNG, JPEG</p>
                        <form class="pt-3" method="POST" action="<?= base_url('Elearningsiswa/upload_berkas'); ?>" enctype="multipart/form-data">
                            <?= $this->session->flashdata('message'); ?>
                            <div class="form-group">
                                <label>Kartu Keluarga</label>
                                <?php echo form_open_multipart('Elearningsiswa/do_upload'); ?>
                                <input class="form-control" name="kartu_keluarga" type="file" value="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Akte Kelahiran</label>
                                <?php echo form_open_multipart('Elearningsiswa/do_upload'); ?>
                                <input class="form-control" name="akte_kelahiran" type="file" value="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Ijazah</label>
                                <?php echo form_open_multipart('Elearningsiswa/do_upload'); ?>
                                <input class="form-control" name="ijazah" type="file" value="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>KTP Orang Tua</label>
                                <?php echo form_open_multipart('Elearningsiswa/do_upload'); ?>
                                <input class="form-control" name="ktp_ortu" type="file" value="" placeholder="">
                            </div>

                            <button type="submit" class="btn btn-primary btn-icon-text">
                                <i class="mdi mdi-file-check btn-icon-prepend"></i>
                                Submit
                            </button>
                            <button type="reset" class="btn btn-warning btn-icon-text">
                                <i class="mdi mdi-reload btn-icon-prepend"></i>
                                Reset
                            </button>
                    </div>
                </div>
            </div>


        </div>



    </div>