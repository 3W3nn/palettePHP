<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();


$routes->add('home', new Route('/'));

return $routes;

$routes->add('splashscreen', new Route('/splash'));
$routes->add('splashscreen', new Route(''));

$routes->add('home', new Route('/'));
$routes->add('home', new Route('/home'));
$routes->add('inscription', new Route('/inscription'));
$routes->add('checkup', new Route('/checkup'));
$routes->add('post_liked', new Route('/post_liked'));
return $routes;


