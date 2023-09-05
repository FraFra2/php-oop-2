
<?php
$categoriaCane = new Categorie("Cane", '<i class="fa-solid fa-shield-dog"></i>');
$categoriaGatto = new Categorie("Gatto", '<i class="fa-solid fa-shield-cat"></i>');

$products = [];

$products = [
    new Food("Crocchette", "Descrizione buonissime crocchette", 12.99, $categoriaGatto, 1, "22/07/2024"),
    new Toy("Osso per cani", "Osso gustoso per il tuo cane", 7.99, $categoriaCane, 0, "Plastica"),
    new Shelter("Cuccia Held", "Cuccia per cani", 9.99, $categoriaCane, 1, "100cmx120cmx10cm"),
    new Food("Snack per cani", "Snack deliziosi per il tuo amico a quattro zampe", 5.99, $categoriaCane, 1, "24/09/2024"),
    new Product("Guinzaglio", "Guinzaglio resistente per il tuo cane", 15.99, $categoriaCane, 0),
    new Product("Cuscino per cani", "Cuscino comodo per il tuo cane", 19.99, $categoriaCane, 1),
    new Toy("Frisbee", "Frisbee leggero per divertimento all'aperto", 4.99, $categoriaCane, 0, "Plastica"),
    new Food("Ciotola per cani", "Ciotola resistente per il cibo del tuo cane", 6.99, $categoriaCane, 1, "--/--/--"),
    new Product("Collare per cani", "Collare regolabile per il tuo cane", 8.99, $categoriaCane, 0),
    new Product("Pettine per cani", "Pettine per la toelettatura del tuo cane", 3.99, $categoriaCane, 1)
];

?>