<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3><i class="fa fas-edit"></i>Edit Data Aset</h3>
                        <?php foreach ($galeri as $galeri) : ?>
                            <form action="<?php echo base_url() . 'data_galeri/update' ?>" method="post">
                                <div class="form-group">
                                    <label>Nama Aset</label>
                                    <input type="text" name="nama_barang" class="form-control" value="<?php echo $galeri->nama_barang ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Aset</label>
                                    <textarea name="deskripsi" id="deskripsi" cols="100" rows="17" class="form-control" required><?php echo $galeri->deskripsi ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
                                <a href="<?php echo base_url('data_galeri'); ?>" class="btn btn-secondary btn-sm mt-3">Batal</a>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>