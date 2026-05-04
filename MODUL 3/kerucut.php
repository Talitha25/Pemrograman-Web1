<?php
$r = 7;
$s = 10;
$phi = 3.14;
//luas alas
$luasAlas = $phi * $r * $s;
//luas permukaan kerucut
$luasPermukaan = ($phi * $r * $s) + ($phi * $r * $s);

echo "Luas Alas = ".$luasAlas."<br>";
echo "Luas Permukaan Kerucut = ".$luasPermukaan;
?>