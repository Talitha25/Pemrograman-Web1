<?php
$array1 = array("Talitha","Intan","Kirana",); echo "array awal adalah :<br/>";
for ($i = 0; $i < count($array1); $i++) {
    echo " data ke- ",$i," : ",$array1[$i], "<br/>";
}

echo "<br/>Setelah ditambahkan \"Dina, Dinda & Diansyah\" menggunakan fungsi array_push():<br/>";
array_push($array1, "Dina", "Dinda", "Diansyah");
for ($i = 0; $i < count($array1); $i++) {
    echo " data ke- ",$i," : ",$array1[$i], "<br/>";
}  

echo "<br/>Setelah bagian awal array dihapus mengunakan fungsi array_shift():<br/>";
array_shift($array1);
for ($i = 0; $i < count($array1); $i++) {
    echo " data ke- ",$i," : ",$array1[$i], "<br/>";
}

echo "<br/>Dan setelah isi array diurutkan menggunakan fungsi sort():<br/>";
sort($array1);
for ($i = 0; $i < count($array1); $i++) {
    echo " data ke- ",$i," : ",$array1[$i], "<br/>";
}
?>