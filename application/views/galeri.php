<div class="container">
    <div class="row justify-content-center">
        <div class="title-row">
            <h1 style="text-align: center">Galeri</h1>
            <div class="navbar-form navbar-right">
                <div class="row g-2">
                    <div class="col-auto">
                        <?php echo form_open('galeri/search') ?>
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
            <?php if (!empty($galeri)) : ?>
                <?php foreach ($galeri as $item) : ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card text-bg-light pt-32 pb-32">
                            <img src="<?php echo base_url('uploads/' . $item->gambar) ?>" class="card-img-top" alt="gambar"> <br />
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item->nama_barang ?></h5>
                                <p class="card-text">
                                    <?php
                                    $deskripsi = $item->deskripsi;
                                    $max_length = 70;
                                    if (strlen($deskripsi) > $max_length) {
                                        $deskripsi = substr($deskripsi, 0, $max_length) . '...';
                                    }
                                    echo $deskripsi;
                                    ?>
                                </p>
                                <?php echo anchor('galeri/detail/' . $item->id_galeri, '<div class="btn btn--md btn--color" style="display: block; text-align: center;"><span>Baca Selengkapnya</span></div>') ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="col-12">
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>