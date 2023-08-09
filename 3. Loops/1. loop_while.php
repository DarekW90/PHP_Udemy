<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // pętla pozwala na wielokrotne wykonanie tego samego kodu

    $i = 10;
    while ($i >= 0 ) {
        echo($i . "<br>");
        $i--;
    }
    echo("koniec pętli while <br>");

    $a = 3;
    do {
        echo($a . "<br>");
        $a++;
    } while ($a < 8);

    echo("koniec pętli do while <br>");


    $b = 30;
    do {
        echo($b . "<br>");
        $b++;
    } while ($b < 8);

    echo("koniec pętli do while b = 30 <br>");
    ?>
</body>
</html>