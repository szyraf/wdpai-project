<?php

declare(strict_types=1);

use App\Controller\DefaultController;
use App\Controller\ItemController;
use App\Routing;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$routing = new Routing();

$routing->get('/ogloszenia', DefaultController::class, 'index');
$routing->get('/ogloszenia/{id}', ItemController::class, 'show');
$routing->get('/', DefaultController::class, 'index');

$routeFound = $routing->dispatch(
    $_SERVER['REQUEST_METHOD'],
    $_SERVER['REQUEST_URI'],
);

if (!$routeFound) {
    http_response_code(404);
    (new DefaultController())->notFound();
}
