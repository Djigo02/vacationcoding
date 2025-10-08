<?php
session_start();
if (!isset($_SESSION['tabEmp'])) {
    $_SESSION['tabEmp'] = [];
}

if (isset($_POST['prenom'], $_POST['nom'], $_POST['contrat'], $_POST['tarif'], $_POST['nbEnfant'])) {
    extract($_POST);
    // var_dump($_POST);
    $_SESSION['tabEmp'][] = [
        'nom' => $_POST['nom'],
        'prenom' => $prenom,
        'nbEnfant' => $nbEnfant,
        'contrat' => $contrat,
        'tarif' => $tarif
    ];

    // var_dump($_SESSION['tabEmp']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript et PHP</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
</head>

<body>
    <div class="container mt-5">
        <div class="card col-8 offset-2">
            <div class="card-header h2 text-center">Gestion des employes</div>
            <div class="card-body">
                <form method="post" id="form">
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" name="prenom" class="form-control" id="prenom" />
                        <div id="errorPrenom" class="form-text text-danger">
                            Le prenom est requis
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" name="nom" class="form-control" id="nom" />
                        <div id="errorNom" class="form-text text-danger">
                            We'll never share your email with anyone else.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nbEnfant" class="form-label">Nombre d'enfant</label>
                        <input type="number" name="nbEnfant" class="form-control" id="nbEnfant" />
                        <div id="errorEnfant" class="form-text text-danger">
                            We'll never share your email with anyone else.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Type de contrat</label>
                        <select name="contrat" class="form-control" id="contrat">
                            <option value="">Veuillez choisir le type de contrat</option>
                            <option value="journalier">Journalier</option>
                            <option value="mensuel">Mensuel</option>
                            <option value="honoraire">Honoraire</option>
                        </select>
                        <div id="errorContrat" class="form-text text-danger">
                            We'll never share your email with anyone else.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tarif" class="form-label">Tarif</label>
                        <input type="number" name="tarif" class="form-control" id="tarif" />
                    </div>

                    <input type="submit" value="Enregistrer" name="btnSubmit" id="btnSubmit" class="btn btn-primary">

                    <button type="reset" class="btn btn-danger">Annuler</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container mt-3 col-8">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">nombre d'enfant</th>
                    <th scope="col">contrat</th>
                    <th scope="col">tarif par jour</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <?php if (empty($_SESSION['tabEmp'])) {  ?>
                    <tr>
                        <th class='text-center' colspan='6'>Aucun employer</th>
                    </tr>
                    <?php } else {
                    //$i = 0;
                    foreach ($_SESSION['tabEmp'] as $key => $emp):
                        // $i++;  
                    ?>
                        <tr>
                            <th scope="row"><?= $key + 1 ?></th>
                            <td><?= $emp['prenom'] ?></td>
                            <td><?= $emp['nom'] ?></td>
                            <td><?= $emp['nbEnfant'] ?></td>
                            <td><?= $emp['contrat'] ?></td>
                            <td><?= $emp['tarif'] ?></td>
                        </tr>
                <?php endforeach;
                } ?>
            </tbody>
        </table>
    </div>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <script src="script.js"></script>

</body>

</html>