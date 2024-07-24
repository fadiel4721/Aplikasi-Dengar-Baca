<?php
require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <!-- fontawesome cdnjs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <div class="box">
        <div class="login">
            <div class="loginBox">
                <h2><i class="fa-solid fa-right-to-bracket"></i>
                    Login
                    <i class="fa-solid fa-headphones"></i>
                </h2>

                <input type="text" name="username" placeholder="username" required>
                <input type="password" name="password" placeholder="password">
                <i class="uil uil-lock password"></i>
                <input type="submit" name="kirim" value="sign in">
                <div class="group">
                    <a href="#">Forget Password</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>