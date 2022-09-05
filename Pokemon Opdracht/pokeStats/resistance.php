<?php

class resistance{

    private $energyType;
    private $value;
    
    public function __construct($energyType, $value){
        $this->energyType = $energyType;
        $this->value = $value;
    }
    // Return the engerytype.
    public function getresistanceType()
    {
        return $this->energyType;
    }
    // Return the  value
    public function getresistanceValue()
    {
        return $this->value;
    }
}