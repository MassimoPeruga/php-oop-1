<?php

// Definizione della classe Movie
class Movie
{
    // Variabili d'istanza
    public $genres;
    public $title;
    public $year;
    private $rating;


    /**
     * __construct
     *
     * @param  mixed $genres
     * @param  mixed $title
     * @param  mixed $year
     * @return void
     */
    public function __construct($genres, $title, $year)
    {
        $this->genres = is_array($genres) ? $genres : [$genres]; // Se genres non è già un array, lo converte in un array
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
        echo "Genres: " . implode(', ', $this->genres) . "<br>";
        echo "Year: {$this->year} <br/>";
        echo "Rating: {$this->rating}/5 <hr/>";
    }
}
