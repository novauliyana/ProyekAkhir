<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row">
                </div>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href=""> <img src="<?= base_url() . $user['image']; ?>" class="card-img"></a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4> Profil</h4><br>
                                <p><b>Nama : </b><?= $user['username']; ?></p>
                                <p><b>Email : </b><?= $user['email']; ?></p>

                                <td><?php echo anchor(
                                        'guru/ubah_profil/' . $user['username'],
                                        '<div class="btn btn-warning btn-sm">Ubah Profil</div>'
                                    ) ?></td>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>