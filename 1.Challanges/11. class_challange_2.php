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
        1. Stwórz klasę Math z podstawowymi operacjami matematycznymi:
        - add - dodającą dwie liczby i zwracającą wynik
        - substract - odejmującą liczby
        - divide - dzielącą liczby
        - pow - liczba do potęgi
        2. Stwórz instancję klasy i przeprowadź przykładowe operacje matematyczne
    */

    class math {

        public function __construct(
            private int $a,
            private int $b,
            
        ) {
            $this -> add = $a + $b;
            $this -> substract = $a - $b;
            $this -> divide = $a / $b;
            $this -> pow = $a**$b;
        }

        public function showData() {
            echo("adding: ".$this->add.",<br> substracting: ".$this->substract.",<br> dividing: ".$this->divide.",<br> powering: ".$this->pow . "<br>");
        }
    }

    $math = new math(3,5);
    $math->showData();


    ?>
</body>
</html>