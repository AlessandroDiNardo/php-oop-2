<?php

    class Game extends Products {

        private $dimension;

        public function __construct($name, $description, $price, $category, $description, $dimension){

            parent::__construct($name, $description, $price, $category);

            $this -> setDimension($dimension);
        }
    }

    // dimension
    public function getDimension() {
        return $this -> dimension;
    }

    public function setDimension($dimension) {
        return $this -> dimension = $dimension;
    }

    // funzione per la stampa 
    public function getGame() {

        return  "<h5>" . $this -> getName() . "</h1>" 
        . "<p>" . $this -> getDescription() . "</p>"
        . "<p>" . $this -> getPrice() . "</p>"
        . "<p>" . $this -> getCategory() . "</p>"
        . "<p>" . $this -> getDimension() . "</p>"
    }
?>