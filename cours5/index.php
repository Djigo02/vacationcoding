<?php
if (isset($_POST['send'])) {
    extract($_POST);
    // var_dump($_POST);
    // var_dump($_FILES);
    if (isset($_FILES['cover'])) {
        extract($_FILES);
        echo "Chemin : " . $cover['tmp_name'] . "<br>";
        echo "taille : " . $cover['size'] . "o <br>";
        echo "extension : " . explode('/', mime_content_type($cover['tmp_name']))[1] . " <br>";
        $ext = explode('/', mime_content_type($cover['tmp_name']))[1];
        $filename = "cover_" . $titre . "." . $ext;
        $dest = "assets/";


        if (move_uploaded_file($cover['tmp_name'], "$dest$filename")) {
            echo "Fichier bien charger <br>";
        } else {
            echo "Erreur lors du chargement du fichier <br>";
        }

        if ($cover['size'] > 200000) {
            echo "Fichier trop lourd";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="card col-6 offset-3 mt-5">
        <div class="card-header h2">Enregistrer un livre</div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Titre</label>
                    <input type="text" name="titre" class="form-control" id="exampleFormControlInput1" placeholder="Titre du livre">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Couverture</label>
                    <input name="cover" class="form-control" type="file" id="formFile">
                </div>
                <button type="submit" name="send" class="btn btn-primary">Soumettre</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>