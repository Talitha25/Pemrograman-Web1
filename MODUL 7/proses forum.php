<?php
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];

$dir = "image/";
$upload = $dir . $_FILES['foto']['name'];
if(is_uploaded_file($_FILES['foto']['tmp_name'])){
    $kirim = move_uploaded_file($_FILES['foto']['tmp_name'], $upload);
if($kirim){
    echo "File berhasil diupload ke server pada folder <br>$upload</br>";
}else{
    echo "File gagal diupload";
    echo "error : ", $_FILES['foto']['error'];
    }
}

echo "<div style='line-height: 2;'>";
echo "Nama : $nama <br>";
echo "Tempat, Tanggal Lahir : $tempat, $tanggal_lahir <br>";
echo "Jenis Kelamin : $jenis_kelamin <br>";
echo "Agama : $agama <br>";
echo "Alamat : $alamat <br>";
echo "Hobi : <br>";
echo "</div>";

if(isset($_POST['hobi1'])){
    echo "-".$hobi1 = $_POST['hobi1'];}
if(isset($_POST['hobi2'])){
    echo "-".$hobi2 = $_POST['hobi2'];}
if(isset($_POST['hobi3'])){
    echo "-".$hobi3 = $_POST['hobi3'];}
if(isset($_POST['hobi4'])){
    echo "-".$hobi4 = $_POST['hobi4'];}

echo "<br>Foto : <br>";
echo "<img src='$upload' width='200'>";
?>