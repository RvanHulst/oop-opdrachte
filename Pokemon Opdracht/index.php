<?php

require 'pokemon.php';
require 'pokeStats/weakness.php';

// pikachu class maken die helemaal is uitgewerkt

/*heeft een zelf te verzinnen naam
is van het EnergyType "Lightning"
heeft 60 hitpoints
heeft 2 attacks
Electric Ring doet 50 schade
Pika Punch doet 20 schade
heeft een Weakness EnergyType "Fire" met een multiplier van 1,5
heeft een Resistance EnergyType "Fighting" met een waarde van 20*/

$pikachu = new pokemon(
    "Pickachu", 
    "Lightning", 
    "60",
    "[Electric Ring, Pika Punch]", 
    new weakness("fire", 1.5),
    "Fighting"

);

var_dump($pikachu);

//$pikachu->changeName('raaf');
