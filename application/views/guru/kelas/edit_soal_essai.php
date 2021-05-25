<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h5>Ulangan Essai</h5>
                        </center>
                        <br>
                        <form action="<?= base_url('guru/update_ujian_essai') ?>" method="post">
                            <?php foreach ($soal as $s) : ?>
                                <div class="box-body">
                                    <input type="hidden" class="form-control" name="id_soal" value="<?= $s['id_soal_esai'] ?>">
                                    <input type="hidden" class="form-control" name="id_ujian" value="<?= $s['id_ulangan'] ?>">
                                    <input type="hidden" class="form-control" name="id_mapel" value="<?= $s['id_mapel'] ?>">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label>Pertanyaan</label>
                                            <textarea class="form-control" name="soal" rows="4" placeholder="Masukkan pertanyaan"><?= $s['pertanyaan'] ?></textarea>
                                        </div>
                                    <?php endforeach; ?>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary btn-flat" title="Tambah Data Soal Ujian"><span class="fa fa-save"></span> Simpan</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>