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

        return 
        "<div class='card'>"
            . "<h3>" . $this -> getName() . "</h3>"  
            . "<div>" 
                . "<strong> DESCRIZIONE: </strong>" 
                . $this -> getDescription() 
            . "</div>"
                . "<div>" 
                . "<strong> PREZZO: </strong>"
                . $this -> getPrice() 
                . "€" 
            . "</div>"
            . "<div>" 
                . "<strong> CATEGORIA: </strong>" 
                . $this -> category -> getCategory() 
            . "</div>"
            . "<div>" 
                . "<strong> DIMENSIONE: </strong>"
                . $this -> getDimension() 
            . "</div>"
        ."</div>";
    }
}
?>