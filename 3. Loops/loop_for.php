<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // pętla pozwala na wielokrotne wykonanie tego samego kodu

    for ($i=0; $i <= 6; $i++) {
        echo($i . ", ");
    }
    echo ("Koniec pętli for <br>");

    $arr = [1,2,3,4,5,6];

    for ($a = 0; $a < count($arr); $a++) {
        $value = $arr[$a] * 3 ;
        echo($value. ", ");
    }
    echo ("Koniec pętli for <br>");


    for ($i = 1, $j = 10; $i <= 10; $i++, $j--) {
        echo ($i. " - ".$j. '<br>');
    }

    ?>

</body>
</html>