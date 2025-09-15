<?php
$nom = "";
$ageU = "";
$date = "";
/** 
if (isset($_POST['send'])) {
    extract($_POST);
    if (empty($nomComplet) || empty($age) || empty($_POST['dateNaiss'])) {
        echo "Tous les champs du formulaire sont obligatoires";
    } else {
        $nom = $nomComplet;
        $ageU = $age;
        $date = $dateNaiss;
    }
} else {
    // echo "Tous les champs du formulaire sont obligatoires";
    echo "Veuillez remplir le formulaire";
}
 */

if (isset($_POST['send'])) {
    var_dump($_POST['vehicule']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>Les formulaires</h1>
    <div class="container col-8 offset-1">
        <form method="post">
            <div class="mb-3">
                <label for="nomComplet" class="form-label">Nom Complet</label>
                <input name="nomComplet" type="text" class="form-control" id="nomComplet" aria-describedby="emailHelp">
            </div>
            <!-- <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input name="age" type="number" class="form-control" id="age" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="dateNaiss" class="form-label">Date de naissance</label>
                <input name="dateNaiss" type="date" class="form-control" id="dateNaiss" aria-describedby="emailHelp">
            </div> -->
            <label>Veuillez choisir des vehicules</label> <br>
            <input type="checkbox" value="Mercedes gle 450" name="vehicule[]" id="vehicule1"> <label for="vehicule1">Mercedes gle 450</label> <br>
            <input type="checkbox" value="Porsche Cayenne turbo s" name="vehicule[]" id="vehicule2"> <label for="vehicule2">Porsche Cayenne turbo s</label> <br>
            <input type="checkbox" value="Ferrari 488" name="vehicule[]" id="vehicule3"> <label for="vehicule3">Ferrari 488</label> <br>
            <input type="checkbox" value="Ford Ranger Raptors" name="vehicule[]" id="vehicule4"> <label for="vehicule4">Ford Ranger Raptors</label> <br>
            <input type="checkbox" value="F150" name="vehicule[]" id="vehicule5"> <label for="vehicule5">F150</label> <br>


            <button type="submit" name="send" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <?php // if (!empty($nom) && !empty($ageU) && !empty($date)) {

    ?>
    <!-- <p>Nom : </p>
        <p>Age : </p>
        <p>Date Naissance : </p> -->
    <?php // } 
    ?>
    <?php if (!empty($_POST['nomComplet']) && !empty($_POST['vehicule'])) {
        extract($_POST);
    ?>
        <p>Nom : <?= $nomComplet ?></p>
        <p>Vehicule : </p>
        <ul>
            <?php foreach ($vehicule as $voiture) : ?>
                <li><?= $voiture ?></li>
            <?php endforeach ?>
        </ul>
    <?php }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>