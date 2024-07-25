<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1>Data Pengunjung</h1>
                        <div class="row g-2">
                            <div class="col-auto">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#filterModal">Export PDF</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="zero-conf" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pengunjung</th>
                                    <th>Tipe Pengunjung</th>
                                    <th>Asal Daerah</th>
                                    <th>Tanggal Kunjungan</th>
                                    <th>Kesan</th>
                                    <th>Pesan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pgj as $pgj) : ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $pgj->nama ?></td>
                                        <td><?php echo $pgj->tipe_pengunjung ?></td>
                                        <td><?php echo $pgj->asal ?></td>
                                        <td><?php echo ' ', date('d F Y', strtotime($pgj->tanggal)) ?></td>
                                        <td><?php echo $pgj->kesan ?></td>
                                        <td><?php echo $pgj->pesan ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal Filter -->
<div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="filterModalLabel">Filter Data Pengunjung</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="filterForm">
                    <div class="mb-3">
                        <label for="filterType" class="form-label">Tipe Filter</label>
                        <select class="form-control" id="filterType" name="filterType" required>
                            <option value="">Pilih Tipe Filter</option>
                            <option value="tahun">Tahun</option>
                            <option value="bulanTahun">Bulan dan Tahun</option>
                        </select>
                    </div>
                    <div class="mb-3" id="bulanDiv" style="display:none;">
                        <label for="bulan" class="form-label">Bulan</label>
                        <select class="form-control" id="bulan" name="bulan">
                            <option value="">Pilih Bulan</option>
                            <?php for ($i = 1; $i <= 12; $i++) : ?>
                                <option value="<?php echo $i; ?>"><?php echo date('F', mktime(0, 0, 0, $i, 10)); ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <select class="form-control" id="tahun" name="tahun" required>
                            <option value="">Pilih Tahun</option>
                            <?php for ($i = date('Y'); $i >= 2023; $i--) : ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Terapkan Filter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('filterType').addEventListener('change', function() {
        var filterType = this.value;
        var bulanDiv = document.getElementById('bulanDiv');
        if (filterType === 'bulanTahun') {
            bulanDiv.style.display = 'block';
        } else {
            bulanDiv.style.display = 'none';
        }
    });

    document.getElementById('filterForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var filterType = document.getElementById('filterType').value;
        var bulan = document.getElementById('bulan').value;
        var tahun = document.getElementById('tahun').value;

        var url = "<?php echo site_url('data_pengunjung/pdf'); ?>";

        if (filterType === 'tahun') {
            url += "?tahun=" + tahun;
        } else if (filterType === 'bulanTahun') {
            url += "?bulan=" + bulan + "&tahun=" + tahun;
        }

        window.location.href = url;
    });

    $(document).ready(function() {
        $('#pengunjungTable').DataTable();
    });
</script>