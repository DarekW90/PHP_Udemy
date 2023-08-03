<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function sum($a, $b) {
            $result = $a + $b;
            echo("Wynik: $result <br>");
        }

    sum(10,2);
    sum(16,3);
    sum(40,23);
    sum(55,8);
    sum(22,56);
    sum(15,15);


        function multiply($num1, $num2) {
            return $num1 * $num2;
        }

        $result = multiply(4,5);
        echo("Wynik mnożenia: $result <br>");

    ?>
</body>
</html>