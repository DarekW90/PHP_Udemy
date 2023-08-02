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
        Wartość logiczna - boolean, może przyjąć jedną z dwóch wartości TRUE albo FALSE 
        czyli prawdę albo fałsz

    */

    $emailSent = TRUE;

    $flagResult = 10 > 23; // FALSE
    $result = 5 > 0; // TRUE

    echo($result . '<br>'); // TRUE na 1
    echo(FALSE); // FALSE na "nic"

    var_dump($flagResult);
    

    ?>


</body>
</html>