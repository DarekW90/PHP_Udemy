<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dirName ="files/test";

    if(!is_dir($dirName)) {
        mkdir($dirName);
    } else  {
        for ($i = 0; $i < 5; $i++) {
            $path = $dirName."/dir".$i;
            
            if (!is_dir($path)) {
                mkdir($path);
            }
        }
    }

    $path2 = "$dirName/dir3";
    if (is_dir("$path2")) {
        rmdir($path2);
    }

    $files = scandir($dirName);
    print_r($files);

    unlink("files/visits.txt");
    ?>

</body>
</html>