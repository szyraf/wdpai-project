<?php

declare(strict_types=1);

namespace App\Controller;

final class DefaultController extends AppController
{
    public function index(): void
    {
        $this->render('home', [
            'pageTitle' => 'Tablica ogłoszeń',
            'items' => [
                [
                    'id' => 1,
                    'title' => 'Klucze z metalowym brelokiem',
                    'type' => 'Znalezisko',
                    'category' => 'Klucze',
                    'campus' => 'Warszawska',
                    'place' => 'Budynek Główny, sala 140',
                    'date' => '2026-11-03',
                    'storage' => 'Na portierni: Budynek Główny',
                ],
                [
                    'id' => 2,
                    'title' => 'Legitymacja studencka',
                    'type' => 'Zguba',
                    'category' => 'Dokumenty',
                    'campus' => 'Czyżyny',
                    'place' => 'Docent Bistro, przy kasie',
                    'date' => '2026-11-03',
                    'storage' => null,
                ],
            ],
        ]);
    }

    public function notFound(): void
    {
        $this->render('not-found', [
            'pageTitle' => 'Nie znaleziono strony',
        ]);
    }
}
