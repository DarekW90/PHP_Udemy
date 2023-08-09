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
    r   - otwiera plik tylko do odczytu. Kursor na początku.
    r+  - otwiera plik tylko do odczytu i zapisu. Kursor na początku.
    w   - otwiera plik tylko do zapisu, usuwa jego zawartość.
          Jeśli plik nie istnieje, próbuje go utworzyc. Kursor na początku.
    w+  - otwiera plik do zapisu i odczytu, usuwa jego zawartość.
          Jeśli plik nie istnieje, próbuje go utworzyc. Kursor na początku.
    a   - otwiera plik tylko do zapisu.
          Jeśli plik nie istnieje, próbuje go utworzyc. Kursor na końcu.
    a+  - otwiera plik do odczytu i zapisu.
          Jeśli plik nie istnieje, próbuje go utworzyc. Kursor na końcu.
    */

    $filename = "files/file.txt";


    if (is_file($filename)) {
        $file = fopen($filename,"r"); // otwarcie uchwytu

        $content = fread($file, filesize($filename));

        fclose($file); // zamknięcie uchwytu

        echo("<pre>$content</pre>"); // tag pre zachowuje formatowanie oryginalnego pliku tekstowego
    }




    ?>
</body>
</html>