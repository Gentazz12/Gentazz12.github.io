<?php
require 'koneksi.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password === $cpassword) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $result = mysqli_query($conn, "SELECT username FROM user where username = '$username'");

        if (mysqli_fetch_assoc($result)) {
            echo "
            <script>
                alert('Username sudah ada!');
                document.location.href = 'register.php';
            </script>";
        } else {
            $result = mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password')");

            if (mysqli_affected_rows($conn) > 0) {
                echo "
                <script>
                    alert('Registrasi Berhasil!');
                    document.location.href = 'login.php';
                </script>";
            } else {
                echo "
                <script>
                    alert('Registrasi Gagal!');
                    document.location.href = 'register.php';
                </script>";;
            }
        }
    } else {
        echo "
                <script>
                    alert('Password tidak sama!');
                    document.location.href = 'register.php';
                </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gen Works - Register</title>
</head>

<body>
    <div class="container">
        <h1>Silahkan Register</h1>
        <hr class="form-group">

        <form id="register-form" action="" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username anda" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password anda" required>
            </div>
            <div class="form-group">
                <label for="cpassword">Konfirmasi Password</label>
                <input type="password" id="cpassword" name="cpassword" placeholder="Konfirmasi password anda" required>
            </div>
            <div class="form-group">
                <input type="submit" name="register" value="Register">
            </div>
        </form>
    </div>
</body>

</html>