<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3><i class="fa fas-edit"></i>EDIT DATA BERITA</h3>
                        <?php foreach ($berita as $berita) : ?>
                            <form action="<?php echo base_url() . 'data_berita/update' ?>" method="post">
                                <div class="form-group">
                                    <label>Judul Berita</label>
                                    <input type="hidden" name="id_berita" class="form-control" value="<?php echo $berita->id_berita ?>" required>
                                    <input type="text" name="judul_berita" class="form-control" value="<?php echo $berita->judul_berita ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Berita</label>
                                    <input type="date" name="tanggal_berita" class="form-control" value="<?php echo date('Y-m-d', strtotime($berita->tanggal_berita)) ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Diposting Oleh</label>
                                    <input type="text" name="posted_by" class="form-control" value="<?php echo $berita->posted_by ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Isi Berita</label>
                                    <textarea name="isi_berita" id="isi_berita" cols="100" rows="17" class="form-control" required><?php echo $berita->isi_berita ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
                                <a href="<?php echo base_url('data_berita'); ?>" class="btn btn-secondary btn-sm mt-3">Batal</a>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>