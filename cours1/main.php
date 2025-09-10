<?php
//! constante
define("TVA", 1.5);
define("PI", 3.14);
define("Nom", "Doudou");

echo "Nom : " . Nom . "<br>";
echo "PI = " . PI . "<br>";

//!variable

$prenom = "Abdou";
$age = 95;

//! Conditions

//? if, if/else, if/else if, switch, condition ternaire

if ($age < 18) {
    echo "Mineur";
} else if ($age <= 25) {
    echo "Jeune adulte";
} else {
    echo "Vieux";
}

echo "<br>";

$jsemaine = "lundii";

//! Switch
switch ($jsemaine) {
    case "lundi":
        echo "Lundi";
        break;
    case "mardi":
        echo "mardi";
        break;
    case "mercredi":
        echo "mercredi";
        break;
    case "jeudi":
        echo "jeudi";
        break;
    case "vendredi":
        echo "vendredi";
        break;
    case "samedi":
        echo "samedi";
        break;
    case "dimanche":
        echo "dimanche";
        break;
    default:
        echo "Pas un jour de la semaine";
        break;
}

echo "<br>";

//! condition ternaire  (condition) ? "valeur si vrai" : "valeur si faux"

// echo $age < 18 ?  "Mineur" : "Majeur";

//! boucle for, while, do..while
echo "<h4>POUR</h4>";
for ($i = 1; $i <= 10; $i++) {
    echo "$i <br>";
}

echo "<br>";

//! affichage dans le html
$j = 1;

echo "<br>";

echo "<h4>DO..WHILE</h4>";
$a = 1;
do {
    echo "$a <br>";
    $a++;
} while ($a <= 10);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mineur {
            color: #ccef05ff;
        }

        .majeur {
            color: #396810ff;
        }
    </style>
</head>

<body>
    <h2>Information de la personne</h2>
    <p>Prenom : <?= $prenom ?></p>
    <p>Nom : <?= Nom ?></p>
    <p>Age : <?= $age ?> ans</p>
    <p class="<?= $age < 18 ? "mineur" : "majeur" ?>"><?= $age < 18 ? "Mineur" : "Majeur" ?></p>

    <h4>Boucle while dans html </h4>
    <ul>
        <?php
        while ($j <= 10) :
            if ($j % 2 == 0) {
        ?>
                <li><?= $j ?></li>
        <?php
            }
            $j++;
        endwhile;
        ?>


    </ul>

</body>

</html>