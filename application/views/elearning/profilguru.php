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
                                <br>
                                <h5 class="card-title text-primary">Selamat Datang <?= $user['username']; ?></h5>
                                <h5 class="card-text "><?= $user['email']; ?></h5>
                                <br>
                                <td><?php echo anchor(
                                        'elearningguru/ubah_profil/' . $user['username'],
                                        '<div class="btn btn-success btn-sm">Edit Profil</div>'
                                    ) ?></td>

                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>