<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('home', new Route('/'));
$routes->add('hello', new Route('/hello/{name}', ['name' => 'World']));

return $routes;
