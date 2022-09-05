<?php

class weakness{
    private $weakness;
    private $multiplier;

   public function __construct($weakness, $multiplier){
    $this->weakness = $weakness;
    $this->multiplier = $multiplier;
   }
   //Return weakness
   public function getWeaknessType()
   {
       return $this->weakness;
   }
    // return multiplier
   public function getWeaknessValue()
   {
       return $this->multiplier;
   }
}