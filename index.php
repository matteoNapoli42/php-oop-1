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

/*<?php
foreach ($movies as $movie) {
    echo $movie->title;
    echo $movie->genres;
}
?>*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>PHP OOP 1</title>
</head>

<body>
    <h1>Film</h1>
    <div class="container d-flex j-between">
        <div class="col-4">
            <h2>Titolo Film : </h2>
            <span>//inserire titolo film</span>
            <h3>Genere</h3>
            <span>//inserire genere</span>
        </div>
    </div>
</body>

</html>