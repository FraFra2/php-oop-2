<?php
require_once __DIR__ . '/classes/Products.php';
require_once __DIR__ . '/classes/Categories.php';
require_once __DIR__ . '/classes/Foods.php';
require_once __DIR__ . '/classes/Shelters.php';
require_once __DIR__ . '/classes/Toys.php';
require_once __DIR__ . '/db.php';



?>


<!DOCTYPE html>
<html lang="it">
<head>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class = "bg-[--background]">
    <!-- HEADER -->
    <?php require_once __DIR__ . '/header.php'; ?>
    <?php //var_dump($products)?>
    <!-- MAIN -->

    <div class = "container mx-auto">
        <div class = "grid grid-cols-4 gap-x-8 gap-y-4 py-8">
            <?php
            foreach ($products as $key => $product) {
            ?>
                <div class = "drop-shadow-2xl bg-[--accent] text-[--alttext] p-4 rounded-xl">
                    <div class = "flex justify-center items-center">
                        <img class = "object-cover rounded-md" src="https://picsum.photos/250/250" alt="">
                    </div>
                    <h2 class = "text-2xl">
                        <?= $product->name ?>
                    </h2>
                    <p>
                        <?= $product->desc ?>
                    </p>
                    <h3>
                        Prezzo: <span class = "text-xl"><?= $product->price ?> €</span>
                    </h3>
                    <h4 class = "text-lg">
                        Categoria: <?= $product->categorie->icon ?>
                    </h4>
                    <h5>
                        <?php
                         if($product->avaible == 0){
                            ?>
                            Disponibile: <i class="fa-solid fa-square-xmark text-red-500"></i>
                        <?php
                         }
                         ?>
                         <?php
                         if($product->avaible == 1){
                        ?>
                            Disponibile: <i class="fa-solid fa-square-check text-green-500"></i>
                            
                        <?php
                         }
                         ?>
                    </h5>
                    <!-- TOYS -->
                    <div>
                         <?php 
                         if ($product instanceof Toy){
                            ?>
                            Materiale: <?= $product->material ?>
                        <?php
                         }
                         ?>
                    </div>
                    <!-- FOODS -->
                    <div>
                         <?php 
                         if ($product instanceof Food){
                            ?>
                            Scadenza: <?= $product->expiracy ?>
                        <?php
                         }
                         ?>
                    </div>
                    <!-- SHELTERS -->
                    <div>
                         <?php 
                         if ($product instanceof Shelter){
                            ?>
                            Dimensione: <?= $product->size ?>
                        <?php
                         }
                         ?>
                    </div>

                    <!-- Buying -->
                    <div class = "flex justify-start items-center pt-4">
                    <?php
                         if($product->avaible == 0){
                            ?>
                            <h3 class = "bg-red-500 p-2 rounded-xl">Unavaible</h3>
                        <?php
                         }
                         ?>
                         <?php
                         if($product->avaible == 1){
                        ?>
                            <button class = "bg-green-500 py-2 px-4 transition-all hover:px-16 rounded-xl">Buy</button>
                            
                        <?php
                         }
                         ?>
                    </div>
                    
                </div>
                

            <?php
            }
            ?>
        </div>
    </div>

    
</body>
</html>