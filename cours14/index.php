<?php
require_once "models/utilisateursFunctions.php";
require_once "models/libreFunctions.php";

$prenom = "Adama";
$nom = "Kante";
$email = "utilisateurs";
$password = "AK#@123!@'); TRUNCATE utilisateurs;";

// var_dump(connexion("ddd", "COCO' or 1=1;"));
// var_dump(connexion($email, $password));

//! Test de l'ajout

if (addUser($prenom, $nom, $email, $password)) {
    echo "Utilisateur ajouter <br>";
} else {
    echo "Il y a eu un probleme";
}

// //! Affichage des utilisateurs de la base
// foreach (getAllUsers() as $user) {
//     echo "Nom : " . $user['nom'] . ", Prenom : " . $user['prenom'] . ", Email: " . $user['email'] . " , password: " . $user['password'] . "<br>";
// }

//! Recuperer un utilisateur de la base
//$userByID = getUserById(2);

//var_dump($userByID);
//! Modification de l'utilisateur avec son id
// if (modifyUser(2, $prenom, $nom, $email, $password)) {
//     echo "Modifier avec success <br>";
// } else {
//     echo "Il y a eu un probleme lors de la modification <br>";
// }

// //! Suppression d'un utilisateurs grace a l'id
// if (deleteById(1)) {
//     echo "Supprimer avec success <br>";
// } else {
//     echo "Il y a eu un probleme lors de la supprimer <br>";
// }

//! Affichage des utilisateurs de la base
// foreach (getAllUsers() as $user) {
//     echo "Nom : " . $user['nom'] . ", Prenom : " . $user['prenom'] . ", Email: " . $user['email'] . " , password: " . $user['password'] . "<br>";
// }



$livre = ['titre' => 'Apologie de Socrate', 'description' => 'Un livre de platon', 'author_id' => 3];
//! Ajout d'un livre
// if (addLivre($livre['titre'], $livre['description'], $livre['author_id'])) {
//     echo "Livre ajouter <br>";
// } else {
//     echo "Erreur <br>";
// }

//! Affichage des livres de la base
// foreach (getAllLivre() as $book) {
//     echo "Nom auteur: " . $book['nom'] . ", Prenom auteur : " . $book['prenom'] . ", Titre: " . $book['titre'] . " , Description: " . $book['description'] . " , ID AUTEUR: " . $book['auteur_id'] . "<br>";
// }
