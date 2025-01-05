<?php
require "../inc/config.php";
require "Article.php";

use objet\Article;


$article = new \src\Model\Article();
$article->setTitre("Titre")
    ->setDescription("Description")
    ->setAuteur("Auteur")
    ->setDate(new DateTime());

echo Article::SqlAdd($bdd, $article);


function chargerClasse($classe)
{
    $ds = DIRECTORY_SEPARATOR;
    $dir = $_SERVER['DOCUMENT_ROOT'] . "^$ds.."; // Remonte d'un cran par rapport à public
    // Remplacement des séparateurs de namespace par des séparateurs de dossier
    $classeName = str_replace("\\", $ds, $classe);

    $file = "{$dir}{$ds}{$classeName}.php";

    if (is_readable($file)) {
        require_once $file;
    }

    spl_autoload_register('chargerClasse'); // On enregistre la fonction comme __autoload
}

