<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Zadanie, zapisz wynik dla poszczególnych przypadków:
    
    echo("<br>#1 "); var_export ("Asia" != "Ola" || 1 >= 0); // true
    echo("<br>#2 "); var_export (7 != 7 || 56 <= 23); // false
    echo("<br>#3 "); var_export (1 === 1.0 || 3 !== 3 || 78 != 89); // true

    ?>
</body>
</html>