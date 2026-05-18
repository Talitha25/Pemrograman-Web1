<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="with=device-width"
    initial-scale=1.0>
    <title>Document</title>
</html>
<body>
<form enctype="multipart/form-data" action="proses forum.php" method="post">
    <p>Nama : <input type="text" name="nama"></p>
    <p>Tempat : <input type="text" name="tempat"></p>
    <p>Tanggal Lahir : <input type="date" name="tanggal_lahir"></p>
    <p>Jenis Kelamin :<input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki
    <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</p>
    <p>Agama :
    <select name="agama">
        <option value="islam">Islam</option>
        <option value="kristen">Kristen</option>
        <option value="hindu">Hindu</option>
        <option value="budha">Budha</option>
    </select></p>
    <p>Alamat : <textarea name="alamat" id=""></textarea><br></p>
    Hobi : <br>
    <input type="checkbox" name="hobi1" id="" value="Berenang">Berenang<br>
    <input type="checkbox" name="hobi2" id="" value="Bersepeda">Bersepeda<br>
    <input type="checkbox" name="hobi3" id="" value="Membaca">Membaca<br>
    <input type="checkbox" name="hobi4" id="" value="Lainnya">Lainnya<br>
    
    Masukkan Foto : <input type="file" name="foto"><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</head>
