<!-- Events -->

<div class="events page_section">
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Acara Mendatang</h1>
                </div>
            </div>
        </div>

        <div class="event_items">
        <?php foreach ($acara as $acar) : ?>
            <!-- Event Item -->
            <div class="row event_item">
            
                <div class="col">
                    <div class="row d-flex flex-row align-items-end">
                    
                        <div class="col-lg-2 order-lg-1 order-2">
                            <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                <div class="event_day"><?php echo $acar->tanggal_acara?></div>
                                <!-- <div class="event_month">January</div> -->
                            </div>
                        </div>

                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="event_content">
                                <div class="event_name"><a class="trans_200" href="#"><?php echo $acar->judul_acara?></a></div>
                                <div class="event_location"><?php echo $acar->lokasi?></div>
                                <p><?php echo $acar->deskripsi_acara?></p>
                            </div>
                        </div>

                        <div class="col-lg-4 order-lg-3 order-1">
                            <div class="event_image">
                            <img src="<?php echo base_url();?>assets/acara/<?php echo $acar->foto_acara?>">
                            </div>
                        </div>
                        
                    </div>
                </div>
               
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>