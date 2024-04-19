<?php

use Ghosts\Fantome;

// require_once "bootstrap.php";

// $newNom = $_GET['nom'];
// $newPrenom = $_GET['prenom'];

// $auteur = new Auteur();
// $auteur->setNom($newNom);
// $auteur->setPrenom($newPrenom);

// $entityManager->persist($auteur);
// $entityManager->flush();

require_once "bootstrap.php";

if (isset($_GET['ajouter'])) {
    $newNom = $_GET['nom'];
    $newColor = $_GET['couleur'];

    $fantome = new Fantome();
    $fantome->setNom($newNom);
    $fantome->setPrenom($newColor);

    $entityManager->persist($fantome);
    $entityManager->flush();
      header('location: mesFantomes.php');
  } else {
    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader, ['cache' =>'cache']);
    
    $fantome = new Fantome();
    echo $twig->render('create.html', ['fantome' => $fantome]);
  }
?>