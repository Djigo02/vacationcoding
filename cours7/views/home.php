<?php include_once("layouts/navbar.php"); ?>

<div class="container col-11 mt-5">
    <a href="?page=add" class="float-end mr-5 btn btn-success">Ajouter un livre</a>
</div>


<div class="container">
    <?php foreach ($books as $book): ?>
        <p><?= $book['titre'] ?></p>
        <p><?= $book['auteur'] ?></p>
        <p><?= $book['nbpages'] ?></p>
        <img src="public/assets/images/<?= $book['cover'] ?>" alt="<?= $book['titre'] ?>" width="100">
        <hr>
    <?php endforeach ?>
</div>