<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin.css">
    <title>Gen Works - ADMIN</title>
</head>

<body>
    <nav>
        <div class="nav__content">
            <div class="logo"><a href="#">Gen Works.</a></div>
            <label for="check" class="checkbox">
                <i class="ri-menu-line"></i>
            </label>
            <input type="checkbox" name="check" id="check" />
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about me.php">About Me</a></li>
                <li><a href="#">Skills</a></li>
                <li><a href="portofolio.php">Portofolio</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="order.php">Order</a></li>
                <li><a href="customer.php">Admin</a></li>
                <li><button class="button-rgb" role="button" id="toggle">Change Theme</button></li>
            </ul>
        </div>
    </nav>

    <div class="tabel">
        <h1>Data Order Customer
            <p class="date" id="date">
                <?php
                date_default_timezone_set('Asia/Jakarta');
                echo date('l, d F Y, H:i:s T');
                ?>
            </p>

        </h1>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis Editing</th>
                    <th>Referensi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'koneksi.php';
                $sql = "SELECT * FROM order_customer";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['jenis_editing'] . "</td>";
                    echo "<td><img src='uploads/" . $row['referensi'] . "' alt='Referensi' width='100'></td>";
                    echo "<td class='action-buttons'>
                                <span class='update-button' onclick='window.location.href=\"update.php?id=" . $row['id'] . "\"'>Update</span>
                                <span class='delete-button' onclick='window.location.href=\"delete.php?id=" . $row['id'] . "\"'>Hapus</span>
                            </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
<script>
    function updateTime() {
        var date = new Date();
        var options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            timeZoneName: 'short'
        };
        document.getElementById('date').innerHTML = date.toLocaleDateString('id-ID', options);
    }
    setInterval(updateTime, 1000);
    updateTime();
</script>

</html>