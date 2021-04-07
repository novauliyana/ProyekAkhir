<!-- Popular -->

<section id="profil">
    <div class="popular page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Profil Sekolah</h1>
                    </div>
                </div>
            </div>
            <?php foreach ($informasi as $profil) : ?>
            <div class="row course_boxes">
                            <?php echo $profil->deskripsi_informasi?>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>