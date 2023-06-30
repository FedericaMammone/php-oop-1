<?php

class Movie {

    public $title;
    public $director;
    public $year;
    public $genres;

    public function __construct($title, $director, $year, Genre ...$genres) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genres = $genres;
    }

}
