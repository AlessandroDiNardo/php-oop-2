<?php



class Kennel extends Products {

    private $dimension;
    private $material;

    public function __construct($name, $description, $price, $category, $dimension, $material){

        parent::__construct($name, $description, $price, $category);

        $this -> setDimension($dimension);
        $this -> setMaterial($material);
    }

    
     // dimension
     public function getDimension() {
        return $this -> dimension;
    }

    public function setDimension($dimension) {
        return $this -> dimension = $dimension;
    }

    // material
    public function getMaterial() {
        return $this -> material;
    }

    public function setMaterial($material) {
        return $this -> material = $material;
    }

    public function getKennel() {

        return "<h5> NOME: " . $this -> getName() . "</h1>" 
        . "<p> DESCRIZIONE: " . $this -> getDescription() . "</p>"
        . "<p> PREZZO:" . $this -> getPrice() . "</p>"
        . "<p> CATEGORIA: " . $this -> category -> getCategory() . "</p>"
        . "<p> DIMENSIONE: " . $this -> getDimension() . "</p>"
        . "<p> MATERIALE: " . $this -> getMaterial() . "</p>";
    }
}
?>