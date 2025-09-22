<?php
function getAllBooks()
{
    $books = [];
    //! Recuperation des fichier d'un dossier
    $files = scandir("public/assets/images");

    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            //! transformations du nom du fichier en tableau
            $element = explode("_", $file);
            $books[] = [
                'titre' => $element[1],
                'auteur' => $element[2],
                'nbpages' => $element[3],
                'cover' => $file
            ];
        }
    }

    return $books;
}
