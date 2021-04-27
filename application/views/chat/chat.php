<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h1><a href="<?= base_url('home/dashboard') ?>" class="btn btn-primary">
                            <<< </a>
                                nama

                    </h1>
                    <div id="tmp">
                        <div class="border rounded">
                            <?php
                            $id = $this->session->userdata('id');
                            foreach ($chats as $item) {
                            ?>
                                <?php if ($item->from == $id) { ?>
                                    <div class="text-right"><span class="mr-2 text-primary" style="font-size:22px;"><?= $item->message ?></span><br>
                                        <span style="font-size:11px;" class="text-secondary mr-2"><?= date('d-m-Y H:i:s', strtotime($item->created_at)) ?></span>
                                    </div>
                                <?php } else { ?>
                                    <div class="text-left"><span class="ml-2" style="font-size:22px;"><?= $item->message ?></span><br>
                                        <span style="font-size:11px;" class="text-secondary ml-2"><?= date('d-m-Y H:i:s', strtotime($item->created_at)) ?></span>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>

                    <form method="post" action="<?= base_url('home/chat/' . $to) ?>">
                        <div class="row">
                            <div class="col-10">
                                <input type="text" name="message" class="form-control" placeholder="Tulis Pesan Kamu">
                            </div>
                            <div class="col-2">
                                <button class="btn btn-primary btn-block">Kirim</button>
                            </div>
                        </div>
                    </form>


                    <script type="text/javascript">
                        myFunction();

                        function myFunction() {
                            setInterval(ajaxChat, 5000);
                        }

                        function ajaxChat() {
                            $.ajax({
                                url: "<?= base_url('home/ajax/' . $to) ?>",
                                success: function(result) {
                                    $("#tmp").html(result);
                                }
                            });
                        }
                    </script>

                </div>
            </div>