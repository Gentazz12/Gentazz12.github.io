<?php
require 'koneksi.php';
if (isset($_POST["order"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $editType = $_POST['editType'];

    $sql = "INSERT INTO order_customer (id, nama, email, jenis_editing) VALUES ('', '$name', '$email', '$editType')";
    $result = mysqli_query($conn, $sql);
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Form Submission Result</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="order.css">
</head>

<body>
    <div class="container">
        <h2>Order Berhasil!</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $editType = $_POST["editType"];

            echo "<p>Nama: $name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Jenis Editing: $editType</p>";
        }
        ?>
        <form action="order.php">
            <input type="submit" value="Back">
        </form>
    </div>
</body>

</html>