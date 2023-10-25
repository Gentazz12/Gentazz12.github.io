<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jenis_editing = $_POST['jenis_editing'];

    $sql = "UPDATE order_customer SET nama = '$nama', email = '$email', jenis_editing = '$jenis_editing' WHERE id = $id";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: customer.php"); 
        exit();
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($conn);
    }
}
