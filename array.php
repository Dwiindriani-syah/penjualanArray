<?php
echo "<div style='font-family:Courier New, monospace; text-align:center;'>";
echo "<h3>🧾✨ <b>JAYA MART</b> ✨🧾</h3>";
echo "🏠 Jl. Merdeka No. 45, Jakarta<br>";
echo "☎️ (021) 1234567<br><br>";

// Data barang
$kode_barang  = ["A01", "A02", "A03", "A04", "A05"];
$emoji_barang = ["👜", "👕", "👟", "🧥", "🧕"];
$nama_barang  = ["Tas", "Baju", "Sepatu", "Jaket", "Hijab"];
$harga_barang = [150000, 54000, 125000, 84000, 15000];

// Tentukan jumlah produk dibeli (acak)
$jumlah_produk = count($nama_barang);
$jumlah_beli = [];
$total = [];
$grandtotal = 0;

// Hitung total per barang dan grand total
for ($i = 0; $i < $jumlah_produk; $i++) {
    $jumlah_beli[$i] = rand(1, 5);
    $total[$i] = $harga_barang[$i] * $jumlah_beli[$i];
    $grandtotal += $total[$i];
}

// Header tabel
echo "<pre style='font-family:Courier New; font-size:16px; margin:auto; width:65%; text-align:left;'>";
echo "No  Kode   Barang               Qty   Harga (Rp)     Total (Rp)";
echo "\n----------------------------------------------------------------\n";

// Isi tabel
for ($i = 0; $i < $jumlah_produk; $i++) {
    $no = $i + 1;
    printf(
        "%-3s %-6s %-2s %-15s %4s %12s %13s\n",
        $no,
        $kode_barang[$i],
        $emoji_barang[$i],
        $nama_barang[$i],
        $jumlah_beli[$i],
        number_format($harga_barang[$i], 0, ',', '.'),
        number_format($total[$i], 0, ',', '.')
    );
}

// Hitung diskon (commit ke-6)
$diskon = 0;
if ($grandtotal >= 300000) {
    $diskon = 0.10; // 10%
} elseif ($grandtotal >= 200000) {
    $diskon = 0.05; // 5%
}

// Total setelah diskon
$jumlah_diskon = $grandtotal * $diskon;
$total_bayar = $grandtotal - $jumlah_diskon;

// Simulasi pembayaran pelanggan (commit ke-7)
$pembayaran = rand($total_bayar, $total_bayar + 500000); // random uang pelanggan
$kembalian = $pembayaran - $total_bayar;

// Tampilkan total & diskon & pembayaran
echo "----------------------------------------------------------------\n";
printf("%-33s %26s\n", "Total Penjualan :", "Rp " . number_format($grandtotal, 0, ',', '.'));

if ($diskon > 0) {
    printf("%-33s %26s\n", "Diskon (" . ($diskon * 100) . "%) :", "-Rp " . number_format($jumlah_diskon, 0, ',', '.'));
}

echo "----------------------------------------------------------------\n";
printf("%-33s %26s\n", "Total Bayar :", "Rp " . number_format($total_bayar, 0, ',', '.'));
printf("%-33s %26s\n", "Uang Pembeli :", "Rp " . number_format($pembayaran, 0, ',', '.'));
printf("%-33s %26s\n", "Kembalian :", "Rp " . number_format($kembalian, 0, ',', '.'));
echo "----------------------------------------------------------------\n";
echo "</pre>";

// Teks terima kasih di tengah
echo "<div style='font-family:Courier New, monospace; text-align:center; margin-top:10px;'>";
echo "Terima kasih telah berbelanja di <b>JAYA MART 😊</b>";
echo "</div>";
?>
