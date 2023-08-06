<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $filename = "files/fileWriteTest.txt";

    if (is_file($filename)) {
        $file = fopen($filename, "a");

        $content = "test 1 \n test 2 \n test 3";

        if (fwrite($file, $content) === false) {
            die ("Nie mogę zapisać do pliku!");
        }

        fclose($file);
    }

    ?>
</body>
</html>