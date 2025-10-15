<?php
$fruits = array("Apel", "Banana", "anggur");
$colors = array("merah", "hijau", "hitam");
$scores = array(
    "ucup" => 85,
    "Bob" => 92,
    "alex" => 85,
    "Diana" => 78,
    "Eve" => 92
);
$numbers = array(5, 2, 8, 1, 4);

echo "<h3>Data Awal:</h3>";
echo "<ul>";
echo "<li>\$fruits: " . implode(", ", $fruits) . "</li>";
echo "<li>\$colors: " . implode(", ", $colors) . "</li>";
echo "<li>\$scores: " . json_encode($scores) . "</li>";
echo "<li>\$numbers: " . implode(", ", $numbers) . "</li>";
echo "</ul>";

echo "<br>";
echo "Implementasi fungsi array_push";

array_push($fruits, "Grape", "Mango");
echo"<br>";

echo "Array \$fruits setelah array_push: " . implode(", ", $fruits) . "<br>";
echo "<br>";



echo " Implementasi fungsi array_merge";
echo"<br>";

$merged_array = array_merge($fruits, $colors);

echo "Array hasil array_merge(\$fruits, \$colors): " . implode(", ", $merged_array) . "<br>";
echo "<br>";


echo "Implementasi fungsi array_values";
echo"<br>";

$score_values = array_values($scores);

echo "Nilai dari array \$scores (setelah array_values()): " . implode(", ", $score_values) . "<br>";
echo "<br>";

echo "Implementasi fungsi array_search";
echo"<br>";

$key_of_cherry = array_search("Cherry", $fruits);
echo "Key untuk nilai 'Cherry' di \$fruits: " . $key_of_cherry . " (Index ke-" . $key_of_cherry . ")<br>";

$key_of_85 = array_search(85, $scores);
echo "Key untuk nilai 85 di \$scores: " . $key_of_85 . " (Key '{$key_of_85}')<br>";
echo "<br>";


echo "Implementasi fungsi array_filter";
echo"<br>";

$high_scores = array_filter($scores, function($score) {
    return $score > 85;
});

echo "Skor yang > 85 (setelah array_filter: " . json_encode($high_scores) . "<br>";
echo "<br>";


echo "Implementasi berbagai fungsi sorting pada array!";
echo"<br>";
$numbers_rsort = $numbers;
rsort($numbers_rsort);
echo "1. rsort(\$numbers) (Nilai Descending): " . implode(", ", $numbers_rsort) . "<br>";

$scores_asort = $scores;
asort($scores_asort);
echo "2. asort(\$scores) (Sort by Value Ascending): " . json_encode($scores_asort) . "<br>";



$scores_ksort = $scores; 
ksort($scores_ksort);
echo "3. ksort(\$scores) (Sort by Key Ascending): " . json_encode($scores_ksort) . "<br>";


?>