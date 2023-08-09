<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // od PHP wersji 8.0

    $num = 10;
    
    $result = match($num) {
        0 => "zero",
        3 => "trzy",
        8 => "osiem",
        10 => "dziesięć",
        default => "nieznana wartość"
    };

    echo($result);

    ?>
</body>
</html>