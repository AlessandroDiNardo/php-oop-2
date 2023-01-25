<?php

class Kennel extends Products {

    private $dimension;
    private $material;

    public function __construct($name, $description, $price, $category, $dimension, $material){

        parent::__construct($name, $description, $price, $category);

        $this -> setDimension($dimension)
        $this -> setMaterial($material)
    }

    // dimension
    public function getDimension() {
        return $this -> dimension;
    }

    public function setDimension($dimension) {
        return $this -> dimension = $dimension;
    }

    // material
    public function geMmaterial() {
        return $this -> material;
    }

    public function setMaterial($material) {
        return $this -> material = $material;
    }


    // funzione per la stampa 
    public function getKennel() {

        return "<h5>" . $this -> getName() . "</h1>" 
        . "<p>" . $this -> getDescription() . "</p>"
        . "<p>" . $this -> getPrice() . "</p>"
        . "<p>" . $this -> getCategory() . "</p>"
        . "<p>" . $this -> getQuantity() . "</p>"
    }
}
?>