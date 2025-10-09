<?php
require_once "models/db.php";

function addUsernonSecure($prenom, $nom, $email, $password)
{
    global $connexion;
    $req = "INSERT INTO utilisateurs (prenom, nom, email, password) VALUES ('$prenom', '$nom','$email','$password');";
    return $connexion->exec($req);
}
function addUser($prenom, $nom, $email, $password)
{
    global $connexion;
    $req = "INSERT INTO utilisateurs (prenom, nom, email, password) VALUES (:prenom, :nom,:email,:password);";
    $stmt = $connexion->prepare($req);
    $stmt->bindValue(":prenom", $prenom, PDO::PARAM_STR);
    $stmt->bindValue(":nom", $nom, PDO::PARAM_STR);
    $stmt->bindValue(":email", $email, PDO::PARAM_STR);
    $stmt->bindValue(":password", $password, PDO::PARAM_STR);
    return $stmt->execute();
}
function connexion($email, $password)
{
    global $connexion;
    $req = "SELECT * FROM utilisateurs WHERE email=:email AND password=:password;";
    $stmt = $connexion->prepare($req);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':password', $password, PDO::PARAM_STR);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function modifyUser($id, $prenom, $nom, $email, $password)
{
    global $connexion;
    $req = "UPDATE utilisateurs SET prenom='$prenom', nom='$nom', email='$email', password='$password' WHERE id = '$id';";
    return $connexion->exec($req);
}


function getAllUsers()
{
    global $connexion;
    $req = "SELECT * FROM utilisateurs";
    return $connexion->query($req)->fetchAll(PDO::FETCH_ASSOC);
}

function getUserById($id)
{
    global $connexion;
    $req = "SELECT * FROM utilisateurs WHERE id= '$id'";
    return $connexion->query($req)->fetch(PDO::FETCH_ASSOC);
}

function deleteById($id)
{
    global $connexion;
    $req = "DELETE FROM utilisateurs where id = '$id'";
    return $connexion->exec($req);
}
