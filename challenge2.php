<?php
function decodage($message) // decoder le message
{
$key = strlen($message) /2; // calculer et diviser par 2 la chaine de caractere
$message = substr($message,5, $key); // recupere le segment sirppa
$message = str_replace('@',' ', $message); //remplacer @ par un espace 
$message =  str_replace('#',' ', $message);// remplacer # par un espace 
$message = str_replace('?',' ', $message);// remplacer ? par un espace
echo strrev ($message);// inverser message
echo ' ';//afficher 
}
decodage('0@sn9sirppa@#?ia\'jgtvryko1');
decodage('q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj');
decodage('aopi?sgnirts@#?sedhtg+p9l!');
?>

