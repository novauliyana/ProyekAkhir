<div class="main-panel">
    <div class="content-wrapper">
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td width="100" valign="center">
                                    <?php foreach ($jumlahulangan as $jm) : ?>
                                        <h4>Ulangan</h4>
                                        <small><?= $jm->jmlhulangan; ?> Ulangan</small>
                                    <?php endforeach; ?></p>
                                </td>
                                <td align="right"><a href="<?= base_url('guru/addulangan/') . $this->uri->segment('3') ?>">
                                        <button type="button" class="btn btn-primary btn-sm">
                                            Tambah
                                        </button></a>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Ulangan</th>
                                    <th>Tanggal Ulangan</th>
                                    <th>Jenis Ulangan</th>
                                    <th>Waktu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php $no = 1;
                            foreach ($ulangan as $sia) : ?>
                                <tbody>
                                    <tr height="50">
                                        <td><?= $no ?></td>
                                        <td><?= $sia['judul_ulangan'] ?></td>
                                        <td><?= $sia['deadline'] ?></td>
                                        <td><?= $sia['tipe'] ?></td>
                                        <td><?= $sia['waktu'] ?></td>
                                        <td width="30%">
                                            <?php echo anchor('guru/lihat_ulangan/' . $sia['id_ulangan'] . '/' . $sia['id_mapel'], '<button type="button" class="btn btn-inverse-primary btn-icon">
                        <i class="mdi mdi-eye"></i>
                      </button>') ?>
                                            <?php echo anchor('guru/edit_ulangan/' . $sia['id_ulangan'] . '/' . $sia['id_mapel'], '<button type="button" class="btn btn-inverse-warning btn-icon">
                        <i class="mdi mdi-pencil"></i>
                      </button>') ?>
                                            <?php echo anchor('guru/hapus_ulangan/' . $sia['id_ulangan'] . '/' . $sia['id_mapel'], '<button type="button" class="btn btn-inverse-danger btn-icon">
                        <i class="mdi mdi-delete"></i>
                      </button>') ?></td>
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>