<?php
require_once __DIR__ . '/Products.php';
class Toy extends Product{
    public string $material;

    public function __construct($name, $desc, $price, $categorie, $avaible, $material){
        parent::__construct($name, $desc, $price, $categorie, $avaible);
        $this -> material = $material;
    }



}
