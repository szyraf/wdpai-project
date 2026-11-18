<?php

declare(strict_types=1);

use App\Controller\DefaultController;
use App\Controller\ItemController;
use App\Controller\SecurityController;
use App\Routing;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$isHttps = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';

session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'secure' => $isHttps,
    'httponly' => true,
    'samesite' => 'Lax',
]);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$routing = new Routing();

$routing->get('/ogloszenia', DefaultController::class, 'index');
$routing->get('/ogloszenia/dodaj', ItemController::class, 'create');
$routing->get('/ogloszenia/{id}', ItemController::class, 'show');
$routing->get('/', DefaultController::class, 'index');
$routing->get('/moje-ogloszenia', ItemController::class, 'mine');
$routing->get('/logowanie', SecurityController::class, 'login');
$routing->post('/logowanie', SecurityController::class, 'login');
$routing->get('/rejestracja', SecurityController::class, 'register');
$routing->post('/rejestracja', SecurityController::class, 'register');
$routing->post('/wyloguj', SecurityController::class, 'logout');
$routing->get('/admin', DefaultController::class, 'admin');

$routeFound = $routing->dispatch(
    $_SERVER['REQUEST_METHOD'],
    $_SERVER['REQUEST_URI'],
);

if (!$routeFound) {
    http_response_code(404);
    (new DefaultController())->notFound();
}
