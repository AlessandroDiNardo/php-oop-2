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
            . "<div>"
                . "<strong> MATERIALE: </strong>"
                . $this -> getMaterial() 
            . "</div>"
        ."</div>";
    }
}
?>