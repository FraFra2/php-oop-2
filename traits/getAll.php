<?php 

trait getAll{
    public function getAll($name, $desc, $price, $categorie, $avaible, $material = "Non Disp.", $expiracy = "Non Disp.", $size = "Non Disp."){
        $allChar = [];
        $allChar[] = $name;
        $allChar[] = $desc;
        $allChar[] = $price;
        $allChar[] = $categorie;
        $allChar[] = $avaible;
        $allChar[] = $material;
        $allChar[] = $expiracy;
        $allChar[] = $size;
        var_dump($allChar);
        return $allChar;
    }
    
}