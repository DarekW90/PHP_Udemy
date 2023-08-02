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
        Zastosuj if else if do sprwadzenia czy wartość 
        w zmiennej $num jest dodatnia jest dodatnia, ujemna czy równa 0,
        pokaż w przeglądarce stosowną informację.
    */

    $num = -10;

    if ($num == 0) {
        echo("$num jest równa zero <br>");
    } elseif ($num < 0) {
        echo("$num jest liczbą ujemną <br>");
    } else {
        echo("$num jest liczbą dodatnią <br>");
    }

    echo("koniec programu");
    ?>
</body>
</html>