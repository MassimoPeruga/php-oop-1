<?php
require_once __DIR__ . './models/Movie.php';

// Istanziamento di due oggetti Movie
$movie1 = new Movie("Action", "The Dark Knight", 2008);
$movie2 = new Movie("Action", "Suicide Squad", 2016);
$movie3 = new Movie("Drama", "Joker", 2019);

// Imposto il rating dei film
$movie1->setRating(5);
$movie2->setRating(1);
$movie3->setRating(4);

// Utilizzo del metodo displayInfo per stampare a schermo le informazioni dei film
$movie1->displayInfo();
$movie2->displayInfo();
$movie3->displayInfo();
