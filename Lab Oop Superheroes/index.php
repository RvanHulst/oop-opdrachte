<?php

require 'superhero.php';
require 'avanger.php';

$spiderman =  new superhero('Spider-Man', 'Male', 'Spiderfriends', 'With great power comes great responsibility!');
print_r('<pre>'. $spiderman . '</pre>');

$spiderman->sayOneliner();

$thor = new avanger('Thor', 'Male', 'For Asgard!');
$thor->sayOneliner();

print_r('<pre>' . $thor . '</pre>');