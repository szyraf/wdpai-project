<?php

declare(strict_types=1);

namespace App\Controller;

final class ItemController extends AppController
{
    public function show(int $id): void
    {
        $this->render('item', [
            'pageTitle' => 'Ogłoszenie nr ' . $id,
            'itemId' => $id,
        ]);
    }
}
