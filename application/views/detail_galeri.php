<section class="page-title page-title--tall blog-featured-img bg-dark-overlay text-center" style="background-image: url(<?= base_url('assets/') ?>front-end/img/services/single/3.jpg);">
    <div class="container">
        <?php foreach ($galeri as $galeri) : ?>
            <div class="page-title__holder">
                <h1 class="page-title__title"><?php echo $galeri->nama_barang ?></h1>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<section class="section-wrap pt-40 pb-48">

    <div class="box-offset-container">
        <div class="blog__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">

                        <!-- Article -->
                        <article class="entry mb-0">
                            <div class="entry__article-wrap">
                                <div class="entry__article">
                                    <p><img src="<?php echo base_url() . '/uploads/' . $galeri->gambar ?>" alt=""><br></p>
                                    <p><?php echo $galeri->deskripsi ?></p>
                                </div>
                                <!-- end entry article -->
                            </div>
                            <!-- end entry article wrap -->
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>