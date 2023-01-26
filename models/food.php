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

        return "<span> NOME: " . "<strong>". $this -> getName() . "</strong>" . "</span>" 
        . "<p> DESCRIZIONE: " . $this -> getDescription() . "</p>"
        . "<p> PREZZO:" . $this -> getPrice() . " euro" . "</p>"
        . "<p> CATEGORIA: " . $this -> category -> getCategory() . "</p>"
        . "<p> QUANTITA': " . $this -> getQuantity() . "</p>";
    }
}


