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

        return "<h5> NOME: " . $this -> getName() . "</h1>" 
        . "<p> DESCRIZIONE: " . $this -> getDescription() . "</p>"
        . "<p> PREZZO:" . $this -> getPrice() . "</p>"
        . "<p> CATEGORIA: " . $this -> category -> getCategory() . "</p>"
        . "<p> DIMENSIONE': " . $this -> getDimension() . "</p>";
    }
}
?>