<?php

class pokemon {
    private $name;
    private $energyType;
    private $hitpoints;
    private $attacks;
    private $weakness;
    private $resistance;


    public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }

    public function attack($target, $attack){
       print_r($this->name . " attacks " . $target->name . " with " . $this->attacks[$attack]->getAttackName() . " attack <br>" );
        if


    }
}
/*de schade van een Attack wordt vermenigvuldigd met de multiplier van de Weakness indien de EnergyType van de Weakness gelijk is aan de EnergyType van de aanvallende Pokemon


de schade van een Attack wordt verminderd met de waarde van de Resistance indien de EnergyType van de Resistance gelijk is aan de EnergyType van de aanvallende Pokemon */
?>



