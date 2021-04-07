<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-4">PEMBAYARAN PENDIDIKAN SMA X TAHUN AJARAN 2020-2021</h3>
                        Silahkan isi form dibawah ini untuk mengkonfirmasi Pembayaran <br><br>

                        <i class="mdi mdi-credit-card" aria-hidden="true">&nbsp; Bank Mandiri : 999120102010</i> &nbsp;
                        <i class="mdi mdi-credit-card" aria-hidden="true">&nbsp; Bank BNI : 12344444523</i> <br><br>
                        <br><br>
                        <form class="pt-3" method="POST" action="<?= base_url('Elearningsiswa/bukti_pembayaran'); ?>" enctype="multipart/form-data">
                            <?= $this->session->flashdata('message'); ?>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Pembayaran</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="jenis_bayaran">
                                        <option value="Bayar">-Pilih Jenis-</option>
                                        <option>Uang Sekolah</option>
                                        <option>Uang Sarana</option>
                                        <option>Uang Buku</option>
                                        <option>Uang Seragam</option>
                                        <option>Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Pemilik Rekening</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_rekening" placeholder="Nama Pemilik Rekening">
                                </div>
                                <?= form_error('nama_rekening', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Jumlah Yang Dibayar</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="jumlah_bayaran" placeholder="Jumlah Yang dibayar">
                                </div>
                                <?= form_error('jumlah_bayaran', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Upload Bukti Pembayaran</label>
                                <div class="col-sm-9">
                                    <?php echo form_open_multipart('Elearningsiswa/do_upload'); ?>
                                    <input class="form-control" name="bukti_pembayaran" type="file" value="" placeholder="">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-light">Cancel</button>
                    </div>
                </div>
            </div>


        </div>



    </div>