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

        return "<h5> NOME: " . $this -> getName() . "</h1>" 
        . "<p> DESCRIZIONE: " . $this -> getDescription() . "</p>"
        . "<p> PREZZO:" . $this -> getPrice() . "</p>"
        . "<p> CATEGORIA: " . $this -> getCategory() . "</p>"
        . "<p> QUANTITA': " . $this -> getQuantity() . "</p>";
    }
}


