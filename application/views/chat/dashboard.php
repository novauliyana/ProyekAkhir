<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3>Your Friends</h3>

                    <div class="row">
                        <?php foreach ($users as $item) { ?>
                            <div class="card ml-2 mt-2" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $item->username ?></h5>
                                    <p class="card-text">Chat Saya</p>
                                    <a href="<?= base_url('home/chat/' . $item->id_user) ?>" class="btn btn-primary">Start Chat</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>