<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        // inkrementacja pozwala na zwiększenie wartości zmiennej o 1
        // oraz przypisanie wyniku do tej samej zmiennej.
        // dekrementacja działa podobnie tylko odejmuje 1


        $a = 5;
        $a = $a + 1;
        $a++; // inkrementacja

        echo($a." inkrementacja <br>");


        $a--; // dekrementacja

        echo($a. " dekrementacja <br>");

        $b = 10;
        echo($b++ . "<br>"); // 10
        echo($b . "<br>"); // 11


        $c = 10;
        echo(++$c . "<br>"); // 11
        echo($c . "<br>"); // 11





    ?>

</body>
</html>