<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Movie {
            public $title;
            private $rating;
            //Setters and Getters
            function getRating() {
                return $this->rating;
            }
            function setRating($rating) {
                if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R") {
                    $this->rating = $rating;
                }else {
                    $this->rating = "NR";
                }
                
            }
            function __construct($title, $rating) {
                $this->title = $title;
                $this->setRating($rating);
            }
        }
        $avengers = new Movie("Avengers", "PGop");
        $avengers->setRating("foh");
        echo $avengers->getRating();
    ?>
</body>
</html>