<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <?= $this->session->flashdata('message'); ?>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Soal Ulangan</h4>
                        <div class="table-responsive pt-3">
                            <td align="right">
                                <a href="<?= base_url('guru/add_soal_essai/') . $this->uri->segment('3') . '/' . $this->uri->segment('4') ?>">
                                    <button type="button" class="btn btn-primary btn-sm">
                                        Tambah
                                    </button></a>
                            </td>


                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="1%">No</th>
                                        <th width="50%">SOAL UJIAN</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($soal as $d) : ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $d['pertanyaan'] ?></td>
                                            <td>
                                                <a href="<?= base_url() . 'guru/edit_ujian_essai/' . $d['id_soal_esai']; ?>" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-edit" title="Ubah">Ubah</span></a> |

                                                <a href="<?= base_url() . 'guru/hapus_ujian_essai/' . $d['id_soal_esai'] . '/' . $d['id_ulangan'] . '/' . $d['id_mapel']; ?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash" onclick="return confirm('Apakah yakin data soal ini akan di hapus?')" title="Hapus">Hapus</span></a>



                                            </td>
                                        </tr>
                                    <?php $no++;
                                    endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>