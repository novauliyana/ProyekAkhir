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
                        <form class="forms-sample" method="POST" action="<?= base_url('guru/addulangan/' . $this->uri->segment('3')); ?> " enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id_mapel" value="<?= $this->uri->segment('3') ?>">
                                <label for="exampleInputName1">Judul </label>
                                <input type="text" class="form-control" name="judul_ulangan" placeholder="Judul" value="<?= set_value('judul_ulangan') ?>">
                                <?= form_error('judul_ulangan', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" value="<?= set_value('deskripsi') ?>">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tipe soal</label>
                                <select class="form-control" name="tipe" required>
                                    <option selected="selected" disabled="" value="">- Pilih Tipe Soal -</option>
                                    <option>Pilihan Ganda</option>
                                    <option>Essai</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Tanggal Pengumpulan</label>
                                <input type="date" class="form-control" name="deadline" placeholder="Deskripsi" value="<?= set_value('deadline') ?>">
                                <?= form_error('deadline', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Waktu Pengumpulan</label>
                                <input type="time" class="form-control" name="waktu" placeholder="Deskripsi" value="<?= set_value('waktu') ?>">
                                <?= form_error('waktu', '<small class="text-danger">', '</small>'); ?>
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
                    </div>
                </div>
            </div>
        </div>
    </div>