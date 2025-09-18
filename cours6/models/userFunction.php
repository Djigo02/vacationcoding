<?php

require_once("baseUser.php");

function findUser($login, $mdp)
{
    global $baseUser;
    foreach ($baseUser as $user) {
        if ($user['login'] === $login && $user['mdp'] === $mdp) {
            return $user;
        }
    }
    return null;
}
