<?php



use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$request = Request::createFromGlobals();

$routes = require_once dirname(__DIR__) . '/src/routes/routes.php';


$context = new RequestContext();
$context->fromRequest($request);

$urlMatcher = new UrlMatcher($routes, $context);

$loader = new FilesystemLoader(dirname(__DIR__) . '/templates');
$twig = new Environment($loader, [
    'cache' => false,
]);


try {
    extract($urlMatcher->match($request->getPathInfo()));

    $response = require dirname(__DIR__) . '/src/Controller/' . $_route . '.php';
} catch (ResourceNotFoundException $exception) {
    $response = new Response('The requested page doesn\'t exist', Response::HTTP_NOT_FOUND);

} catch (Throwable $throwable) {
    $response = new Response('An error has occurred', Response::HTTP_INTERNAL_SERVER_ERROR);
}

 /*catch (Throwable $throwable) {
    $response = new Response('An error has occurred', Response::HTTP_INTERNAL_SERVER_ERROR);
}*/


$response->send();
