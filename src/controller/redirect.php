<?php

/** @var Twig\Environment $twig */

use Symfony\Component\HttpFoundation\Response;

return new Response($twig->render('splashscreen.html.twig'));