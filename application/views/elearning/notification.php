<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Aktivitas terbaru</h4>
                        <div class="table-responsive pt-3">
                            <form>
                                <table class="table table-no-bordered">
                                    <?php foreach ($notif as $sia) : ?>
                                        <tr>
                                            <td>
                                                <b> <?= $sia['nama'] ?> </b><?= $sia['notif'] ?> di <b> <?= $sia['nama_kelas'] ?> | <?= $sia['nama_mapel'] ?> (<?= $sia['kode'] ?>)</b>

                                            </td>
                                            <td align="right">
                                                <?= $sia['tanggal'] ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>