<?php

class Product{
    public string $name;
    public string $desc;
    public float $price;
    public Categorie $categorie;
    public int $avaible;
    public function __construct($name, $desc, $price, $categorie, $avaible){
        $this -> name = $name;
        $this -> desc = $desc;
        $this -> price = $price;
        $this -> categorie = $categorie;
        $this -> avaible = $avaible;
    }
}
