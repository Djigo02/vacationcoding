<?php

// vecteur ouy tableau a 1 dimension
$tab = [1, 2, 5, "toto", 3.5, true];
$tab1 = array("free", "orange", "promobile", "expresso");

echo $tab[3] . "<br>";
echo ($tab[5] . "<br>");
echo ($tab1[0] . "<br>");

$tab[] = "Modou";
echo ($tab[6] . "<br>");

echo "Nombre d'element pour tab1 : " . count($tab1) . "<br>";
echo "Nombre d'element pour tab : " . count($tab) . "<br>";

//! Parcours
echo "Affichage de tab " . "<br>";
for ($i = 0; $i < count($tab); $i++) {
    echo $tab[$i] . " | ";
}
echo "<br>";
echo "Affichage de tab1 " . "<br>";
for ($i = 0; $i < count($tab1); $i++) {
    echo $tab1[$i] . " | ";
}

// matrice ou tableau a 2 dimensions
echo  "<br>";
$notes = [
    [15, 18, 16],
    [9, 12, 14],
    [17, 19, 20]
];
echo "Contenu de notes " . "<br>";
for ($i = 0; $i < count($notes); $i++) {
    for ($j = 0; $j < count($notes[$i]); $j++) {
        echo $notes[$i][$j] . " | ";
    }
    echo  "<br>";
}

//! tableau Associatif
//              nom=>DJIGO, prenom=>Mouhamad, note=>20
$tabPersonne = ["nom" => "DJIGO", "prenom" => "Mouhamad", "note" => 20];

echo "Prenom du l'apprenant : " . $tabPersonne["prenom"] . "<br>";
echo "Note du l'apprenant : " . $tabPersonne["note"] . "<br>";
// var_dump($tab);

// Tableau de personne
// $tabP = [
//     [
//         "nom" => "DJIGO",
//         "prenom" => "Mouhamad",
//         "age" => 23
//     ],
//     [
//         "nom" => "Sow",
//         "prenom" => "Dieynaba",
//         "age" => 12
//     ],
//     [
//         "nom" => "Sodji",
//         "prenom" => "Noone",
//         "age" => 19
//     ],
//     [
//         "nom" => "Fall",
//         "prenom" => "Ngiaga",
//         "age" => 14
//     ],
//     [
//         "nom" => "Pouye",
//         "prenom" => "Issa",
//         "age" => 18
//     ],
// ];

//!Parcours avec foreach

// foreach ($tabP as $personne) {
//     echo "Prenom : " . $personne["prenom"] . " Nom : " . $personne["nom"] . " Age : " . $personne["age"] .  "<br>";
// }


$tabP = [
    "p1" => [
        "nom" => "DJIGO",
        "prenom" => "Mouhamad",
        "age" => 23
    ],
    "p2" => [
        "nom" => "Sow",
        "prenom" => "Dieynaba",
        "age" => 12
    ],
    "p3" => [
        "nom" => "Sodji",
        "prenom" => "Noone",
        "age" => 19
    ],
    "p4" => [
        "nom" => "Fall",
        "prenom" => "Ngiaga",
        "age" => 14
    ],
    "p5" => [
        "nom" => "Pouye",
        "prenom" => "Issa",
        "age" => 18
    ],
];

// echo "Nom de la personne : " . $tabP["p2"]["nom"] . "<br>";
foreach ($tabP as $key => $value) {
    echo "<h3>$key</h3>";
    echo "Prenom : " . $value["prenom"] . " Nom : " . $value["nom"] . " Age : " . $value["age"] .  "<hr>";
}

echo "<hr>";

//! enumeration
enum Status
{
    case connecte;
    case HL;
    case nonDispo;
}
enum JOUR_SEM: string
{
    case lundi = 'L';
    case mardi = 'M';
    case mercredi = 'Me';
    case jeudi = 'J';
    case vendredi = 'V';
    case samedi = 'S';
    case dimanche = 'D';
}


$monStatus = Status::connecte;
echo "<h5>$monStatus->name </h5>";
echo "<hr>";

$jour = JOUR_SEM::mercredi;
echo "<h5>$jour->value </h5>";
