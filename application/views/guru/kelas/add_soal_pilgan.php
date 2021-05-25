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
                        <form action="<?= base_url('guru/insert_ujian_pilgan') ?>" method="post">
                            <div class="box-body">
                                <input type="hidden" class="form-control" name="id_ulangan" value="<?= $this->uri->segment('3') ?>">
                                <input type="hidden" class="form-control" name="id_mapel" value="<?= $this->uri->segment('4') ?>">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label>Pertanyaan</label>
                                        <textarea class="form-control" name="soal" rows="4" placeholder="Masukkan pertanyaan"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Jawaban A</label>
                                        <textarea class="form-control" rows="2" name="a" required></textarea>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Jawaban B</label>
                                        <textarea class="form-control" rows="2" name="b" required></textarea>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Jawaban C</label>
                                        <textarea class="form-control" rows="2" name="c" required></textarea>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Jawaban D</label>
                                        <textarea class="form-control" rows="2" name="d" required></textarea>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Kunci Jawaban</label>
                                        <select class="form-control" name="kunci" required>
                                            <option selected="selected" disabled="" value="">- Pilih Kunci Jawaban -</option>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>D</option>
                                        </select>
                                    </div>
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