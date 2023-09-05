<?php
require_once './traits/getAll.php';
class Product{
    public string $name;
    public string $desc;
    public float $price;
    public Categorie $categorie;
    public int $avaible;

    use getAll;
    
    public function __construct($name, $desc, $price, $categorie, $avaible){
        $this -> name = $name;
        $this -> desc = $desc;
        $this -> price = $price;
        if($this->price < 0){
            throw new Exception('Is not a number');
        }
        $this -> categorie = $categorie;
        $this -> avaible = $avaible;
    }
}
