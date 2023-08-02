<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $test = "!@#$";

        echo("Hello World"."!".$test."<br>");

        $num = 10;
        $num = $num + 2; // 12
        $num += 3; // 15

        echo($num . "<br>");

        $num -= 5; // 10
        $num *= 2; // 20
        $num /= 4; // 5
        $num **= 2; // 25
        $num %= 2; // 1

        echo ($num . "<br>"); 
    ?>

</body>
</html>