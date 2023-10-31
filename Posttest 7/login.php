<?php
session_start();
require 'koneksi.php';

if (isset($_POST['masuk'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;

            header("Location:index.php");
            exit;
        }
    }
    $error = true;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <h1>Silahkan Login</h1>
        <hr class="form-group">
        <?php
        if (isset($error)) {
            echo "<p style='color: red;'>Username atau Password salah!</p>";
        }
        ?>
        <form id="login-form" action="" method="POST">
            <div class="form-group">
                <label for="username">Username</label>

                <input type="text" name="username" placeholder="Masukkan username anda" class="textfield" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Masukkan passworrd anda" class="textfield" required>
            </div>
            <div class="form-group">
                <input type="submit" name="masuk" value="Masuk" class="login-btn">
                <br>
                <a href="register.php">Belum punya akun?</a>
            </div>


        </form>
    </div>
</body>

</html>