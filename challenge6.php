<?php
// déclarer une fonctions
function writeSecretSentence (string $parametre1, string $parametre2)
{//retourner la phrase générer
  return ("$parametre1 s'incline face à $parametre2");
}

// appel de la fonctions
echo writeSecretSentence("Le chat", "la lune") . "<br>";  // Affiche : Le chat s’incline face à la lune
echo writeSecretSentence("Le lion", "le feu") . "<br>";   // Affiche : Le lion s’incline face à le feu
echo writeSecretSentence("L'aigle", "la tempête") . "<br>"; // Affiche : L'aigle s’incline face à la tempête
?>
