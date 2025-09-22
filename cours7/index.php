<?php
session_start();

require_once("models/userFunction.php");
require_once("models/fileFunction.php");

$page = isset($_GET['page']) ? $_GET['page'] : "";

$books = getAllBooks();

$userConnected = !empty($_SESSION['user']) ? $_SESSION['user'] : '';

if (($page == 'home' || $page == 'add') && empty($userConnected)) {
    header("Location: index.php?page=connexion");
    exit;
}

if (isset($_GET['logout'])) {
    unset($_SESSION['user']);
    header("Location: index.php?page=connexion");
    exit;
}

if (isset($_POST['btnAdd'])) {
    extract($_POST);
    if (empty($titre) || empty($auteur) || empty($nbpages) || empty($_FILES['cover'])) {
        //! error 0 = tous les champs sont obligatoires
        $_SESSION['error'] = "Tous les champs sont obligatoires";
        header("Location: index.php?page=add&error=0");
        exit;
    } else {
        unset($_SESSION['error']);
        extract($_FILES);
        //? recuperation de l'extension du fichier
        $ext = explode('/', mime_content_type($cover['tmp_name']))[1];
        //? nom du fichier sans l'extension
        $filename = uniqid("COVER_" . $titre . "_" . $auteur . "_" . $nbpages . "_");
        //transfert du fichier dans le repertaoire du projet 
        if (move_uploaded_file($cover['tmp_name'], "public/assets/images/$filename.$ext")) {
            header("Location: index.php?page=home");
            exit;
        }
    }
}

if (isset($_POST['btnLogin'])) {
    extract($_POST);
    if (empty($email) || empty($mdp)) {
        //! error 0 = tous les champs sont obligatoires
        $_SESSION['error'] = "Tous les champs sont obligatoires";
        header("Location: index.php?page=connexion&error=0");
        exit;
    } else {
        if (findUser($email, $mdp) == null) {
            //! error 1 = Email et/ou mot de passe incorrect
            $_SESSION['error'] = "Email et/ou mot de passe incorrect";
            header("Location: index.php?page=connexion&error=1");
            exit;
        } else {
            unset($_SESSION['error']);
            $_SESSION['user'] = findUser($email, $mdp);
            header("Location: index.php?page=home");
            exit;
        }
    }
}

include_once("layouts/header.php");

if (isset($page)) {
    switch ($page) {
        case 'connexion':
        case '':
            include_once("views/connexion.php");
            break;
        case 'home':
            include_once("views/home.php");
            break;
        case 'add':
            include_once("views/add.php");
            break;
        default:
            include_once("views/404.php");
            break;
    }
}

include_once("layouts/footer.php");
