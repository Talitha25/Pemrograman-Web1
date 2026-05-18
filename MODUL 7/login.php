<?php
session_start();

// ARRAY USER
$users = [
    [
        "username" => "admin",
        "password" => "12345"
    ],
    [
        "username" => "talitha",
        "password" => "67890"
    ]
];

$error = "";
$loginGagal = false;

// CEK LOGIN
if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    foreach($users as $user){

        if($username == $user['username'] &&
           $password == $user['password']){
    
            $_SESSION['username'] = $username;

            // PINDAH KE HALAMAN BERHASIL
            header("Location: login berhasil.php");
            exit;
        }
    }
    $loginGagal = true;
    $error = "Username atau Password Salah!";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Modern</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
        }

        .login-box{
            width: 350px;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            animation: muncul 0.7s ease;
        }

        @keyframes muncul{
            from{
                opacity: 0;
                transform: translateY(-30px);
            }
            to{
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-box h2{
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .input-box{
            margin-bottom: 20px;
        }

        .input-box label{
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }

        .input-box input{
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            transition: 0.3s;
        }

        .input-box input:focus{
            border-color: #4facfe;
            box-shadow: 0 0 5px #4facfe;
        }

        .btn-login{
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #4facfe, #00c6fb);
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-login:hover{
            transform: scale(1.03);
            opacity: 0.9;
        }

        .error{
            margin-top: 15px;
            text-align: center;
            color: red;
            font-weight: bold;
        }

        .footer{
            text-align: center;
            margin-top: 20px;
            color: #777;
            font-size: 14px;
        }

    </style>

</head>
<body>

<div class="login-box">

    <h2>Login Account</h2>

    <form method="POST">

        <div class="input-box">
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan username" required>
        </div>

        <div class="input-box">
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password" required>
        </div>

        <button type="submit" name="login" class="btn-login">
            Login
        </button>

    </form>

    <?php
    if($loginGagal){
        echo "<div class='error'>$error</div>";
    }
    ?>

    <div class="footer">
        © 2026 Login PHP Modern
    </div>

</div>

</body>
</html>