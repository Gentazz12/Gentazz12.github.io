<?php
require 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM order_customer WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    header("Location: customer.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
