<?php

// =======================================================
// 3. 3. Implementasi Skrip Awal: Deklarasi dan Akses Array Asosiatif
echo "Deklarasi dan Akses Array Asosiatif Awal" . "\n";
echo "<br>";

$Height = array("Andy"=>"176", "Barry"=>"165", "Charlie"=>"170");

// Akses data awal (sesuai contoh soal)
echo "Andy is " . $Height["Andy"] . " cm tall." . "\n";
echo "<br>";

echo "Array \$Height awal: ";
print_r($Height);
echo "<br>";
echo "<br>";

// =======================================================
// 3. 3. 1. Tambahkan 5 data baru dan tampilkan nilai dengan indeks terakhir
echo "Tambah 5 Data baru dan tampilkan indexs terahir" . "\n";
echo "<br>";

// Tambahkan 5 data baru
$Height["David"] = "180";
$Height["Eva"] = "160";
$Height["Fajar"] = "172";
$Height["Gita"] = "158";
$Height["Haryanto"] = "175";

echo "Array \$Height setelah penambahan 5 data: ";
print_r($Height);
echo "<br>";

// Cara menemukan INDEKS TERAKHIR (kunci/key terakhir) dan NILAI-nya pada array asosiatif:
// 1. Dapatkan semua kunci (keys) dari array menggunakan array_keys().
$keys = array_keys($Height);
// 2. Gunakan end() untuk mendapatkan elemen terakhir dari array kunci tersebut.
$indeks_terakhir_3_3_1 = end($keys);

// Tampilkan nilai dengan indeks terakhir
$nilai_terakhir_3_3_1 = $Height[$indeks_terakhir_3_3_1];

echo "Indeks terakhir dari array \$Height adalah: " . $indeks_terakhir_3_3_1 . "\n";
echo "<br>";
echo "Nilai dengan indeks terakhir adalah: " . $nilai_terakhir_3_3_1 . "\n";
echo "<br>";
echo"<br>";


echo " Hapus 1 Data dan Cek Indeks Terakhir" . "\n";
echo "<br>";

// Hapus 1 data tertentu. Misalnya, hapus 'Barry'.
$kunci_dihapus = "Barry";
if (isset($Height[$kunci_dihapus])) {
    unset($Height[$kunci_dihapus]); 
    echo "Data dengan kunci '" . $kunci_dihapus . "'dihapus." . "\n";
    echo "<br>";
}

echo "data Array \$Height setelah ada penghapusan: ";
print_r($Height);
echo "<br>";

// Cari kembali indeks terakhir setelah penghapusan
$keys_baru = array_keys($Height); 
$indeks_terakhir_3_3_2 = end($keys_baru);

// Tampilkan nilai dengan indeks terakhir
$nilai_terakhir_3_3_2 = $Height[$indeks_terakhir_3_3_2];

echo "Indeks terakhir dari array \$Height setelah penghapusan adalah: " . $indeks_terakhir_3_3_2 . "\n";
echo "<br>";
echo "Nilai dengan indeks terakhir adalah: " . $nilai_terakhir_3_3_2 . "\n";
echo "<br>";
echo"<br>";



echo "Buat Array \$weight dan Tampilkan Data ke-2 " . "\n";
echo "<br>";

// Buat array baru dengan nama $weight yang memiliki 3 buah data (asosiatif)
$weight = array(
    "Andy" => "70",
    "Barry" => "65",
    "ucup" => "68"
);

echo "Array \$weight telah dibuat: ";
print_r($weight);
echo "<br>";

// Tampilkan data ke-2 dari array $weight
// Cara 1: Menggunakan array_keys() untuk mendapatkan kunci ke-2
$keys_weight = array_keys($weight);
$kunci_data_ke_2 = $keys_weight[1]; // Indeks 1 adalah data ke-2

$nilai_data_ke_2 = $weight[$kunci_data_ke_2];

echo "Data ke-2 (kunci '" . $kunci_data_ke_2 . "') dari array \$weight adalah: " . $nilai_data_ke_2 . " kg.\n";
echo "<br>";

?>