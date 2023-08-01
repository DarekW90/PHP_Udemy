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
            Tablice pozwalają na przechowywanie wielu wartości w zmiennej
        */

    $userNames = ["Kasia","Adam","Ania","Karol", 12]; // różne wartości
    echo($userNames[0] . '<br>');
    echo($userNames[1] . '<br>');
    echo($userNames[2] . '<br>');
    echo($userNames[3] . '<br>');


    // tablica asocjacyjna 
    echo('<br>');


    $carBrandModels = [];
    $carBrandModels["Ford"] = "Mustang";
    $carBrandModels["Dodge"] = "Viper";
    $carBrandModels["Hummer"] = ["H1", "H2", "H3"];
    
    echo($carBrandModels["Ford"] . '<br>');
    echo($carBrandModels["Dodge"] . '<br>');
    echo($carBrandModels["Hummer"][1] . '<br>');
    // echo($carBrandModels[0] . '<br>'); // błąd


    echo('<br>');
    // podgląd zawartości zmiennych dla tablicy asocjacyjnej
    print_r($carBrandModels);

    echo('<br>');

    $formattedText = print_r($carBrandModels, true);

    echo("<pre>$formattedText</pre>");




    ?>

</body>
</html>