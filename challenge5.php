<?php

// variable et instuctions 
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.
echo "the opponentweapon is : $opponentWeapon <br>";

switch ($opponentWeapon) {
    case 'fists':
        $stevensonWeapon = 'Gun';
        break;
    case 'whip':
        $stevensonWeapon = 'fists';
        break;
    case 'gun':
        $stevensonWeapon = 'whip';
        break;
    
}
echo "stevenson choisira : $stevensonWeapon";

?>