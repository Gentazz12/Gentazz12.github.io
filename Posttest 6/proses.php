<?php
require 'koneksi.php';
if (isset($_POST["order"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $editType = $_POST['editType'];
    if (isset($_FILES['referensi'])) {
        $referensi = $_FILES['referensi']['name'];
        $currentDate = date("Y-m-d");


        $newFilename = $currentDate . ' ' . $referensi;


        $targetDir = "uploads/";
        $targetFile = $targetDir . $newFilename;

        if (move_uploaded_file($_FILES['referensi']['tmp_name'], $targetFile)) {
            $sql = "INSERT INTO order_customer (id, nama, email, jenis_editing, referensi) VALUES ('', '$name', '$email', '$editType', '$newFilename')";
            $result = mysqli_query($conn, $sql);
        } else {
            echo "Gagal mengunggah file.";
        }
    }
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
            $referensi = $_FILES["referensi"]["name"];

            echo "<p>Nama: $name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Jenis Editing: $editType</p>";
            echo "<p>Referensi: $newFilename</p>";
            echo "<img src='uploads/$newFilename' alt='Referensi' width='300'>";
        }
        ?>
        <form action="order.php">
            <input type="submit" value="Back">
        </form>
    </div>
</body>

</html>