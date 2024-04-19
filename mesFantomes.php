<?php

require_once "bootstrap.php";   


$fantomesRepository = $entityManager->getRepository('Fantomes\Fantome');
$fantomes = $fantomesRepository->findAll();

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates'); // définit le rep de stockage des fichiers Twig
$twig = new \Twig\Environment($loader); // crée un objet Twig

echo $twig->render('fantomes.html', ['fantome' => $fantomes]);

?>