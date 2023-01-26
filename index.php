<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <?php

        require_once ('db.php');
        require_once ('models/products.php');
        require_once ('models/category.php');
        require_once ('models/products.php');
        require_once ('models/food.php');
        require_once ('models/kennel.php');
        require_once ('models/game.php');
    ?>
</head>
<body>
    <div class="container">
        <h1>PET SHOP</h1>

        <div class="cards-container">
            <h1>CIBO</h1>   
            <div class="card">
                <?php
                        
                    foreach($foods as $food) {

                        echo $food -> getFood();
                    }
                ?>
            </div>
        </div>
        
        <div class="cards-container">
            <h1>CUCCE</h1>   
            <div class="card">
                <?php
                        
                    foreach($kennels as $kennel) {

                        echo $kennel -> getKennel();
                    }
                ?>
            </div>
        </div>

        <div class="cards-container">
            <h1>GIOCHI</h1>   
            <div class="card">
                <?php
                        
                    foreach($games as $game) {

                        echo $game -> getGame();
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>