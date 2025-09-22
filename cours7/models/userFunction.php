<?php
require_once("userData.php");

function findUser($login, $mdp)
{
    global $usersData;
    foreach ($usersData as $user) {
        if ($user['email'] === $login && $user['mdp'] === $mdp) {
            return $user;
        }
    }
    return null;
}
