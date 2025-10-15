<?php

// 3. 5. Deklarasi dan akses array Multidimensi
// Visualisasi data multidimensi dapat direpresentasikan dalam bentuk tabel.
// Sebagai contoh adalah tabel data "students" berikut:
// Name | NIM | Mobile
// Alex | 220401 | 0812345678
// Bianca | 220402 | 0812345687
// Candice| 220403 | 0812345665
echo "Data Awal";
echo"<br>";

// Skrip untuk mendeklarasikan array multidimensi $students
$students = array(
    array("Alex", "220401", "0812345678"),
    array("Bianca", "220402", "0812345687"),
    array("Candice", "220403", "0812345665")
);

// Tampilkan data awal (sesuai skrip di soal, baris 8-15)
for ($row = 0; $row < count($students); $row++) {
    echo "<b>Row number $row</b><br>";
    echo "<ul>";
    for ($col = 0; $col < count($students[0]); $col++) {
        echo "<li>" . $students[$row][$col] . "</li>";
    }
    echo "</ul>";
}

// 3. 5. 1. Tambahkan 5 data baru dalam array $students!

$students[] = array("David", "220404", "0812345701");
$students[] = array("Elsa", "220405", "0812345702");
$students[] = array("Fahri", "220406", "0812345703");
$students[] = array("Gina", "220407", "0812345704");
$students[] = array("Haris", "220408", "0812345705");

echo "data baru dalam array student : total data sekarang " . count($students) . "</h3>";
echo "<ul>
        <li>Data baru: David, Elsa, Fahri, Gina, Haris.</li>";

// -----------------------------------------------------------------------------

// 3. 5. 2. Tampilkan data dalam array $students dalam bentuk tabel!

echo "<h3>Tampilan Data dalam Bentuk Tabel</h3>";

// Definisikan header kolom
$headers = array("Name", "NIM", "Mobile");

echo "<table border='1' style='width:50%; text-align:left; border-collapse: collapse;'>";

// Buat baris header
echo "<thead><tr>";
foreach ($headers as $header) {
    echo "<th style='padding: 8px; background-color: #f2f2f2;'><strong>$header</strong></th>";
}
echo "</tr></thead>";

// Tampilkan data baris per baris
echo "<tbody>";
for ($row = 0; $row < count($students); $row++) {
    echo "<tr>";
    for ($col = 0; $col < count($students[$row]); $col++) {
        echo "<td style='padding: 8px;'>".$students[$row][$col]."</td>";
    }
    echo "</tr>";
}
echo "</tbody>";

echo "</table>";

?>