<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gen Works - Order</title>
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

    <div class="container">
        <h2>Form Order</h2>
        <form method="post" action="proses.php">
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="editType">Jenis Editing:</label>
                <select id="editType" name="editType">
                    <option value="Video Editing">Video Editing</option>
                    <option value="Graphic Design">Graphic Design</option>
                    <option value="Motion Graphic">Motion Graphic</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" name="order" id="order" value="Order">
            </div>
        </form>
    </div>
</body>

</html>