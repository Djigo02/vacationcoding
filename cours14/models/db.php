<?php

define("DB_HOST", "172.29.250.43");
define("DB_NAME", "essaie");
define("DB_USER", "djigo");
define("DB_PASS", "Passer@123");

try {
    $connexion = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER, DB_PASS);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur lors de la connexion a la base " . $e->getMessage());
}
