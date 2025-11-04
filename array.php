<?php
// Judul program
echo "<div style='font-family:Courier New, monospace; text-align:center;'>";
echo "<h3>🧾✨ JAYA MART ✨🧾</h3>";
echo "🏠 Jl. Merdeka No. 45, Jakarta<br>";
echo "☎️  (021) 1234567<br>";
echo "<br>"; // ganti hr jadi jarak baris kosong

// Daftar produk dan harga
$nama_barang  = ["👕 Baju", "🧕 Hijab", "🧥 Jaket", "👟 Sepatu", "👜 Tas"];
$harga_barang = [54000, 15000, 84000, 125000, 150000];

// Acak urutan produk agar hasil berbeda setiap dijalankan
shuffle($nama_barang);

// Buat variasi acak jumlah produk yang dibeli (1–5 produk)
$jumlah_produk = rand(1, count($nama_barang));

// Array penampung hasil
$jumlah_beli = [];
$total = [];
$grandtotal = 0;

// Loop untuk membuat data penjualan acak TANPA produk duplikat
for ($i = 0; $i < $jumlah_produk; $i++) {
    $jumlah_beli[$i] = rand(1, 5); // jumlah beli acak
    $index_harga = array_search($nama_barang[$i], ["👕 Baju", "🧕 Hijab", "🧥 Jaket", "👟 Sepatu", "👜 Tas"]);
    $total[$i] = $harga_barang[$index_harga] * $jumlah_beli[$i];
    $grandtotal += $total[$i];
}
