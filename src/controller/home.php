<?php

/** @var Twig\Environment $twig */

use Symfony\Component\HttpFoundation\Response;

<<<<<<< Updated upstream
return new Response($twig->render('home/home.html.twig'));
=======
$folder = 'assets/image/logo.png';

return new Response($twig->render('splashscreen.html.twig', ['logo' => $folder]));
>>>>>>> Stashed changes

