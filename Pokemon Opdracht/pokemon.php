<?php

class pokemon {
    public $name;
    public $energyType;
    public $hitpoints;
    public $attacks;
    public $weakness;
    public $resistance;
    public static $pokemonAliveCounter = 0;

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
}

?>