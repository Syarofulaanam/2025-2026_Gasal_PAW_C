<?php

// =======================================================
// 3. 4. Implementasi Skrip Awal: Akses Array Asosiatif dengan foreach
echo "Skrip Awal: Tampilan Array \$Height dengan foreach" . "\n";
echo "<br>";

$Height = array("Andy"=>"176", "Barry"=>"165", "Charlie"=>"170");

// Skrip perulangan awal (baris 4 - 7)
foreach($Height as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo"<br>";

// =======================================================
// 3. 4. 1. Tambahkan 5 data baru dan analisis perulangan
echo "Tambah 5 Data dan Analisis Perulangan foreach";
echo "<br>";

// Tambahkan 5 data baru ke dalam array $Height
$Height["David"] = "180";
$Height["Eva"] = "160";
$Height["Fajar"] = "172";
$Height["Gita"] = "158";
$Height["Haryanto"] = "175";

echo "Array \$Height setelah penambahan 5 data: ";
print_r($Height);
echo "<br>";

echo "menampilkan seluruh data array:" . "\n";
echo "<br>";

// Gunakan kembali perulangan foreach tanpa perubahan
foreach($Height as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<br>";

echo "Array Baru \$weight dan Tampilan dengan foreach" . "\n";
echo "<br>";

// Buat array baru dengan nama $weight yang memiliki 3 buah data (asosiatif)
$weight = array(
    "Andy" => "70",
    "Barry" => "65",
    "Charlie" => "68"
);

echo "Array \$weight telah dibuat: ";
print_r($weight);
echo "<br>";

// Tampilkan seluruh data dari array $weight dengan menggunakan struktur perulangan FOR (maksudnya foreach)
echo "Tampilan seluruh data dari array \$weight:\n";
echo "<br>";

// Modifikasi skrip perulangan yang sudah ada
foreach($weight as $y => $y_value) { // Variabel diubah agar tidak bentrok
    echo "Key=" . $y . ", Value=" . $y_value . " kg";
    echo "<br>";
}
echo "<br>";

?>