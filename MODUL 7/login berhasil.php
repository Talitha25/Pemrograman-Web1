<?php
session_start();

// CEK APAKAH SUDAH LOGIN
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Berhasil Login</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box{
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        h1{
            color: green;
        }
    </style>
</head>
<body>

<div class="box">

    <h1>Login Berhasil!</h1>

    <h3>
        Selamat Datang
        <?php echo $_SESSION['username']; ?>
    </h3>

</div>

</body>
</html>