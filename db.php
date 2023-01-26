<?php

require_once ("C:/Users/PC/Desktop/boolean/PHP/php-oop-2/models/category.php");
require_once ("C:/Users/PC/Desktop/boolean/PHP/php-oop-2/models/products.php");
require_once ("C:/Users/PC/Desktop/boolean/PHP/php-oop-2/models/food.php");
require_once ("C:/Users/PC/Desktop/boolean/PHP/php-oop-2/models/kennel.php");
require_once ("C:/Users/PC/Desktop/boolean/PHP/php-oop-2/models/game.php");

// creazione categorie principali
$dog = new Category("Cane");
$cat = new Category ("Gatto");

// creazione dei vari prodotti
$products = 
[

    $foods = 
    [
        new Food("Duck Curls snack", "I Riccioli di Anatra GimDog sono squisiti snack per cani realizzati con pezzi di filetto di anatra liofilizzato ed essiccato all'aria. 
                Ad elevato contenuto di carne, monoproteici, grain free, senza zuccheri aggiunti, senza coloranti artificiali e aromi", 5, "Cane", "50gr"),
        new Food("Prolife Kitten", "Prolife Kitten Pollo per gatti cuccioli. Alimento completo ricco in Carne Fresca di Pollo per gattini da 1 a 12 mesi.", 
                5, "Gatti", "Bustina monodose 85 gr"),
    ],
    $kennels = 
    [
        new Kennel("Cuccia grande per cane", "Cuccia grande per cane in tessuto imbottita. Cuccia in tessuto con fantasia colorata, 
                    con cuscino interno   imbottito rimovibile. Interno della cuccia in colore rosso, imbottitura in poliuretano. Fondo antiscivolo.",
                    42, "Cane", "Disponibile in 3 misure: 68 cm - 75 cm - 80 cm", "Tessuto"),
        new Kennel("Cuccia per gatto", "Cuccia con rivestimento in tessuto e cuscino interno imbottito double face. 
                    La cuccia ha l'imbottitura in PU e fondo antiscivolo. Cuscino interno rimovibile compreso nella Cuccia per cane e gatto in tessuto imbottita",
                    36, "Gatto", "Disponibile in 4 misure: 40 cm - 48 cm - 54 cm - 60 cm", "Tessuto"),
    ],
    $games = 
    [
        new Game("Palla spargiricompensa per cani Camon", "Un gioco che non può mancare in casa per assicurare tanto divertimento al tuo amico 
                peloso e per stimolare la sua mente dandogli modo di utilizzare le energie in eccesso. Questa palla si può riempire di piccoli snack che poi il cane si divertirà a far uscire rotolandola con il muso.", 7, "Diametro 7cm", "Cani"),
        new Game("Tunnel per gatti", "Tunnel per gatti in tessuto", 20, "lunghezza 120cm",  "Gatti"),
    ],
];
