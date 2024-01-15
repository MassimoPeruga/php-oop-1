<?php

// Definizione della classe Movie
class Movie
{
    // Variabili d'istanza
    public $genre;
    public $title;
    public $year;
    private $rating;

    /**
     * __construct
     *
     * @param  mixed $genre
     * @param  mixed $title
     * @param  mixed $year
     * @return void
     */
    public function __construct($genre, $title, $year)
    {
        $this->genre = $genre;
        $this->title = $title;
        $this->year = $year;
        $this->rating = null;
    }

    /**
     * setRating
     *
     * @param  mixed $newRating
     * @return void
     */
    public function setRating($newRating)
    {
        $this->rating = max(0, min(5, $newRating));
    }

    /**
     * getRating
     *
     * @return void
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * displayInfo
     *
     * @return void
     */
    public function displayInfo()
    {
        echo "Title: {$this->title} <br/>";
        echo "Genre: {$this->genre} <br/>";
        echo "Year: {$this->year} <br/>";
        echo "Rating: {$this->rating}/5 <hr/>";
    }
}
