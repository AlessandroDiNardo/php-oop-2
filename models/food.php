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

    // funzione per stampa
    public function getFood() {

        return "<h5>" . $this -> getName() . "</h1>" 
        . "<p>" . $this -> getDescription() . "</p>"
        . "<p>" . $this -> getPrice() . "</p>"
        . "<p>" . $this -> getCategory() . "</p>"
        . "<p>" . $this -> getQuantity() . "</p>"
    }
}


