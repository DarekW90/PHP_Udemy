<?php declare(strict_types=1); ?> 

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
        W php możemy określić jakiego typu argument akceptuje funkcja
        oraz jaki konkretny typ zwraca np:
        int, float, array, string, object, resource, bool, null


        DEKLARACJA NA GÓRZE DOKUMENTU !!!
    */

    function add(int $a, int $b) : int {
        return $a + $b;
    }
    function addFloats(float $a, float $b) : float {
        return $a + $b;
    }

    echo (add(5,7)."<br>");
    echo (addFloats(5.23,7.56)."<br>");

    echo("<br>");
    echo("<br>");
    
    // unia typów

    function add3(int | float $a, int | float $b): int | float {
        return $a + $b;
    }

    echo (add3(56,12)."<br>");
    echo (add3(56,12.456)."<br>");
    echo (add3(56.456,12.456)."<br>");
    echo ("<br>");
    echo ("<br>");
    
        // wartość null able ?string


    function printData(?string $str) : void {
        echo($str."<br>");
    }

    printData ("Hello World!");
    printData (null);


    ?>
</body>
</html>