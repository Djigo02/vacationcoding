<div class="container mt-5 d-flex justify-content-center align-items-center">
    <div class="card col-6 mt-5">
        <div class="card-header h2">Veuillez vous connecter</div>
        <div class="card-body">
            <form method="post">
                <?= isset($_GET['error']) ? "<div  class='mb-3 alert alert-danger'>
                        $errorMessage
                    </div>" : "" ?>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Login</label>
                    <input type="text" name="login" class="form-control" id="exampleFormControlInput1" placeholder="Votre login">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Mot de passe</label>
                    <input type="password" name="mdp" class="form-control" id="exampleFormControlInput1" placeholder="Votre Mot de passe">
                </div>
                <button type="submit" name="btnLog" class="btn btn-primary">Se connecter</button>
            </form>
        </div>
    </div>
</div>