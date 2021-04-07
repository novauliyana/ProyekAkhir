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
                    <h1>Video Profiling</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
            <?php foreach ($informasi as $vidio) : ?> 
                <div class="container">
                    <iframe width="900" height="400" src="<?php echo base_url();?>asseets/video/<?php echo $vidio->file?>"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!-- <?php endforeach;?> -->
            </div>
        </div>
    </div>

</div>
</div>