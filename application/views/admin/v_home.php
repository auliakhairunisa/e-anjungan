<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h2 style="text-align:center">Dashboard Admin E-Anjungan</h2>
                        <div class="d-grid text-center">
                            <a class="btn btn-primary m-b-xs" href='<?= base_url('data_berita') ?>'>Berita</a>
                        </div>
                        <div class="d-grid text-center">
                            <a class="btn btn-primary m-b-xs" href='<?= base_url('data_galeri') ?>'>Galeri</a>
                        </div>
                        <div class="d-grid text-center">
                            <a class="btn btn-primary m-b-xs" href='<?= base_url('data_pengunjung') ?>'>Pengunjung</a>
                        </div>
                        <div class="d-grid text-center">
                            <a class="btn btn-success m-b-xs" href='<?= base_url('') ?>'>Kembali ke Anjungan</a>
                        </div>
                    </div>

                    <!-- Year Filter -->
                    <form method="get" action="<?= base_url('admin') ?>" class="mt-4 text-center">
                        <label for="year">Pilih Tahun: </label>
                        <select name="year" id="year" onchange="this.form.submit()">
                            <?php foreach ($available_years as $year) : ?>
                                <option value="<?= $year->year ?>" <?= $year->year == $selected_year ? 'selected' : '' ?>><?= $year->year ?></option>
                            <?php endforeach; ?>
                        </select>
                    </form>

                    <!-- Chart Container -->
                    <div class="mt-5">
                        <h3 style="text-align:center">Jumlah Pengunjung per Bulan (<?= $selected_year ?>)</h3>
                        <canvas id="visitorChart" width="400" height="200"></canvas>
                    </div>

                    <!-- Chart.js Script -->
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                            var months = <?php echo json_encode(array_column($chart_data, 'bulan')); ?>;
                            var labels = months.map(function(month) {
                                return monthNames[parseInt(month) - 1];
                            });

                            var ctx = document.getElementById('visitorChart').getContext('2d');
                            var visitorChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: labels,
                                    datasets: [{
                                        label: 'Jumlah Pengunjung',
                                        data: <?php echo json_encode(array_column($chart_data, 'jumlah')); ?>,
                                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                        borderColor: 'rgba(54, 162, 235, 1)',
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>