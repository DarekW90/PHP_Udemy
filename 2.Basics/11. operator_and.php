<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Operator logiczny and czyli && zwraca prawdę jeśli po obu stronach będzie prawda

    var_export( 10 >= 3 && 12 == 12); echo("<br>"); // true
    var_export( 10 >= 22 && 12 == 12); echo("<br>"); // false
    var_export( 10 >= 22 && 12 != 12); echo("<br>"); // false
    var_export( 55 != 12 && 1 >= 0 && "Ania" == "Ania"); echo("<br>"); // true
    var_export( 55 != 12 && 1 >= 3 && "Ania" == "Ania"); echo("<br>"); // false

    ?>

</body>
</html>