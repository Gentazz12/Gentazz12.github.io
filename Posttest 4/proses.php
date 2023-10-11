<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Order Berhasil!</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $editType = $_POST["editType"];

            echo "<p>Name: $name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Type of Editing: $editType</p>";
        }
        ?>
        <form action="order.php"> 
            <input type="submit" value="Back">
        </form>
    </div>
</body>
</html>