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
        $this->increasePopulation($this);
    }
    public static function getPopulation(){
        global $livingPokemon;

        print "The total number of living pokemon: " . count($livingPokemon) . "<br><br>";
    }
    private static function increasePopulation($pokemon){
        global $livingPokemon;

        array_push($livingPokemon, $pokemon);
    }
    private static function decreasePopulation($target){
        global $livingPokemon;
        
        for($a=0; $a<=count($livingPokemon)-1; $a++){
            if($livingPokemon[$a]->name == $target->name){
                unset($livingPokemon[$a]);
            }
        }
    }

    public function attack($target, $attack){
        $damage = $this->attacks[$attack]->getAttackDamage();
        print_r($target->name . " Has " . $target->hitpoints . " Health <br> ");

        // Two simple checks for weakness and resistance (It simply compares the names, if the same then add multiplier)
        if ($this->energyType->getname() == $target->weakness->getWeaknessType()) {
            $damage = $damage * $target->weakness->getWeaknessValue();
        }
        if ($this->energyType->getname() == $target->resistance->getResistanceType()) {
            $damage -= $target->resistance->getResistanceValue();
        }
        $target->hitpoints -= $damage;

        print_r($this->name . " attacks " . $target->name . " with " . $this->attacks[$attack]->getAttackName() . " attack dealing " . $damage . " Damage <br>" );
        print_r($target->name . " Has " . $target->hitpoints . " Health left <br><br> ");
    }
}
/*de schade van een Attack wordt vermenigvuldigd met de multiplier van de Weakness indien de EnergyType van de Weakness gelijk is aan de EnergyType van de aanvallende Pokemon

de schade van een Attack wordt verminderd met de waarde van de Resistance indien de EnergyType van de Resistance gelijk is aan de EnergyType van de aanvallende Pokemon */
?>



