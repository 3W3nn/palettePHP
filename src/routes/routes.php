<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('splashscreen', new Route('/splash'));
$routes->add('redirect', new Route('/'));

$routes->add('home', new Route('/home'));

return $routes;

