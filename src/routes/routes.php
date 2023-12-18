<?php


use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('home', new Route('/home'));
$routes->add('inscription', new Route('/inscription'));
$routes->add('checkup_inscription', new Route('/checkup_inscription'));

return $routes;

