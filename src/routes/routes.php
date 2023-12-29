<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();


$routes->add('home', new Route('/'));

$routes->add('splashscreen', new Route('/splash'));
$routes->add('splashscreen', new Route(''));
$routes->add('inscription', new Route('/inscription'));
$routes->add('checkup_inscription', new Route('/checkup_inscription'));
$routes->add('splashscreen', new Route(''));
$routes->add('home', new Route('/'));
$routes->add('home', new Route('/home'));

return $routes;


