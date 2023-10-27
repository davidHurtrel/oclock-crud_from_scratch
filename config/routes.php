<?php

// HOME
$router->map('GET', '/', ['method' => 'index', 'controller' => HomeController::class], 'home');

// GAME
$router->map('GET', '/games', ['method' => 'index', 'controller' => GameController::class], 'game-index');
$router->map('GET', '/game/create', ['method' => 'create', 'controller' => GameController::class], 'game-create');
$router->map('GET', '/game/update/[i:id]', ['method' => 'update', 'controller' => GameController::class], 'game-update');
$router->map('GET', '/game/delete/[i:id]', ['method' => 'delete', 'controller' => GameController::class], 'game-delete');

// USER
$router->map('GET', '/users', ['method' => 'index', 'controller' => UserController::class], 'user-index');
$router->map('GET', '/user/create', ['method' => 'create', 'controller' => UserController::class], 'user-create');
$router->map('GET', '/user/update/[i:id]', ['method' => 'update', 'controller' => UserController::class], 'user-update');
$router->map('GET', '/user/delete/[i:id]', ['method' => 'delete', 'controller' => UserController::class], 'user-delete');

// SECURITY
$router->map('GET', '/login', ['method' => 'login', 'controller' => SecurityController::class], 'login');
$router->map('GET', '/logout', ['method' => 'logout', 'controller' => SecurityController::class], 'logout');
