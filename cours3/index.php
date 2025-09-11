<?php

$prenom = "TOTO";
echo "Bonjour $prenom <br>";

$prenom1 = "TATA";
echo "Bonjour $prenom1 <br>";

$prenom2 = "OTO";
echo "Bonjour $prenom2 <br>";

$a = 2;
$b = 5;

echo "$a + $b = " . $a + $b . " <br>";

$tab  = ["Adama", "Bamba", "Mouhamad", "Abdou"];

//! Procedure
function direBonjour($username, $indice)
{
    echo " Bienvenue $username numero : $indice dans le serveur de la formation PHP / MySQL & JavaScript ! 🎉<br>";
}


// direBonjour("Arona");
// direBonjour("Diarra");

for ($i = 0; $i < count($tab); $i++) {
    direBonjour($tab[$i], $i + 1);
}

function addition($a, $b)
{
    echo "$a + $b = " . $a + $b . " <br>";
}

addition(5, 8);

//! Fonction

function somme($a, $b)
{
    return $a + $b;
}

// manipulation

//?Appel direct de la fonction a l'affichage
echo "5 + 8 = " . somme(5, 8) . " <br>";
//? Affecter la valeur de retour de la fonction a une variable

$c = 8;
$d = 49;
$somme = somme($c, $d);
echo "$c + $d = " . $somme . " <br>";


//TODO Comment acceder aux variables globales dans la fonction

function afficheNombreTotalTab()
{
    global $tab;
    // return count($tab);
    echo "Le nombre d'element de tab est de = " . count($tab) . " <br>";
}

afficheNombreTotalTab();
