<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <?php
        require_once 'models/products.php';
        require_once 'models/food.php';
        require_once 'models/kennel.php';
        require_once 'models/game.php';
    ?> 
</head>
<body>
    <div class="container">
        <h1>PET SHOP</h1>

        <h2>PRODOTTI:</h2>

        <div class="cards-container">
            <h3>CIBO</h3>   
            <div class="card">
                <?php 
                    foreach ($foods as $food) { 
                        ?>

                        <h5 class="card-title">
                            <?php echo $food -> name ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $food -> description ?>
                        </p>
                        <p class="card-text">
                            <?php echo $prodotto -> price ?>
                        </p>
                        <p class="card-text">
                            <?php echo $food -> brand ?>
                        </p>
                        <p class="card-text">
                            <?php echo $food -> quantity  ?>
                        </p>
                        <p class="card-text">
                            <?php echo $food -> category ' $' ?>
                        </p>

                        <?php 
                    } 
                ?>
            </div>
        </div>
        <div class="cards-container">
            <h3>CUCCE</h3>   
            <div class="card">
                <?php 
                    foreach ($  kennels as $kennel) { 
                        ?>

                        <h5 class="card-title">
                            <?php echo $kennel -> name ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $kennel -> description ?>
                        </p>
                        <p class="card-text">
                            <?php echo $prodotto -> price ?>
                        </p>
                        <p class="card-text">
                            <?php echo $kennel -> brand ?>
                        </p>
                        <p class="card-text">
                            <?php echo $kennel -> dimension  ?>
                        </p>
                        <p class="card-text">
                            <?php echo $kennel -> material  ?>
                        </p>
                        <p class="card-text">
                            <?php echo $kennel -> category ' $' ?>
                        </p>

                        <?php 
                    } 
                ?>
            </div>
        </div>

        <div class="cards-container">
            <h3>GIOCHI</h3>   
            <div class="card">
                <?php 
                    foreach ($games as $game) { 
                        ?>

                        <h5 class="card-title">
                            <?php echo $game -> name ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $game -> description ?>
                        </p>
                        <p class="card-text">
                            <?php echo $prodotto -> price ?>
                        </p>
                        <p class="card-text">
                            <?php echo $game -> brand ?>
                        </p>
                        <p class="card-text">
                            <?php echo $game -> dimension  ?>
                        </p>
                        <p class="card-text">
                            <?php echo $game -> category ' $' ?>
                        </p>

                        <?php 
                    } 
                ?>
            </div>
        </div>
    </div>
</body>
</html>