<?php

class Categorie{
    public string $type;
    public string $icon;
    public function __construct($type, $icon){
        $this->type = $type;
        $this->icon = $icon;
    }


}
