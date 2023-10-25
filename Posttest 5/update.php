<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update.css">
    <title>Gen Works - ADMIN - Update Data</title>
</head>

<body>
    <div class="update-form">
        <h1>Update Data Pelanggan</h1>
        <?php
        require 'koneksi.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM order_customer WHERE id = $id";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                // Tampilkan formulir untuk mengedit data pelanggan
                echo '<form action="proses_update.php" method="post">';
                echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                echo 'Nama: <input type="text" name="nama" value="' . $row['nama'] . '"><br>';
                echo 'Email: <input type="text" name="email" value="' . $row['email'] . '"><br>';
                echo 'Jenis Editing: <select name="jenis_editing">
                        <option value="Video Editing" ' . ($row['jenis_editing'] == 'Video Editing' ? 'selected' : '') . '>Video Editing</option>
                        <option value="Graphic Design" ' . ($row['jenis_editing'] == 'Graphic Design' ? 'selected' : '') . '>Graphic Design</option>
                        <option value="Motion Graphic" ' . ($row['jenis_editing'] == 'Motion Graphic' ? 'selected' : '') . '>Motion Graphic</option>
                        </select><br>';
                echo '<input type="submit" value="Update">';
                echo '</form>';
            } else {
                echo 'Data tidak ditemukan.';
            }
        } else {
            echo 'ID tidak valid.';
        }
        ?>
    </div>
</body>

</html>
