<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <card class="col-6 border p-5">
        <div class="h2 text-center">Connexion</div>
        <?= isset($_GET['error']) ?
            '<div id="emailHelp" class="form-text text-center text-danger">' . $_SESSION['error'] . ' </div>' :
            '' ?>
        <div class="card-body">
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                    <input type="password" name="mdp" class="form-control" id="exampleInputPassword1" placeholder="**********">
                </div>
                <button type="submit" name="btnLogin" class="btn btn-primary">Soumettre</button>
            </form>
        </div>
    </card>
</div>