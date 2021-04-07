<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">


        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">My Profile</h4>
                        <hr>

                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/login/images/profile/') . $user['image']; ?> " width="60px" height="180px" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $user['username']; ?></h5>
                                        <p class="card-text"><?= $user['email']; ?></p>
                                        <p class="card-text"><small class="text-muted">Status <?= $user['role_id'] ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>



        </div>




    </div>