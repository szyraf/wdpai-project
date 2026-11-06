<?php

declare(strict_types=1);

namespace App\Controller;

final class ItemController extends AppController
{
    public function show(int $id): void
    {
        $demo = require dirname(__DIR__) . '/demo.php';

        if (!isset($demo['items'][$id])) {
            http_response_code(404);
            $this->render('not-found', ['pageTitle' => 'Nie znaleziono ogłoszenia']);
            return;
        }

        $this->render('item', [
            'pageTitle' => $demo['items'][$id]['title'],
            'item' => $demo['items'][$id],
            'itemId' => $id,
        ]);
    }

    public function create(): void
    {
        $demo = require dirname(__DIR__) . '/demo.php';

        $this->render('item-create', [
            'pageTitle' => 'Dodaj ogłoszenie',
            'categories' => $demo['categories'],
            'buildings' => $demo['buildings'],
        ]);
    }

    public function mine(): void
    {
        $demo = require dirname(__DIR__) . '/demo.php';

        $this->render('my-items', [
            'pageTitle' => 'Moje ogłoszenia',
            'items' => $demo['items'],
        ]);
    }
}
