<?php

    class Movie {
        public $title;
        public $genre;
        public $director;
        public $screenplay;
        public $country;
        public $year;
        public $mainCast;
        public $vote;

        /* Creo la funzione "Costruttore" che permette di eseguire azione nel momento in cui viene creata l'instanza della classe. */
        function __construct($_title, $_genre, $_director, $_screenplay, $_country, $_year, $_mainCast, $_vote)
        {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->director = $_director;
            $this->screenplay = $_screenplay;
            $this->country = $_country;
            $this->year = $_year;
            $this->mainCast = $_mainCast;
            $this->vote = $_vote;
        }

        function getTitle() {
            return $this->title;
        }

        function getVote() {
            return $this->vote;
        }

        function setVote($_vote) {
            $this->vote = $_vote;
        }
    }

    $firstMovie = new Movie('Avengers - Endgame', 'Avventura, Fantascienza, Azione', 'Anthony Russo, Joe Russo', 'Stephen McFeely', 'United States', 2019, 'Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hermsworth', 9.2);    
    $secondMovie = new Movie('Natale in India', 'Commedia', 'Neri Parenti', 'Lorenzo De Luca', 'Italy', 2003, 'Christian De Sica, Massimo Boldi, Enzo Salvi, Biagio Izzo', 4.1);

    //Stampo primo film
    echo '<h2>Primo Film: ' .$firstMovie->getTitle() .'</h2>';
    var_dump($firstMovie);
    echo '<h3>Voto: ' .$firstMovie->getVote()  .'</h3>';
    $firstMovie->setVote(7.2); // 'Setto' un nuovo voto
    echo '<h3>Voto (con setVote): ' .$firstMovie->getVote()  .'</h3>';

    echo '<hr>';
    
    //Stampo secondo film
    echo '<h2>Secondo Film: ' .$secondMovie->getTitle() .'</h2>';
    var_dump($secondMovie);
    echo '<h3>Voto: ' .$secondMovie->getVote()  .'</h3>';
    $secondMovie->setVote(10); // 'Setto' un nuovo voto
    echo '<h3>Voto (con setVote): ' .$secondMovie->getVote()  .'</h3>';

?>