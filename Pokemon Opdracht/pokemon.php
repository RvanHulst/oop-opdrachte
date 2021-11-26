<?php

class pokemon {
    private $name ='';
    private $energyType ='';
    private $hitpoints ='';


    public function __construct($name, $energyType, $hitpoints)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
    }

    public function changeName($name){
        $this->name = $name;
    }
}

?>