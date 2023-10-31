<?php 
    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "customer";

    $conn = mysqli_connect($server, $user, $password, $db_name);

    if (mysqli_connect_errno()) {
        die("Gagal Terhubung Ke Data Base". mysqli_connect_error());
    }

    
?>