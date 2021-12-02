<?php

class attack{
    private $name;
    private $damage;

    public function __construct($name, $damage){
        $this->name = $name;
        $this->damage = $damage;
    }
}