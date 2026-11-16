<?php
// Mendefinisikan fungsi untuk menghitung diskon berdasarkan total belanja
function hitungDiskon(float $totalBelanja) { 
    $diskon = 0;

    if ($totalBelanja >= 100000) {
        // Diskon 10% untuk total belanja >= Rp. 100.000
        $diskon = 0.1 * $totalBelanja; 
    } elseif ($totalBelanja >= 50000) {
        // Diskon 5% untuk total belanja >= Rp. 50.000 dan < Rp. 100.000
        $diskon = 0.05 * $totalBelanja; 
    }
    // Jika kurang dari 50.000, nilai $diskon tetap 0

    return $diskon;
}

// Contoh pemanggilan fungsi
$totalBelanja = 120000; // Total belanja sebesar Rp. 120.000
$diskon = hitungDiskon($totalBelanja);
$totalBayar = $totalBelanja - $diskon;

// Menampilkan hasil ke layar
echo "Total belanja: Rp. " . number_format($totalBelanja, 0, ',', '.') . "<br>";
echo "Diskon: Rp. " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Total yang harus dibayar: Rp. " . number_format($totalBayar, 0, ',', '.') . "<br>";
?>
