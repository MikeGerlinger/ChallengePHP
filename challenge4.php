<?php

// Tableau multidimensionnel des films et des acteurs
$movies = [
    'Kidnapped' => ['Peter Finch', 'John Laurie', 'Finlay Currie'],
    'Doctor Jekyll' => ['Eddie Izzard', 'Scott Chambers', 'Robyn Cara'],
    'The Nutty Professor' => ['Jerry Lewis', 'Stella Stevens', 'Kathleen Freeman']
];

// Parcourir chaque film / acteurs
foreach ($movies as $film => $actors) {
    // Afficher la mention dans le film ...
    echo "Dans le film $film, les principaux acteurs sont :<br>";
    
    // Parcourir les acteurs du film
    foreach ($actors as $actor) {
        
        echo " - $actor<br>";
    }
    
    // Ajouter un saut de ligne après chaque film
    echo "<br>";
}

?>

