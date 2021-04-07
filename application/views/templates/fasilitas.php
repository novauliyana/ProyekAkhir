<!-- Services -->

<div class="services page_section">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Fasilitas</h1>
                </div>
            </div>
        </div>

        <div class="row services_row">
        <?php foreach ($fasilitas as $fas) : ?>
            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <!-- <div class="icon_container">
                    <img src="<?php echo base_url();?>assests/images/<?php echo $fas->gambar?>" alt="">
                </div> -->
                <img src="<?php echo base_url();?>assets/images/<?php echo $fas->gambar?>" width="200" height="130">
                <h3><?php echo $fas->judul?></h3>
                <p><?php echo $fas->deskripsi_gambar?></p>
            </div>
            <?php endforeach;?>
            
        </div>
    </div>
</div>