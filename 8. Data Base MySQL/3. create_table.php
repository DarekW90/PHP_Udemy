<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $con = mysqli_connect("localhost","root",""); // host, login, hasło

        mysqli_select_db($con, "tutorial");

        mysqli_query($con, "CREATE TABLE IF NOT EXISTS users(id INT NOT NULL AUTO_INCREMENT, name VARCHAR(128), surname VARCHAR(128), city VARCHAR(128), country VARCHAR(64), PRIMARY KEY(id))");

        mysqli_close($con);
        echo("Koniec programu")
    ?>
</body>
</html>