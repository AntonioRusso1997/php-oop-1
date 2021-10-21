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
    }

    $firstMovie = new Movie('Avengers - Endgame', 'Avventura, Fantascienza, Azione', 'Anthony Russo, Joe Russo', 'Stephen McFeely', 'United States', 2019, 'Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hermsworth', 9.2);

    var_dump($firstMovie);

?>