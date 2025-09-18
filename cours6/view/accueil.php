<?php
if (empty($_SESSION['user'])) {
    header("Location: index.php?page=connexion");
}

require_once("layout/navbar.php");
?>


<h1>Bonjour <?= $userConnected['username'] ?></h1>