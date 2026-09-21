# Mini Project 1: PIS-ATK (Product Information System - Alat Tulis Kampus (Desain))

## Desain & Struktur Berkas

1. products.php (Data Layer)
   - Menampung *multidimensional associative array* yang menyimpan daftar barang inventori (ID, Nama, Kategori, Harga, Stok, Deskripsi)

2. function.php (Processing Layer)
   - Berisi fungsi logika bisnis 'hitungTotalNilaiStok()' untuk mengkalkulasi total aset inventori gudang
   - Berisi fungsi 'cekStokKritis()' untuk mendeteksi stok barang yang kritis/menipis dari '< 3'

3. index.php (Presentation Layer)
   - Berkas utama yang menggabungkan 'products.php' dan 'functions.php' menggunakan 'require_once'
   - Merender seluruh data ke dalam tampilan tabel HTML menggunakan perulangan 'foreach'
   - Menandai baris tabel dengan warna khusus jika barang memiliki stok kritis/menipis

## Petunjuk Cara Menjalankan Aplikasi ( XAMPP )

1. Pastikan aplikasi XAMPP sudah terinstal di komputer
2. Salin (*copy*) seluruh folder proyek ini ke dalam direktori XAMPP: 'C:\xampp\htdocs\'
3. Buka 'XAMPP Control Panel' dan tekan tombol 'Start' pada modul Apache
4. Buka 'web browser' (Chrome / Edge / Firefox) dan ketikkan URL berikut pada 'address bars': 'http://localhost/nama_folder_proyek/'
