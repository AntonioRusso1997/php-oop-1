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

        function getInfo() {
            return 
                '<h2> Titolo: ' .$this->title .'</h2>'.
                '<h2> Genere: ' .$this->title .'</h2>'.
                '<h2> Regista: ' .$this->director .'</h2>'.
                '<h2> Sceneggiatura: ' .$this->screenplay .'</h2>'.
                '<h2> Paese: ' .$this->country .'</h2>'.
                '<h2> Anno di uscita: ' .$this->year .'</h2>'.
                '<h2> Cast Principale: ' .$this->mainCast .'</h2>'.
                '<h2> Voto: ' .$this->vote .'</h2>';
        }
    }

    $firstMovie = new Movie('Avengers - Endgame', 'Avventura, Fantascienza, Azione', 'Anthony Russo, Joe Russo', 'Stephen McFeely', 'United States', 2019, 'Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hermsworth', 9.2);    
    $secondMovie = new Movie('Natale in India', 'Commedia', 'Neri Parenti', 'Lorenzo De Luca', 'Italy', 2003, 'Christian De Sica, Massimo Boldi, Enzo Salvi, Biagio Izzo', 4.1);

    //Stampo primo film
    echo '<h1 style="color: red">Primo Film: ' .$firstMovie->getTitle() .'</h1>';
    var_dump($firstMovie);
    echo $firstMovie->getInfo();
    $firstMovie->setVote(7.2); // 'Setto' un nuovo voto
    echo '<h2 style="color:blue">Voto (con setVote): ' .$firstMovie->getVote()  .'</h2>';

    echo '<hr>';
    
    //Stampo secondo film
    echo '<h1 style="color: red">Secondo Film: ' .$secondMovie->getTitle() .'</h1>';
    var_dump($secondMovie);
    echo $secondMovie->getInfo();
    $secondMovie->setVote(10); // 'Setto' un nuovo voto
    echo '<h2 style="color:blue">Voto (con setVote): ' .$secondMovie->getVote()  .'</h2>';

?>