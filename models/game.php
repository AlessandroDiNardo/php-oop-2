<?php

class Game extends Products {

    private $dimension;

    public function __construct($name, $description, $price, $category, $dimension){

        parent::__construct($name, $description, $price, $category);

        $this -> setDimension($dimension);
    }

    
     // dimension
     public function getDimension() {
        return $this -> dimension;
    }

    public function setDimension($dimension) {
        return $this -> dimension = $dimension;
    }

    public function getGame() {

        return "<span> NOME: " . "<strong>". $this -> getName() . "</strong>" . "</span>" 
        . "<p> DESCRIZIONE: " . $this -> getDescription() . "</p>"
        . "<p> PREZZO:" . $this -> getPrice() . " euro" . "</p>"
        . "<p> CATEGORIA: " . $this -> category -> getCategory() . "</p>"
        . "<p> DIMENSIONE: " . $this -> getDimension() . "</p>";
    }
}
?>