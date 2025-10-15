<?php

$fruits = array("Avocado", "Blueberry", "Cherry");

echo "fruits awal: ";
echo implode(", ", $fruits) . "\n"; 
echo "<br>";

// Tambahkan 5 data baru
$fruits[] = "Durian"; 
$fruits[] = "nangka"; 
$fruits[] = "apel"; 
$fruits[] = "anggur"; 
$fruits[] = "mangga";

echo "5 data baru: ";
echo implode(", ", $fruits) . "\n";
echo "<br>";

$jumlah_elemen = count($fruits);
$indeks_tertinggi = $jumlah_elemen - 1; 

$nilai_tertinggi = $fruits[$indeks_tertinggi];
echo ("Indeks tertinggi dari array \$fruits adalah: " . $indeks_tertinggi . ".\n"); 
echo "<br>";
echo ("Nilai dengan indeks tertinggi dari array \$fruits adalah: " . $nilai_tertinggi . ".\n");
echo "<br>";

// Hapus 1 data tertentu
$data_dihapus = "nangka";
$kunci_dihapus = array_search($data_dihapus, $fruits); 
if ($kunci_dihapus !== false) {
    unset($fruits[$kunci_dihapus]); 
}
$fruits = array_values($fruits); // Re-index array

$jumlah_elemen_baru = count($fruits);
$indeks_tertinggi_baru = $jumlah_elemen_baru - 1; 
$nilai_tertinggi_baru = $fruits[$indeks_tertinggi_baru];
echo"<br>";

echo "Hapus Data dan Cek Indeks Tertinggi";
echo "<br>";
echo "Data '" . $data_dihapus . "' telah dihapus. Array saat ini: " . implode(", ", $fruits) . "\n";
echo "<br>";
echo ("Indeks tertinggi dari array \$fruits (baru) adalah: " . $indeks_tertinggi_baru . ".\n"); 
echo "<br>";
echo ("Nilai dengan indeks tertinggi dari array \$fruits (baru) adalah: " . $nilai_tertinggi_baru . ".\n");
echo "<br>";
echo"<br>";

// =======================================================
// JAWABAN SOAL 3.1.3: Buat array baru dan tampilkan seluruh datanya
echo "Buat Array \$veggies dan Tampilkan Seluruh Data";
echo "<br>";

// 1. Buat array baru dengan nama $veggies yang memiliki 3 buah data
$veggies = array("kangkung", "Broccoli", "bayam");

echo "array baru dengan nama\$veggies telah dibuat.\n";
echo "<br>";

// 2. Tampilkan seluruh data dari array $veggies
echo "Seluruh data dari array \$veggies:\n";
echo implode(", ", $veggies) . "\n";
echo "<br>";

// Alternatif menampilkan data dengan perulangan (lebih terstruktur)
echo "Tampilan per elemen:\n";
foreach ($veggies as $index => $veg) {
    echo "Data ke-" . ($index + 1) . ": " . $veg . "\n";
    echo "<br>";
}

?>