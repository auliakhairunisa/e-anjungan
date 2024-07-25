<div class="container">
    <div class="row justify-content-center">
        <div class="title-row">
            <h1 style="text-align: center">Berita</h1>
            <div class="navbar-form navbar-right">
                <div class="row g-2">
                    <div class="col-auto">
                        <?php echo form_open('berita/search') ?>
                        <input type="text" name="keyword" class="form-control" placeholder="Search">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn--md btn--color">Cari</button>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
            <?php if (!empty($message)) : ?>
                <div class="alert alert-warning mt-3" role="alert">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="row">
            <?php if (!empty($berita)) : ?>
                <?php foreach ($berita as $item) : ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card text-bg-light pt-32 pb-32">
                            <img src="<?php echo base_url('uploads/' . $item->gambar) ?>" class="card-img-top" alt="gambar"> <br />
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item->judul_berita ?></h5>
                                <p>
                                    <button class="btn btn--md btn--light"><?php echo $item->posted_by ?></button>
                                    <?php echo ' ', date('d F Y', strtotime($item->tanggal_berita)) ?>
                                </p>
                                <p class="card-text">
                                    <?php
                                    $isi_berita = $item->isi_berita;
                                    $max_length = 70;
                                    if (strlen($isi_berita) > $max_length) {
                                        $isi_berita = substr($isi_berita, 0, $max_length) . '...';
                                    }
                                    echo $isi_berita;
                                    ?>
                                </p>
                                <?php echo anchor('berita/detail/' . $item->id_berita, '<div class="btn btn--md btn--color" style="display: block; text-align: center;"><span>Baca Selengkapnya</span></div>') ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="col-12">
                </div>
        </div>
    <?php endif; ?>
    </div>
</div>
</div>