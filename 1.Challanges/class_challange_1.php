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
        1. Stwórz klasę opisującą smartfon, klasa ma postac:
            - konstruktor przyjmujący string brand oraz model, float z wielkością ekranu oraz ilością pamięci jako int
            - dodaj metodę pokazującą tę informacje w przeglądarce
        2. Stwórz dwie instancje na bazie klasy i pokaż ich dane
    */

    class smartphone {

        public function __construct(
            private string $brand,
            private string $model,
            private float $screenSize,
            private int $memorySize,
        ) {
            $this -> brand = $brand;
            $this -> model = $model;
            $this -> screenSize = $screenSize;
            $this -> memorySize = $memorySize;
        }

        public function showData() {
            echo("Brand: ".$this->brand.", model: ".$this->model.", screen size: ".$this->screenSize.", memory size: ".$this->memorySize . "<br>");
        }
    }

    $phone1 = new smartphone("Nokia","3310", 4.5, 5000);
    $phone2 = new smartphone("Xiaomi","Redmi Note 10", 9.2, 32000);
    $phone1->showData();
    $phone2->showData();


    ?>
</body>
</html>