<div class="content-wrapper content-wrapper--boxed oh">

    <div class="rev-offset"></div>

    <!-- Revolution Slider -->
    <div class="rev_slider_wrapper">
        <div class="rev_slider" id="slider-1" data-version="5.0">
            <ul>
                <?php foreach ($slider as $slide) : ?>
                    <li data-fstransition="fade" data-transition="fade" data-easein="default" data-easeout="default" data-slotamount="1" data-masterspeed="1200" data-delay="8000" data-title="<?= $slide->nama_barang ?>">
                        <!-- MAIN IMAGE -->
                        <img src="<?= base_url('uploads/' . $slide->gambar) ?>" alt="" data-bgrepeat="no-repeat" data-bgfit="cover" data-bgparallax="7" class="rev-slidebg">

                        <!-- HERO TITLE -->
                        <div class="tp-caption hero-text" data-x="30" data-y="center" data-voffset="[-100,-120,-100,-180]" data-fontsize="[72,62,52,46]" data-lineheight="0" data-width="[none, none, none, 300]" data-whitespace="[nowrap, nowrap, nowrap, normal]" data-frames='[{
                                    "delay":1000,
                                    "speed":900,
                                    "frame":"0",
                                    "from":"y:150px;opacity:0;",
                                    "ease":"Power3.easeOut",
                                    "to":"o:1;"
                                    },{
                                    "delay":"wait",
                                    "speed":1000,
                                    "frame":"999",
                                    "to":"opacity:0;","ease":"Power3.easeOut"
                                }]' data-splitout="none"><?= $slide->nama_barang ?><span class="hero-dot">.</span>
                        </div>

                        <!-- BUTTON -->
                        <div class="tp-caption" data-x="30" data-y="center" data-voffset="0" data-lineheight="55" data-hoffset="0" data-frames='[{
                                        "delay":1200,
                                        "speed":900,
                                        "frame":"0",
                                        "from":"y:150px;opacity:0;",
                                        "ease":"Power3.easeOut",
                                        "to":"o:1;"
                                        },{
                                        "delay":"wait",
                                        "speed":1000,
                                        "frame":"999",
                                        "to":"opacity:0;","ease":"Power3.easeOut"
                                    }]'><a href='<?= base_url('galeri/detail/' . $slide->id_galeri) ?>' class='btn btn--lg btn--color'>Selengkapnya</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <!-- Intro -->
    <section class="section-wrap intro pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="<?= base_url('assets/') ?>front-end/img/kaban.jpg" alt="" width="300px" height="400px">
                </div>
                <div class="col-lg-7 mt-24">
                    <h2 class="intro_title">Selamat Datang</h2>
                    <p>Dengan bangga kami membuka pintu virtual ini untuk memperkenalkan keindahan dan kekayaan budaya Sumatera Barat kepada Anda. Di sini, Anda akan menemukan tempat wisata yang memikat, kegiatan menarik, dan pengalaman yang tak terlupakan. Dari keindahan alamnya hingga kelezatan kuliner tradisionalnya, Anjungan Sumatera Barat siap memanjakan setiap pengunjung. Kami berkomitmen untuk memberikan pengalaman yang autentik dan memuaskan bagi setiap tamu. Mari bersama-sama menjelajahi pesona dan keajaiban Sumatera Barat melalui situs web kami.</p>
                    <br>
                    <h6>Aschari Cahyaditama, S.STP., M.Soc.Sc., Ph.D</h6>
                    <p>Kepala Badan Penghubung Provinsi Sumatera Barat</p>
                </div>
            </div>
        </div>
    </section> <!-- end intro -->

    <!-- BERITA -->
    <section class="section-wrap pt-40 pb-40">
        <div class="container">
            <div class="title-row"> <br><br>
                <h2 class="section-title" style="text-align: center;">Berita</h2>
            </div>
            <div class="from-blog">
                <div class="row">
                    <?php foreach ($berita as $b) : ?>
                        <div class="col-lg-6">
                            <article class="entry">
                                <div class="entry__img-holder">
                                    <a href="<?= base_url('berita/detail/' . $b->id_berita) ?>">
                                        <img src="<?= base_url('uploads/' . $b->gambar) ?>" class="entry__img" alt="">
                                    </a>
                                </div>
                                <div class="entry__body">
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <span><?= date('d F Y', strtotime($b->tanggal_berita)) ?></span>
                                        </li>
                                    </ul>
                                    <h4 class="entry__title">
                                        <a href="<?= base_url('berita/detail/' . $b->id_berita) ?>"><?= $b->judul_berita ?></a>
                                    </h4>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="text-center">
                    <a href="<?= base_url('berita') ?>" class="btn btn--lg btn--color">
                        <span>Lihat Selengkapnya</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- GALERI -->
    <section class="section-wrap pt-0">
        <div class="container">
            <div class="title-row"> <br><br>
                <h2 class="section-title" style="text-align: center;">Galeri</h2>
            </div>
            <div class="from-blog">
                <div class="row">
                    <?php foreach ($galeri as $g) : ?>
                        <div class="col-lg-6">
                            <article class="entry">
                                <div class="entry__img-holder">
                                    <a href="<?= base_url('galeri/detail/' . $g->id_galeri) ?>">
                                        <img src="<?= base_url('uploads/' . $g->gambar) ?>" class="entry__img" alt="">
                                    </a>
                                </div>
                                <div class="entry__body">
                                    <h4 class="entry__title">
                                        <a href="<?= base_url('galeri/detail/' . $g->id_galeri) ?>"><?= $g->nama_barang ?></a>
                                    </h4>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="text-center">
                    <a href="<?= base_url('galeri') ?>" class="btn btn--lg btn--color">
                        <span>Lihat Selengkapnya</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end of GALERI -->