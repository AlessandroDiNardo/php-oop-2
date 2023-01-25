<?php

class Game extends Products {

    public $dimension;

    public function __construct($name, $description, $price, $category, $description, $dimension){

        parent::__construct($name, $description, $price, $category)

        $this -> dimension = $dimension;
    }
}

$game1 = new Game("Palla spargiricompensa per cani Camon", "Un gioco che non può mancare in casa per assicurare tanto divertimento al tuo amico 
                    peloso e per stimolare la sua mente dandogli modo di utilizzare le energie in eccesso. Questa palla si può riempire di piccoli snack che poi il cane si divertirà a far uscire rotolandola con il muso.", 7, "Diametro 7cm", "Cani");
$game2 = new Game("Tunnel per gatti", "Tunnel per gatti in tessuto", 20, "lunghezza 120cm", "Gatti");
$game3 = new Game("Frisbee galleggiante", "Il frisbee è un gioco indispensabile per divertirsi con il proprio amico peloso. 
                    Il materiale galleggiante offre il massimo divertimento anche in acqua.", 5, "Misure disponibili: 15cm - 22cm", "Cani");

$games = [$game1, $game2, $game3];
?>