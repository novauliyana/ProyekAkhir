<!-- Testimonials -->

<div class="testimonials page_section">
    <!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
    <div class="testimonials_background_container prlx_parent">
        <div class="testimonials_background prlx" style="background-image:url(images/testimonials_background.jpg)"></div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Galeri</h1>
                </div>
            </div>
        </div>

        <div class="row">
        <?php foreach ($galeri as $gale) : ?>
            <div class="col-lg-10 offset-lg-1">
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">
                    <img src="<?php echo base_url();?>assets/galeri/<?php echo $gale->foto?>" class="d-block w-100">
                    </div>
                </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>