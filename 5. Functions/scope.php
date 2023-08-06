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
        Zasięg zmiennych w PHP:
        - zmienne globalne - zdefiniowane poza funckją
        - zmienne lokalne - dostępne tylko wewnątrz funkcji.
            Uwaga funkcja nie ma dostępu do zmiennych globalnych zdefiniowanych poza funkcją!
            Jeśli są potrzebne trzeba to wskazaćsłowem kluczowym global wewnątrz funkcji.
        - Zmienne superglobalne - dostępne wszędzie w skrypcie
            oraz wewnątrz funkcji
    */

    $num = 10; // zmienna globalna
    $name = "Ania";

    function test () {
        global $name;
        echo ($num); // warning nie ma dostępu do zmiennej globnalnej $num
                     // jest to warning... czyli skrypt działa dalej

        echo($name);

        $data = " Hello!"; // definiowanie zmiennej lokalnej
        echo($data);

        var_dump($_SERVER); // super globalne
    }

    test();
    echo("Test: $data"); // warning zmienna dostępna jedynie wewnątrz funkcji

    ?>
</body>
</html>