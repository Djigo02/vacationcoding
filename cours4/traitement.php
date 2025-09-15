<?php
if (isset($_POST['send'])) {
    extract($_POST);
    if (empty($nomComplet) || empty($age) || empty($_POST['dateNaiss'])) {
        echo "Tous les champs du formulaire sont obligatoires";
        return;
    }
    var_dump($nomComplet);
    var_dump($age);
    var_dump($dateNaiss);
} else {
    // echo "Tous les champs du formulaire sont obligatoires";
    echo "Veuillez remplir le formulaire";
}
