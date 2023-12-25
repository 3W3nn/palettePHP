<?php

/** @var Twig\Environment $twig */

use Symfony\Component\HttpFoundation\Response;



$folder = 'assets/image/logo.jpg';


return new Response($twig->render('home.twig'));



