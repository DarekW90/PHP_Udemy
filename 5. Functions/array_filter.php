<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr = [0,1,2,3,4,5,6,7,8,9,10];
    $arr[] = 11;
    $arr[] = 12;

    function even($v) {
        if ($v % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }

    print_r(array_filter($arr, "even")); echo("<br>");

    $filteredArr = array_filter($arr, function ($v) {
        if ($v > 5) {
            return true;
        } else {
            return false;
        }
    });

    print_r(array_filter($filteredArr)); echo("<br>");

    ?>
</body>
</html>