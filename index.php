<?php

class Movie
{
    public $title;
    public $genres;

    public function __construct($title, $genres)
    {
        $this->title = $title;
        $this->genres = $genres;
    }
}

$movies = [
    new Movie("FIlm 1", " Genre 1"),
    new Movie("Film 2", "Genre 2"),
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>

<body>
    <h1>Film</h1>
    <div>
        <h1>
            <?php
            foreach ($movies as $movie) {
                echo $movie->title;
                echo $movie->genres;
            }
            ?>
        </h1>

    </div>


</body>

</html>