<?php
class Movie
{
    public $title;
    public $genres = [];

    public function __construct($title, $genres)
    {
        $this->title = $title;
        $this->genres = $genres;
    }
}
