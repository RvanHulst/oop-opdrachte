<?php

class energyType{
    private $name;

    public function __construct($name){
        $this->name = $name;
    }
    //Return name
    public function getname()
    {
        return $this->name;
    }
}