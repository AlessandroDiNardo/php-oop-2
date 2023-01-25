<?php

class Food extends Products {

    public $brand;
    public $quantity;

    public function __construct($name, $description, $price, $category, $brand, $quantity){

        parent::__construct($name, $description, $price, $category)

        $this -> brand = $brand;
        $this -> quantity = $quantity;
    }
}


$food1 = new Food("Duck Curls snack", "I Riccioli d'Anatra GimDog sono squisiti snack per cani realizzati con pezzi di filetto di anatra liofilizzato ed essiccato all'aria.
                    Ad elevato contenuto di carne (77%), monoproteici, grain free, senza zuccheri aggiunti, senza coloranti artificiali e aromi.", 5, "Cane", "50gr");
$food2 = new Food("Prolife Kitten", "Prolife Kitten Pollo per gatti cuccioli. Alimento completo ricco in Carne Fresca di Pollo per gattini da 1 a 12 mesi.", 5, "Gatti", 
                    "Bustina monodose 85 gr");
$food3 = new Food("Oasy Kitten", "Le crocchette per gatto Oasy Kitten Pollo sono un alimento secco completo specifico per gattini in crescita. 
                    Dallo svezzamento ai 12 mesi di vita, il gatto necessita di un nutrimento intenso in grado di assecondare lo sviluppo armonioso degli organi e dei tessuti", 45, "Gatto", "7,5kg");
                    
$foods = [$food1, $food2, $food3];
?>
