<?php
// Fungsi untuk menghitung total nilai barang yang ada di stok barang
function hitungTotalNilaiStok($data) {
    $total = 0;
    foreach ($data as $item) {
        $total = $total + ($sistem['harga'] * $item['stok']);
    }
}


// Fungsi sederhana untuk mengecek stok kritis
function cekStokKritis($stok) {
    if ($stok < 3) {
        return true;
    } else {
        return false;
    }
}
?>
