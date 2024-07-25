<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1>Data Berita</h1>
                        <div class="row g-2">
                            <div class="col-auto">
                                <button class="btn btn-md btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable"><i class=" fas fa-plus fa-sm"></i> Tambah Berita</button>
                            </div>
                            <div class="col-auto">
                                <div class="col-sm">
                                    <div class="navbar-form navbar-right">
                                        <?php echo form_open('data_berita/search') ?>
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
                                <th>Judul Berita</th>
                                <th>Diposting Oleh</th>
                                <th>Tanggal Berita</th>
                                <th>Isi Berita</th>
                                <th colspan="3">Aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($berita as $berita) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $berita->judul_berita ?></td>
                                    <td><?php echo $berita->posted_by ?></td>
                                    <td><?php echo ' ', date('d F Y', strtotime($berita->tanggal_berita)) ?></td>
                                    <td><?php $isi_brt = "$berita->isi_berita";
                                        $sub_brt = substr($isi_brt, 0, 200); ?>
                                        <?php echo $sub_brt, '....'; ?></td>
                                    <td>
                                        <?php echo anchor('data_berita/edit/' . $berita->id_berita, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?>
                                        <?php echo anchor('data_berita/hapus/' . $berita->id_berita, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
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
                <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Berita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'data_berita/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Judul Berita</label>
                        <input type="text" name="judul_berita" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Upload</label>
                        <input type="date" name="tanggal_berita" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Diposting Oleh</label>
                        <input type="text" name="posted_by" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Isi Berita</label>
                        <textarea name="isi_berita" id="isi_berita" cols="100" rows="17" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar Berita</label><br>
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