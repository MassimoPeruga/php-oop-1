<?php
require_once __DIR__ . './models/Movie.php';

// Creazione di un array di film
$movies = [
    // Istanziamento degli oggetti Movie
    new Movie(["Action", "Drama", "Thriller"], "The Dark Knight", 2008),
    new Movie(["Action", "Comedy"], "Suicide Squad", 2016),
    new Movie(["Drama", "Thriller", "Noir"], "Joker", 2019),
];

// Impostazione dei rating dei film
$movies[0]->setRating(5);
$movies[1]->setRating(1);
$movies[2]->setRating(4);

// Stampa delle informazioni di tutti i film
foreach ($movies as $movie) {
    $movie->displayInfo();
}
