<?php
include __DIR__ . '/Models/Movie.php';
include __DIR__ . '/Data/db.php';
/* BETA VERSION <?php
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
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>PHP OOP 1</title>
</head>

<body>
    <h1 style="text-align: center;">Film</h1>


    <div class="container d-flex ">
        <?php foreach ($movies as $movie) : ?>
            <div class="col-4">
                <h2>Titolo Film : </h2>
                <span><?php echo $movie->title ?></span>
                <h3>Genere</h3>
                <span><?php echo $movie->genres ?></span>
            </div>
        <?php endforeach ?>
    </div>

</body>

</html>