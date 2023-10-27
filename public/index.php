<?php

require_once '../vendor/autoload.php';

session_start();

$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {
    $router->setBasePath($_SERVER['BASE_URI']);
} else {
    $_SERVER['BASE_URI'] = '/';
}

require __DIR__ . '/../config/routes.php';

$match = $router->match();

$dispatcher = new Dispatcher($match, '\App\Controller\ErrorController::error404');
$dispatcher->setControllersArguments($router, $match);
$dispatcher->dispatch();
