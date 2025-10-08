<?php

define("DB_HOST", "localhost");
define("DB_NAME", "cours14");
define("DB_USER", "root");
define("DB_PASS", "");

try {
    $connexion = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER, DB_PASS);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur lors de la connexion a la base " . $e->getMessage());
}
