<?php

/** @var Twig\Environment $twig */

use Symfony\Component\HttpFoundation\Response;

// Vérifiez si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérez les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);

    // Insérez les données dans la base de données
    $pdo = new PDO('sqlite:C:\Users\Aerio\Downloads\sqlite-tools-win-x64-3440200\Palette.db');
    $requete = $pdo->prepare('INSERT INTO utilisateurs (nom, prenom, mail, motdepasse) VALUES (?, ?, ?, ?)');
    $requete->execute([$nom, $prenom, $email, $mot_de_passe]);

    // Redirigez l'utilisateur vers une page de confirmation ou autre
    header('Location: confirmation_inscription.html.twig');
    return new Response($twig->render('confirmation_inscription.html.twig'));
}


