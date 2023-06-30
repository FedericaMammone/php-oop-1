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

    public function getTitle() {
        return $this->title;
    }

    public function getGenres() {
        $genreString = "";
        foreach ($this->genres as $genre) {
            $genreString .= $genre->name . ", ";
        }
        // Rimuove l'ultima virgola e lo spazio vuoto
        $genreString = rtrim($genreString, ", ");
        return $genreString;
    }
}

class Genre {

    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

$genre1 = new Genre("Fantasy");
$genre2 = new Genre("Avventura");
$genre3 = new Genre("Commedia");

$movie1 = new Movie("Il Signore degli Anelli", "Peter Jackson", 2001, $genre1, $genre2);
$movie2 = new Movie("La vita è bella", "Roberto Benigni", 1997, $genre3);

echo "Titolo: " . $movie1->getTitle() . "<br>";
echo "Regista: " . $movie1->director . "<br>";
echo "Anno: " . $movie1->year . "<br>";
echo "Generi: " . $movie1->getGenres() . "<br><br>";

echo "Titolo: " . $movie2->getTitle() . "<br>";
echo "Regista: " . $movie2->director . "<br>";
echo "Anno: " . $movie2->year . "<br>";
echo "Generi: " . $movie2->getGenres() . "<br>";
