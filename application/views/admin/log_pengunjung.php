<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Pengunjung Anjungan Sumatera Barat</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-family: Arial, sans-serif;
            font-size: 10pt;
        }

        h2 {
            font-family: Arial, sans-serif;
        }

        p {
            font-family: Arial, sans-serif;
            font-size: 12pt;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #0F67B1;
            /* Warna biru */
            color: white;
            /* Warna teks putih */
        }
    </style>
</head>

<body>
    <h2 style="text-align:center">Data Pengunjung Anjungan Sumatera Barat</h2>

    <?php if ($bulan && $tahun) : ?>
        <p style="text-align:center">Bulan: <b><?php echo date('F', mktime(0, 0, 0, $bulan, 10)); ?> </b>, Tahun: <b><?php echo $tahun; ?></b></p>
    <?php elseif ($tahun) : ?>
        <p style="text-align:center">Tahun: <b><?php echo $tahun; ?></b></p>
    <?php endif; ?>

    <table>
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
</body>

</html>