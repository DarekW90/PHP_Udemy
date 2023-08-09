<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Car {
            private $brand;
            private $model;

            public function setData($brand, $model) {
                $this->brand=$brand;
                $this->model=$model;
            }

            public function printData() {
                echo($this->brand. " " . $this->model. "<br>");
            }
        }

        $car1 = new Car(); // tworzymy nową instancje klasy Car na bazie definicji klasy Car

        $car1->setData("Ford","Mustang");
        $car1->printData();

        $car2 = new Car(); // tworzymy nową instancje klasy Car na bazie definicji klasy Car

        $car2->setData("Dodge","Viper");
        $car2->printData();
    ?>
</body>
</html>