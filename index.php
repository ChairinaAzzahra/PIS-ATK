<?php
// Panggil file data dan fungsi sesuai materi slide 
require_once 'products.php';
require_once 'function.php';

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
