<?php


use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('home', new Route('/home'));
$routes->add('inscription', new Route('/inscription'));

return $routes;

