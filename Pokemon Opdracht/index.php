<?php

require 'pokemon.php';

$pikachu = new pokemon("Eduard", "homo", "69");

var_dump($pikachu);

$pikachu->changeName('raaf');

var_dump($pikachu);
