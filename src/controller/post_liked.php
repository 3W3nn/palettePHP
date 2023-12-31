<?php

/** @var Twig\Environment $twig */

use Symfony\Component\HttpFoundation\Response;

return new Response($twig->render('post_liked.twig'));
