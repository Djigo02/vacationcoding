<?php

require_once "models/db.php";

function addLivre($titre, $describe, $author_id)
{
    global $connexion;
    $req = "INSERT INTO livre (titre, description, auteur_id) VALUES ('$titre', '$describe', '$author_id')";
    return $connexion->exec($req);
}

function getAllLivre()
{
    global $connexion;
    $req = "SELECT u.prenom, u.nom, l.id, l.titre, l.description, l.auteur_id FROM livre l, utilisateurs u WHERE u.id=l.auteur_id";
    return $connexion->query($req)->fetchAll(PDO::FETCH_ASSOC);
}
