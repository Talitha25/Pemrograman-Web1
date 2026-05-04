<?php
// cek apakah tombol ditekan
$hasilSaldo = "";
$hasilKerucut = "";

if(isset($_POST['hitung'])){

    // ======================
    // SOAL 1 (Saldo)
    // ======================
    $saldoAwal = $_POST['saldoAwal'];
    $bunga = $_POST['bunga'] / 100;
    $bulan = $_POST['bulan'];

    $saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);

    $hasilSaldo = "Saldo akhir setelah $bulan bulan adalah : Rp. " . number_format($saldoAkhir,0,',','.');


    // ======================
    // SOAL 2 (Kerucut)
    // ======================
    $r = $_POST['jari'];
    $s = $_POST['garis'];
    $phi = 3.14;

    $luasAlas = $phi * $r * $r;
    $luasPermukaan = ($phi * $r * $r) + ($phi * $r * $s);

    $hasilKerucut = "Luas Alas = ".number_format($luasAlas,2)."<br>
                     Luas Permukaan Kerucut = ".number_format($luasPermukaan,2);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator PHP</title>
    <style>
        body{
            font-family: Arial;
            background: #f4f4f4;
            padding: 20px;
        }
        .box{
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input{
            padding: 8px;
            margin: 5px 0;
            width: 100%;
        }
        button{
            padding: 10px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        h2{
            margin-top: 0;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Hitung Saldo Bank</h2>
    <form method="post">
        Saldo Awal:
        <input type="number" name="saldoAwal" required>

        Bunga (% per bulan):
        <input type="number" step="0.01" name="bunga" required>

        Lama (bulan):
        <input type="number" name="bulan" required>

        <button name="hitung">Hitung</button>
    </form>

    <p><b><?php echo $hasilSaldo; ?></b></p>
</div>

<div class="box">
    <h2>Hitung Kerucut</h2>
    <form method="post">
        Jari-jari (r):
        <input type="number" name="jari" required>

        Garis pelukis (s):
        <input type="number" name="garis" required>

        <button name="hitung">Hitung</button>
    </form>

    <p><b><?php echo $hasilKerucut; ?></b></p>
</div>

</body>
</html>