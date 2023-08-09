<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Operatory porównania sprawdzją dwie wartości i jako
    // wynik dodają wartość logiczną: true lub false

    $a = 10;
    $b = 12;

    $flag = $a > $b; // false
    $flag2 = $a < $b; // true

    var_export(23 >= 10); echo("<br>"); // true
    var_export(23 >= 23); echo("<br>"); // true
    var_export(23 >= 40); echo("<br>"); // false
    
    var_export(100 <= 234); echo("<br>"); // true

    var_export(1 == 1); echo("<br>"); // true
    var_export(1 == 1.0); echo("<br>"); // true
    var_export(1 != 1); echo("<br>"); // false
    var_export(1 != 7); echo("<br>"); // true

    // sprawdzanie wartości i typu
    var_export(1 === 1); echo("<br>"); // true
    var_export(1 === 1.0); echo("<br>"); // false
    var_export(1 !== 1.0); echo("<br>"); // true


    var_export("Ania" == "Ania"); echo("<br>"); // true
    var_export("Ania" == "ania"); echo("<br>"); // false


    var_export(true == true); echo("<br>"); // true
    var_export(true == false); echo("<br>"); // false

    ?>
</body>
</html>