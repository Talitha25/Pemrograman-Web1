<?php

// ARRAY ASOSIATIF
$mahasiswa = [
    "Budi" => 85,
    "Andi" => 90,
    "Citra" => 78,
    "Dina" => 95,
    "Eka" => 88
];

echo "<h2>Array Awal</h2>";
echo "<pre>";
print_r($mahasiswa);
echo "</pre>";

/* =======================================
   FUNGSI PENGURUTAN ARRAY
======================================= */

// 1. SORT -> urut nilai ascending
$sortArray = $mahasiswa;
sort($sortArray);

echo "<h3>1. sort()</h3>";
echo "<pre>";
print_r($sortArray);
echo "</pre>";

// 2. RSORT -> urut nilai descending
$rsortArray = $mahasiswa;
rsort($rsortArray);

echo "<h3>2. rsort()</h3>";
echo "<pre>";
print_r($rsortArray);
echo "</pre>";

// 3. ASORT -> urut nilai ascending + key tetap
$asortArray = $mahasiswa;
asort($asortArray);

echo "<h3>3. asort()</h3>";
echo "<pre>";
print_r($asortArray);
echo "</pre>";

// 4. ARSORT -> urut nilai descending + key tetap
$arsortArray = $mahasiswa;
arsort($arsortArray);

echo "<h3>4. arsort()</h3>";
echo "<pre>";
print_r($arsortArray);
echo "</pre>";

// 5. KSORT -> urut berdasarkan key ascending
$ksortArray = $mahasiswa;
ksort($ksortArray);

echo "<h3>5. ksort()</h3>";
echo "<pre>";
print_r($ksortArray);
echo "</pre>";

// 6. KRSORT -> urut berdasarkan key descending
$krsortArray = $mahasiswa;
krsort($krsortArray);

echo "<h3>6. krsort()</h3>";
echo "<pre>";
print_r($krsortArray);
echo "</pre>";


echo "<h2>Array Lain</h2>";
/* =======================================
   5 FUNGSI ARRAY LAIN
======================================= */

// 1. COUNT
echo "<h3>1. count()</h3>";
echo "Jumlah data mahasiswa : " . count($mahasiswa);

// 2. ARRAY_KEYS
echo "<h3>2. array_keys()</h3>";
echo "<pre>";
print_r(array_keys($mahasiswa));
echo "</pre>";

// 3. ARRAY_VALUES
echo "<h3>3. array_values()</h3>";
echo "<pre>";
print_r(array_values($mahasiswa));
echo "</pre>";

// 4. IN_ARRAY
echo "<h3>4. in_array()</h3>";

if(in_array(95, $mahasiswa)){
    echo "Nilai 95 ditemukan";
}else{
    echo "Nilai 95 tidak ditemukan";
}

// 5. ARRAY_SUM
echo "<h3>5. array_sum()</h3>";
echo "Total seluruh nilai : " . array_sum($mahasiswa);

?>