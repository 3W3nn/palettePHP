<?php

/** @var Twig\Environment $twig */

use Symfony\Component\HttpFoundation\Response;


$folder = 'assets/image/logo.png';

return new Response($twig->render('splashscreen.html.twig', ['logo' => $folder]));

