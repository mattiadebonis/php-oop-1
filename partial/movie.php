  

<?php
    //è definita una classe ‘Movie’
    class Movie {
        // => all'interno della classe sono dichiarate delle variabili d'istanza
        public $title;
        public $genre;
        public $ranking;
        public $description;
        public $year;


        //=> all'interno della classe è definito un costruttore
        function __construct ($title, $genre, $ranking, $description, $year){
            $this->title = $title;
            $this->genre = $genre;
            $this->ranking = $ranking;
            $this->description = $description;
            $this->year = $year;
        }

        //=> all'interno della classe è definito almeno un metodo
        public function getAge($yearMovie){
            return (date("Y") - $yearMovie);
        }

    }



?>