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
        Zadanie z funkcjami:
        1. Napisz program kwalifikacyjny do oddania krwi,
           zrób funkcję przyjmującą wiek oraz wagę osoby.
           Musi mieć minimum 18lat oraz 50kg.
           W funkcji sprwadź czy wiek i waga jest prawidłowa,
           jeśli pewnych wymagań kandydat nie spełnia podaj 
           informację za pomocą echo() i zwróć z funkcji false z funkcji.
        2. Jeśli kandydat spełnia wymagania zwróć z funkcji true
        3. Przetestuj funkcję dla danyych:
           - 19 i 60kg
           - 34 i 49kg
           Wynik czy spełnia wymagania pokaż w przeglądarce
    */

    function donateBlood($weight, $age) {
        if ($age >= 18) {
            if ($weight >= 50) {
                echo("Kandydat spełnia wymagania wieku ($age) oraz wagi ($weight) <br>");
                return true;
            } else {
                echo("Kandydat spełnia wymaganie wieku ($age), ale ma za małą wagę ($weight) <br>");
                return false;
            }
        } else {
            echo ("Kandydat w wieku $age nie może oddać krwi <br>");
        }
    }

    $candidate1 = donateBlood(60,19);
    var_dump($candidate1);

    $candidate2 = donateBlood(49,34);
    var_dump($candidate2);

    ?>
</body>
</html>