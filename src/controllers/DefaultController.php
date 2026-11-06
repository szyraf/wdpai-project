<?php

declare(strict_types=1);

namespace App\Controller;

final class DefaultController extends AppController
{
    public function index(): void
    {
        $demo = require dirname(__DIR__) . '/demo.php';

        $this->render('home', [
            'pageTitle' => 'Tablica ogłoszeń',
            'items' => $demo['items'],
            'categories' => $demo['categories'],
        ]);
    }

    public function login(): void
    {
        $this->render('login', ['pageTitle' => 'Zaloguj się']);
    }

    public function register(): void
    {
        $this->render('register', ['pageTitle' => 'Załóż konto']);
    }

    public function admin(): void
    {
        $demo = require dirname(__DIR__) . '/demo.php';

        $this->render('admin', [
            'pageTitle' => 'Panel administratora',
            'items' => $demo['items'],
            'categories' => $demo['categories'],
            'buildings' => $demo['buildings'],
        ]);
    }

    public function notFound(): void
    {
        $this->render('not-found', [
            'pageTitle' => 'Nie znaleziono strony',
        ]);
    }
}
