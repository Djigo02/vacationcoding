<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <card class="col-6 border p-5 mb-5">
        <div class="h2 text-center">Ajouter un livre a la bibliotheque</div>
        <?= isset($_GET['error']) ?
            '<div id="emailHelp" class="form-text text-center text-danger">' . $_SESSION['error'] . ' </div>' :
            '' ?>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="my-3">
                    <label for="exampleInputEmail1" class="form-label">Titre</label>
                    <input type="text" name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titre du livre">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Auteur</label>
                    <input type="text" name="auteur" class="form-control" id="exampleInputPassword1" placeholder="Nom de l'auteur">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nombre de pages</label>
                    <input type="number" name="nbpages" class="form-control" id="exampleInputPassword1" placeholder="412">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Couverture</label>
                    <input class="form-control" name="cover" type="file" accept="image/png, image/jpeg, image/jpg" id="formFile">
                </div>
                <a href="?page=home" class="btn btn-danger">Retour a l'accueil</a>
                <button type="submit" name="btnAdd" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </card>
</div>