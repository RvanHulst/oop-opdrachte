<?php
    class battle{

        public function __construct(){}

    public static function battleTurn($attacker, $target, $attack){
        //attack
        $damage = $attacker->attacks[$attack]->getAttackDamage();
        print_r($target->name . " Has " . $target->hitpoints . " Health <br> ");
        // Checks the targer weakness
        if ($attacker->energyType->getname() == $target->weakness->getWeaknessType()) {
            $damage = $damage * $target->weakness->getWeaknessValue();
        }
        // Checks target resistance
        if ($attacker->energyType->getname() == $target->resistance->getResistanceType()) {
            $damage -= $target->resistance->getResistanceValue();
        }
        $target->hitpoints -= $damage;
        // Checks how many pokemon are alive and will go down in the counter if one dies.
        if ($target->hitpoints <= 0){
            self::$pokemonAliveCounter--;
        }

        print_r($attacker->name . " attacks " . $target->name . " with " . $attacker->attacks[$attack]->getAttackName() . " attack dealing " . $damage . " Damage <br>" );
        print_r($target->name . " Has " . $target->hitpoints . " Health left <br><br> ");
    }
}
    ?>