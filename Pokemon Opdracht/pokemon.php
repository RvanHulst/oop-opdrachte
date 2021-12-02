<?php

class pokemon {
    private $name ='';
    private $energyType ='';
    private $hitpoints ='';
    private $attacks ='';
    private $weakness ='';
    private $resistance ='';


    public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }

    public function changeName($name){
        $this->name = $name;
    }
}

?>