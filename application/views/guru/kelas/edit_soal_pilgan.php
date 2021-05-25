<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h5>Tambah Ulangan</h5>
                        </center>
                        <br>
                        <form action="<?= base_url('guru/update_ujian_pilgan') ?>" method="post">
                            <?php foreach ($soal as $s) : ?>
                                <div class="box-body">
                                    <input type="hidden" class="form-control" name="id_soal" value="<?= $s['id_soal'] ?>">
                                    <input type="hidden" class="form-control" name="id_ujian" value="<?= $s['id_ulangan'] ?>">
                                    <input type="hidden" class="form-control" name="id_mapel" value="<?= $s['id_mapel'] ?>">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label>Pertanyaan</label>
                                            <textarea class="form-control" name="soal" rows="4" placeholder="Masukkan pertanyaan"><?= $s['pertanyaan'] ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Jawaban A</label>
                                            <textarea class="form-control" rows="2" name="a" required><?= $s['option_a'] ?></textarea>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Jawaban B</label>
                                            <textarea class="form-control" rows="2" name="b" required><?= $s['option_b'] ?></textarea>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Jawaban C</label>
                                            <textarea class="form-control" rows="2" name="c" required><?= $s['option_c'] ?></textarea>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Jawaban D</label>
                                            <textarea class="form-control" rows="2" name="d" required><?= $s['option_d'] ?></textarea>

                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Kunci Jawaban</label>
                                            <select class="form-control" name="kunci">
                                                <option <?php if ($s['kunci_jawaban'] == 'A') {
                                                            echo "selected='selected'";
                                                        } ?>>A</option>
                                                <option <?php if ($s['kunci_jawaban'] == 'B') {
                                                            echo "selected='selected'";
                                                        } ?>>B</option>
                                                <option <?php if ($s['kunci_jawaban'] == 'C') {
                                                            echo "selected='selected'";
                                                        } ?>>C</option>
                                                <option <?php if ($s['kunci_jawaban'] == 'D') {
                                                            echo "selected='selected'";
                                                        } ?>>D</option>
                                            </select>
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