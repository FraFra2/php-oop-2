<?php
require_once __DIR__ . '/Products.php';
class Food extends Product{
    public string $expiracy;

    public function __construct($name, $desc, $price, $categorie, $avaible, $expiracy){
        parent::__construct($name, $desc, $price, $categorie, $avaible);
        $this->expiracy = $expiracy;

    }



}
