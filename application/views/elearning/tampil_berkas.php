<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <?php foreach ($as as $tmp) : ?>
                            <h3 class="mb-4">BERKAS SISWA</h3>
                            <form class="pt-3" method="POST" action="<?= base_url('Elearningsiswa/upload_berkas'); ?>" enctype="multipart/form-data">
                                <?= $this->session->flashdata('message'); ?>
                                <div class="form-group">
                                    <label>Kartu Keluarga</label>
                                    <?php echo form_open_multipart('Elearningsiswa/do_upload'); ?>
                                    <div class="input-group col-xs-12">
                                        <input class="form-control" name="kartu_keluarga" type="text" value="<?= $tmp->kartu_keluarga ?>" placeholder="">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#kk">Buka Gambar</button>

                                        </span>
                                    </div>
                                    <div id="kk" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- konten modal-->
                                            <div class="modal-content">
                                                <!-- heading modal -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Kartu Keluarga</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <!-- body modal -->
                                                <div class="modal-body">
                                                    <img src="<?= $tmp->kartu_keluarga ?>" alt="" width="100px" height="100px">
                                                </div>
                                                <!-- footer modal -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Akte Kelahiran</label>
                                    <?php echo form_open_multipart('Elearningsiswa/do_upload'); ?>
                                    <div class="input-group col-xs-12">
                                        <input class="form-control" name="akte_kelahiran" type="text" value="<?= $tmp->akte_kelahiran ?>" placeholder="">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#akte">Buka Gambar</button>

                                        </span>
                                    </div>
                                    <div id="akte" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- konten modal-->
                                            <div class="modal-content">
                                                <!-- heading modal -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Akte Kelahiran</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <!-- body modal -->
                                                <div class="modal-body">
                                                    <img src="<?= $tmp->akte_kelahiran ?>" alt="" width="100px" height="100px">
                                                </div>
                                                <!-- footer modal -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Ijazah</label>
                                    <?php echo form_open_multipart('Elearningsiswa/do_upload'); ?>
                                    <div class="input-group col-xs-12">
                                        <input class="form-control" name="ijazah" type="text" value="<?= $tmp->ijazah ?>" placeholder="">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#ijazah">Buka Gambar</button>

                                        </span>
                                    </div>
                                    <div id="ijazah" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- konten modal-->
                                            <div class="modal-content">
                                                <!-- heading modal -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ijazah</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <!-- body modal -->
                                                <div class="modal-body">
                                                    <img src="<?= $tmp->ijazah ?>" alt="" width="100px" height="100px">
                                                </div>
                                                <!-- footer modal -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>KTP Orang Tua</label>
                                    <?php echo form_open_multipart('Elearningsiswa/do_upload'); ?>
                                    <div class="input-group col-xs-12">
                                        <input class="form-control" name="akte_kelahiran" type="text" value="<?= $tmp->ktp_ortu ?>" placeholder="">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#ktportu">Buka Gambar</button>

                                        </span>
                                    </div>
                                    <div id="ktportu" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- konten modal-->
                                            <div class="modal-content">
                                                <!-- heading modal -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">KTP Ortu</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <!-- body modal -->
                                                <div class="modal-body">
                                                    <img src="<?= $tmp->ktp_ortu ?>" alt="" width="100px" height="100px">
                                                </div>
                                                <!-- footer modal -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>


        </div>



    </div>