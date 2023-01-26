<?php

class Food extends Products {

    private $quantity;

    public function __construct($name, $description, $price, $category, $quantity){

        parent::__construct($name, $description, $price, $category);

        $this -> setQuantity($quantity);
    }

     // quantity
     public function getQuantity() {
        return $this -> quantity;
    }

    public function setQuantity($quantity) {
        return $this -> quantity = $quantity;
    }

    public function getFood() {

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
                . "<strong> QUANTITA': </strong>"
                . $this -> getQuantity() 
            . "</div>"
        ."</div>";
    }
}


