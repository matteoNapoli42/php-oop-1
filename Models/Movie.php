<?php
class Movie
{
    public $title;
    public $genres = [];
    public $rating;
    public $coverImg;

    public function __construct($title, $rating, $coverImg, ...$genres)
    {
        $this->title = $title;
        $this->rating = $rating;
        $this->coverImg = $coverImg;
        $this->genres = $genres;
    }
}
