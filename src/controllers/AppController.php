<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AppController
{
    protected function render(string $template, array $variables = []): void
    {
        $templatePath = dirname(__DIR__, 2) . '/public/views/' . $template . '.html.php';

        if (!is_file($templatePath)) {
            throw new \RuntimeException('View not found: ' . $template);
        }

        $currentUserName = $_SESSION['user_name'] ?? null;
        $csrfToken = $this->csrfToken();

        extract($variables, EXTR_SKIP);
        require dirname(__DIR__, 2) . '/public/views/layout.html.php';
    }

    protected function isPost(): bool
    {
        return ($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST';
    }

    protected function redirect(string $path): never
    {
        header('Location: ' . $path, true, 303);
        exit;
    }

    protected function requireLogin(): void
    {
        if (empty($_SESSION['user_id'])) {
            $this->redirect('/logowanie');
        }
    }

    protected function csrfToken(): string
    {
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }

        return $_SESSION['csrf_token'];
    }

    protected function isCsrfTokenValid(string $token): bool
    {
        return isset($_SESSION['csrf_token'])
            && hash_equals($_SESSION['csrf_token'], $token);
    }
}
