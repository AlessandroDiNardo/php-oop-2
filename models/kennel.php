<?php

class Kennel extends Products {

    public $dimension;
    public $material;

    public function __construct($name, $description, $price, $category, $dimension, $material){

        parent::__construct($name, $description, $price, $category)

        $this -> dimension = $dimension;
        $this -> material = $material;
    }
}

$kennel1 = new Kennel("Cuccia grande per cane", "Cuccia grande per cane in tessuto imbottita. Cuccia in tessuto con fantasia colorata 'casette', 
                        con cuscino interno   imbottito rimovibile (compreso). Interno della cuccia in colore rosso, imbottitura in poliuretano. Fondo antiscivolo."
                        42, "Cane", "Disponibile in 3 misure: 68 cm - 75 cm - 80 cm", "Tessuto");
$kennel2 = new Kennel("Cuccia per gatto", "Cuccia con rivestimento in tessuto e cuscino interno imbottito double face (peluche/policotone). 
                        La cuccia ha l'imbottitura in PU e fondo    antiscivolo. Cuscino interno rimovibile compreso nella Cuccia per cane e gatto in tessuto imbottita",
                        36, "Gatto", "Disponibile in 4 misure: 40 cm - 48 cm - 54 cm - 60 cm", "Tessuto");
$kennel3 = new Kennel("Cuccia per cani Spike Classic", "Cuccia per cani Spike Classic, in legno di cipresso di Cunningham oleato, con tetto in cartone bitumato a spioventi. 
                        Piedini regolabili in altezza, ideale in caso di pioggia, facile da montare", 80, "Cane", "Disponibile in 3 misure: 75cm - 85cm - 95cm", "Legno di cipresso");
                        
$kennels = [$kennel1, $kennel2, $kennel3];
?>