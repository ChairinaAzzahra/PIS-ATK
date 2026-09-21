<?php
// Panggil file data dan fungsi sesuai materi slide 
require_once 'products.php';
require_once 'functions.php';

// Hitung total nilai stok menggunakan fungsi yang sudah dibuat
$totalNilaiAset = hitungTotalNilaiStok($daftarBarang);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Informasi Produk</title>
    <style>
      body {
        font-family: sans-serif;
        margin:20px;
      }
      table {
        border-collapse: collapse;
        witdh: 100%;
      }
      th, td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
      }
      th {
        background-color:#f2f2f2:
      }
      .stok-kritis {
        background-color: #ffcccc;
      }
    </style>
</head>
<body>

    <h2>Daftar Inventori Alat Tulis Kampus</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($daftarBarang as $barang): ?> 
                <?php
                    // Mengecheck apakah stok berkurang dari 3?
                ?>
                <tr class="<?php if ($isKritis) { echo 'stok-kritis'; } ?>">
                    <td><?php echo $barang['id']; ?></td>
                    <td><?php echo $barang['nama']; ?></td>
                    <td><?php echo $barang['kategori']; ?></td>
                    <td>Rp <?php echo number_format($barang['harga'], 0, ',', '.'); ?></td>
                    <td>
                        <?php echo $barang['stok']; ?>
                        <?php if ($isKritis): ?>
                            <small style="color: red;">(Stok Menipis!)</small>
                        <?php endif; ?>
                    </td>
                    <td><?php echo $barang['dekripsi']; ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <h3>Total Nilai Stok Gudang: Rp <?php echo number_format($totalNilaiAset, 0, ',', '.'); ?></h3>

</body>
</html>
