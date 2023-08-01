<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // operator logiczny OR czyli || zwraca fałsz jeśli po obu stronach będzie fałsz, czyli jeśli jest chociaż jedna prawda z którejś strony to zwróci true

    var_export (1 == 1 || 10 != 10 ); echo("<br>"); // true
    var_export (4 <=- 2 || 7 >= 8 ); echo("<br>"); // false
    var_export (4 < 2 || 7 >= 7); echo("<br>"); // true
    var_export (4 < 2 || 7 >= 7 || "B" == "B"); echo("<br>"); // true

    ?>
</body>
</html>