<?php

// =======================================================
// 3. 2. Implementasi Skrip Awal
echo "Skrip Awal: Tampilan Array \$fruits" . "\n";
echo "<br>";

$fruits = array("Avocado", "Blueberry", "Cherry");
$arrlength = count($fruits);

// Tampilkan data awal menggunakan perulangan FOR
for($x = 0; $x < $arrlength; $x++) {
    echo $fruits[$x];
    echo "<br>";
}

// =======================================================
// 3. 2. 1. Tambahkan 5 data baru dan analisis perulangan
echo "Tambah 5 Data menggunakan perulangan for" . "\n";
echo "<br>";
echo "<br>";

// Tambahkan 5 data baru ke dalam array $fruits menggunakan perulangan FOR
// Kita bisa menggunakan perulangan FOR untuk menambahkan data dinamis,
// meskipun penambahan data ke array terindeks lebih umum dilakukan dengan $fruits[] = 'data'.
// Di sini, kita simulasikan penambahan 5 data dengan perulangan sederhana:

$data_baru = array("Durian", "mangga", "apel", "anggur", "manggis");
$panjang_data_baru = count($data_baru);

for ($i = 0; $i < $panjang_data_baru; $i++) {
    $fruits[] = $data_baru[$i]; // Menambahkan data baru di akhir array
}

// Hitung kembali panjang array setelah penambahan
$arrlength = count($fruits);

echo "Array setelah penambahan 5 data baru: ";
echo implode(", ", $fruits) . "\n";
echo "<br>";

echo "Panjang (jumlah data) array \$fruits saat ini adalah: " . $arrlength . "\n";
echo "<br>";

echo "Tampilan seluruh data array \$fruits:" . "\n";
echo "<br>";

// Cek apakah perlu perubahan pada skrip perulangan (baris 5-8)?
// TIDAK PERLU melakukan perubahan pada skrip perulangan (baris 5-8).
for($x = 0; $x < $arrlength; $x++) { // Perulangan ini tetap sama!
    echo $fruits[$x];
    echo "<br>";
}
echo "<br>";
echo "Array Baru \$veggies menggunakan perulangan for" . "\n";
echo "<br>";

// 1. Buat array baru dengan nama $veggies yang memiliki 3 buah data
$veggies = array("kangkung", "Broccoli", "bayam");
$veggies_length = count($veggies);

echo "Array \$veggies telah dibuat: " . implode(", ", $veggies) . "\n";
echo "<br>";

// Tampilkan seluruh data dari array $veggies dengan menggunakan struktur perulangan FOR
echo "Tampilan seluruh data dari array \$veggies:\n";
echo "<br>";

// 2. Tampilkan seluruh data
for($y = 0; $y < $veggies_length; $y++) { // Kita bisa menggunakan sedikit modifikasi skrip yang sudah ada (yaitu mengganti nama variabel)
    echo $veggies[$y];
    echo "<br>";
}

?>