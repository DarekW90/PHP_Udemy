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
        null przypisany do zmiennej oznacza ze nie ma ona już wartości. Null to typ który wskazuje że intencjonalnie programista pozbył się wartości zmiennej, bo np. nie jest już potrzebna lub jest nieaktualna itd.
    */
    $data = 123;
    echo($data."<br>");
    $data = null;
    echo("null data - \"$data\"");

    ?>
</body>
</html>