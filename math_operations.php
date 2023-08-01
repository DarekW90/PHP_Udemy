<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 10;
    $b = 23;

    $sum = $a + $b;

    $result = ((($a + $b) * 2) + 100) / 3; // 55.333333

    echo($result . "<br>");

    echo( 3**3 . "<br>"); // 27

    echo (40 % 12 . "<br>"); // 4

    $intNum = (int)$result; 
    echo($intNum . "<br>"); // 55


    $floatNum = (float)$intNum;
    echo($floatNum . "<br>");

    var_dump($floatNum . "<br>");
    var_dump($intNum . "<br>");





    ?>
</body>
</html>