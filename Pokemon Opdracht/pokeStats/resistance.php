<?php

class resistance{

    private $energyType;
    private $value;

    public function __construct($energyType, $value){
        $this->energyType = $energyType;
        $this->value = $value;
    }
}