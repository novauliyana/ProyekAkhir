<!-- Home -->

<div class="home">
    <div class="home_background_container prlx_parent">
        <div class="home_background prlx" style="background-image:url(../assets/templates/images/news_background.jpg)"></div>
    </div>
    <div class="home_content">
        <h1>The News</h1>
    </div>
</div>

<!-- News -->

<div class="news">
    <div class="container">
        <div class="row">
        <?php foreach ($berita as $news) : ?>
            <div class="col-lg-12">
                <div class="news_posts">
                    <div class="news_post">
                        <div class="news_post_image">
                            <img src="<?php echo base_url();?>assets/berita/<?php echo $news->foto_berita?>">
                        </div>
                        
                        <div class="news_post_top d-flex flex-column flex-sm-row">
                            <div class="news_post_date_container">
                                <div class="news_post_date d-flex flex-column align-items-center justify-content-center">
                                    <div><center><?php echo $news->tanggal?></center></div>
                                </div>
                            </div>
                        
                            <div class="news_post_title_container">
                                <div class="news_post_title">
                                    <a href="#"><?php echo $news->judul_berita?></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="news_post_text">
                            <p><?php echo $news->teks_berita?></p>
                        </div>
                        
                        <div class="news_post_button text-center trans_200">
                            <a href="news_post.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>