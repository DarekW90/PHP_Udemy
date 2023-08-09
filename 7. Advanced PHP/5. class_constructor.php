<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Book {
            private $title;
            private $numChapters;

            // konstruktor dla PHP 7
            public function __construct(
                string $title,
                int $numChapters
            ) {
                $this -> title = $title;
                $this -> numChapters = $numChapters;
            }

            public function showData() {
                echo($this->title." ".$this->numChapters);
            }
        }

        $book1 = new Book("Cars of 2020 year", 34);
        $book1->showData();

        echo("<br>");
        echo("<br>");
        echo("<br>");

        class Magazine {

            // konstruktor dla PHP 8
            public function __construct(
                private string $title,
                private int $numChapters
            ) {
                $this -> title = $title;
                $this -> numChapters = $numChapters;
            }

            public function showData() {
                echo($this->title." ".$this->numChapters);
            }
        }

        $mag1 = new Magazine("Car magazine", 1);
        $mag1->showData();
    ?>
</body>
</html>