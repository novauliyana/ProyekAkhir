<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-4">Pengaturan Akun Siswa</h3>
                        <?php foreach ($us as $tmp) : ?>
                            <form class="pt-3" method="POST" action="<?= base_url('Elearningsiswa/ubah_profil'); ?>" enctype="multipart/form-data">
                                <?= $this->session->flashdata('message'); ?>
                                <div class=" form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="username" disabled name="username" placeholder="Username" value="<?= $tmp->username ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" disabled value="<?= $tmp->email ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Edit Foto Profil</label>
                                    <div class="col-sm-9">
                                        <input type="checkbox" name="check_ubah" class="">Ceklis jika ingin mengubah foto <br>
                                        <?php echo form_open_multipart('Elearningsiswa/do_upload'); ?>
                                        <input class="form-control" name="foto_profil_baru" type="file" value="" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="pwd" placeholder="Password" value="" name="password">
                                    </div>
                                </div>
                                <button type=" submit" class="btn btn-primary mr-2">Save</button>
                                <button type="reset" class="btn btn-light">Cancel</button>

                            </form>
                        <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>


        </div>



    </div>