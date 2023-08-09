<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
        Instrukcje sterujące dodają logikę do naszego programu, 
        sprawdzają warunek i jeśli jest spełniony czyli gdy da true 
        to wykonują blok kodu
    */

    $a = 4;
    $b = 10;

    if ($a < $b) {
        echo("a mniejsze od b<br>");
    }

    if ($b > 20) {
        echo ("b większe od 20 <br>");
    } else {
        echo ("b nie jest większe od 20<br>");
    }

    ?>
</body>
</html>