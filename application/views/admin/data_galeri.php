<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1>Data Galeri</h1>
                        <div class="row g-2">
                            <div class="col-auto">
                                <button class="btn btn-md btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable"><i class=" fas fa-plus fa-sm"></i> Tambah Aset</button>
                            </div>
                            <div class="col-auto">
                                <div class="col-sm">
                                    <div class="navbar-form navbar-right">
                                        <?php echo form_open('data_galeri/search') ?>
                                        <input type="text" name="keyword" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-md btn-primary">Cari</button>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nama Aset</th>
                                <th>Deskripsi Aset</th>
                                <th colspan="5">Aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($galeri as $galeri) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $galeri->nama_barang ?></td>
                                    <td><?php $isi_glr = "$galeri->deskripsi";
                                        $sub_glr = substr($isi_glr, 0, 200); ?>
                                        <?php echo $sub_glr, '....'; ?></td>
                                    <td>
                                        <?php echo anchor('data_galeri/edit/' . $galeri->id_galeri, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?>
                                        <?php echo anchor('data_galeri/hapus/' . $galeri->id_galeri, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<div class="modal fade" id="exampleModalScrollable" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Aset</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'data_galeri/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Aset</label>
                        <input type="text" name="nama_barang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Aset</label>
                        <textarea name="deskripsi" id="deskripsi" cols="100" rows="17" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar Aset</label><br>
                        <input type="file" name="gambar" class="form-control" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>