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
        napisz zmienną z tablicą wraz z elementami od 0 do 10
        z krokiem co 2 czyli 2,4,6....
        Napisz pętlę for, która przejdzie po tych wszystkich
        elementach, pobierze wartość z tablicy według indeksu,
        doda 5 do liczby z tablicy i całość pomnoży przez 2.
        Wynik każdej iteracji zapisz w przglądarce.
    */

    $arr = [0,2,4,6,8,10];

    for ($a = 0; $a < count($arr); $a++) {
        $value = ($arr[$a] + 5) * 2 ;
        echo($value. ", ");
    }
    echo ("Koniec pętli for <br>");


    ?>
</body>
</html>