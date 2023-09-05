<?php
require_once __DIR__ . '/Products.php';

class Shelter extends Product{
    public string $size;

    public function __construct($name, $desc, $price, $categorie, $avaible, $size){
        parent::__construct($name, $desc, $price, $categorie, $avaible);
        $this->size = $size;

    }

}
