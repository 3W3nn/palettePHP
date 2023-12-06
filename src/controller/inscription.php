<?php

/** @var Twig\Environment $twig */

use Symfony\Component\HttpFoundation\Response;


require_once 'vendor/autoload.php'; // Inclure l'autoloader de Twig
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/inscription.html.twig');
$twig = new \Twig\Environment($loader);

// Vérifiez si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérez les données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);

    // Insérez les données dans la base de données
    $pdo = new PDO('sqlite:C:\Users\Aerio\Downloads\sqlite-tools-win-x64-3440200\Palette.db');
    $requete = $pdo->prepare('INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES (?, ?, ?)');
    $requete->execute([$nom, $email, $mot_de_passe]);

    // Redirigez l'utilisateur vers une page de confirmation ou autre
    header('Location: confirmation_inscription.html.twig');
    exit();
}

// Affichez le formulaire d'inscription
return new Response($twig->render('splashscreen.html.twig'));
