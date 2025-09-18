<?php
session_start(); //! ouvrir une session

require_once("models/userFunction.php");

//! error = 0 champs obligatoires
//! error = 1 login ou mdp incorrect

//? header location pour rediriger vers une page et pour les parametre mettre ? pour le premier
//? dans le cas ou il y a plusieur parametre separer par &

$errorMessage = "";

$userConnected = isset($_SESSION['user']) ? $_SESSION['user'] : "";

if (isset($_POST['btnLog'])) {
    extract($_POST);
    if (empty($_POST['login']) || empty($_POST['mdp'])) {
        header("Location: index.php?error=0");
        exit;
    } else if (findUser($login, $mdp) == null) {
        header("Location: index.php?error=1");
        exit;
    } else {
        $_SESSION['user'] = findUser($login, $mdp);
        // unset($_SESSION['user']); //! supprimer un element de la session
        header("Location: index.php?page=accueil");
        exit;
    }
}

if (isset($_GET['error'])) {
    switch ($_GET['error']) {
        case 0:
            $errorMessage = "Tous les champs sont obligatoires";
            break;
        case 1:
            $errorMessage = "Login et/ou mot de passe incorrect";
            break;
        default:
            $errorMessage = "Une erreur est survenue";
            break;
    }
}

include_once("layout/header.php");

if (isset($_GET['page'])) {
    extract($_GET);

    switch ($page) {
        case 'acceuil':
            include("view/accueil.php");
            break;
        case 'connexion':
            include("view/connexion.php");
            break;
        default:
            include("view/connexion.php");
            break;
    }
} else {
    include("view/connexion.php");
}


include_once("layout/footer.php");
