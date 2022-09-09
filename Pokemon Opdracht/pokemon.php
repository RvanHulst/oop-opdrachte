<?php

class pokemon {
    private $name;
    private $energyType;
    private $hitpoints;
    private $attacks;
    private $weakness;
    private $resistance;
    private static $pokemonAliveCounter = 0;

    public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        self::$pokemonAliveCounter++;
    }

    // Tels how many pokemons are alive.
    public static function returnPokemonPopulation(){
        print_r("Pokemon's alive at the moment " . self::$pokemonAliveCounter);
    }


    public function __get($property){
        return $this->$property;
    }
}
?>