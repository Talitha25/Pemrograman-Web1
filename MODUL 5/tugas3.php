<?php
$banyak = 0;
for ($i = 3; $i <= 127; $i++) {
    if ($i % 6 == 0) {
        $banyak++;
    }
}
echo "Banyak bilangan kelipatan 6 = " . $banyak;
?>