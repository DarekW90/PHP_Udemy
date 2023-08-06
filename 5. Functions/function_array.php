<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr = [0,2,4,6,8,10];

    echo(is_array($arr) . "<br>"); // czy to tablica
    echo(in_array(8, $arr) . "<br>"); // czy w tablicy znajduje się
    echo(count($arr) . "<br>"); // długość tablicy

    $arr2 = array_fill (1,3, 99); // od indeksu 1 trzy elementy
    print_r($arr2); echo ("<br>"); // mają teraz wartość 99

    $arr3 = array_merge($arr2, $arr); // łączenie talbic

    print_r($arr3);

    $arr4 = array_pad($arr, 12, -1); // rozszerzenie tablicy do 12 elemntów podając im wartość -1

    print_r($arr4);

    array_push($arr,12,14); // dodanie 2 elementów na koniec tablicy

    print_r($arr); echo("<br>");

    echo(array_pop($arr)."<br>"); //14, pobranie ostatniego elementu

    print_r($arr); echo("<br>"); // $arr zmodyfikowana, ostatni element to 12

    array_unshift($arr, -4, -2); // dodanie 2 elementów na początek
    print_r($arr); echo("<br>");

    echo(array_shift($arr)); echo("<br>"); // -4, pobrany element z początki 
    print_r($arr);echo("<br>");

    echo(array_rand($arr)."<br>"); // losowy element
    print_r(array_rand($arr,3)); echo("<br>"); // trzy losowe elementy

    $arr5 = array_reverse($arr);
    print_r($arr5);echo("<br>");


    print_r(array_search(8, $arr5)); echo("<br>");
    var_dump(array_search(-35, $arr5)); echo("<br>");


    echo("<br>");
    echo("<br>");
    echo("<br>");

    $sum = array_sum($arr5);
    echo($sum."<br>"); // 40

    $arr6 = [0,0,1,2,3,3,4,4,5];
    print_r(array_unique($arr6)); echo("<br>"); // unikalne wartości

    shuffle($arr6); // losowa pozycja elementów
    print_r($arr6); echo("<br>");

    $arr7 = ["a","b","c","d","e","f"]; // pobranie fragmentu tablicy
    print_r (array_slice($arr7, 4)); echo("<br>"); // fragment: e, f
    print_r (array_slice($arr7, 2, 3)); echo("<br>"); // [c,d,e]

    // pobranie fragmentu tablicy i zmiana elementów na coś innego

    print_r (array_splice($arr7, 0, 2,"z")); echo("<br>"); // [a,b]
    print_r($arr7); echo("<br>"); // [z,c,d,e,f]

    $nums = [3,7,8,2,1,0];
    sort($nums);
    print_r($nums); echo("<br>");

    rsort($nums);
    print_r($nums); echo("<br>");


    ?>
</body>
</html>