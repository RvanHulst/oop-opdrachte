<?php
spl_autoload_register(function ($class_name) {
    require 'pokeStats/' . $class_name . '.php';
});

require 'pokemon.php';
require 'pokemon/pikachu.php';
require 'pokemon/charmeleon.php';
require 'battle.php';

$pikachu = new pikachu("Jerzy");
$charmeleon = new charmeleon("Tim");

$battle = new battle();

$battle->battleTurn($pikachu, $charmeleon, 'Electric Ring');
$battle->battleTurn($charmeleon, $pikachu, 'Flare');

//$battleTurn($charmeleon, 'Electric Ring');
//$charmeleon->battleTurn($pikachu, 'Flare');

pokemon::returnPokemonPopulation();
