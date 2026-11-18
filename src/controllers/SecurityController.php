<?php

declare(strict_types=1);

namespace App\Controller;

use App\Database;
use App\Repository\UserRepository;

final class SecurityController extends AppController
{
    private const EXPIRED_FORM = 'Formularz wygasł. Odśwież stronę i spróbuj ponownie.';

    private UserRepository $users;

    public function __construct()
    {
        $this->users = new UserRepository((new Database())->connect());
    }

    public function login(): void
    {
        if (!$this->isPost()) {
            $this->render('login', [
                'pageTitle' => 'Zaloguj się',
                'registered' => ($_GET['zarejestrowano'] ?? '') === '1',
            ]);
            return;
        }

        $email = mb_strtolower(trim((string) ($_POST['email'] ?? '')));
        $password = (string) ($_POST['password'] ?? '');

        if (!$this->isCsrfTokenValid((string) ($_POST['csrfToken'] ?? ''))) {
            http_response_code(403);
            $this->render('login', [
                'pageTitle' => 'Zaloguj się',
                'errors' => [self::EXPIRED_FORM],
                'email' => $email,
            ]);
            return;
        }

        $user = $this->users->findByEmail($email);

        if ($user === null || !password_verify($password, $user->getPasswordHash())) {
            $this->render('login', [
                'pageTitle' => 'Zaloguj się',
                'errors' => ['Nieprawidłowy e-mail lub hasło.'],
                'email' => $email,
            ]);
            return;
        }

        session_regenerate_id(true);
        $_SESSION['user_id'] = $user->getId();
        $_SESSION['user_name'] = $user->getName();

        $this->redirect('/moje-ogloszenia');
    }

    public function register(): void
    {
        if (!$this->isPost()) {
            $this->render('register', ['pageTitle' => 'Załóż konto']);
            return;
        }

        $name = trim((string) ($_POST['name'] ?? ''));
        $email = mb_strtolower(trim((string) ($_POST['email'] ?? '')));
        $password = (string) ($_POST['password'] ?? '');
        $confirmation = (string) ($_POST['passwordConfirmation'] ?? '');

        $errors = [];

        if (!$this->isCsrfTokenValid((string) ($_POST['csrfToken'] ?? ''))) {
            http_response_code(403);
            $errors[] = self::EXPIRED_FORM;
        }
        if ($name === '' || mb_strlen($name) > 120) {
            $errors[] = 'Podaj imię (najwyżej 120 znaków).';
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $errors[] = 'Podaj poprawny adres e-mail.';
        }
        if (mb_strlen($password) < 8) {
            $errors[] = 'Hasło musi mieć co najmniej 8 znaków.';
        }
        if ($password !== $confirmation) {
            $errors[] = 'Hasła nie są takie same.';
        }

        if ($errors === []) {
            if ($this->users->create($name, $email, password_hash($password, PASSWORD_DEFAULT))) {
                $this->redirect('/logowanie?zarejestrowano=1');
            }

            $errors[] = 'Konto dla tego adresu już istnieje.';
        }

        $this->render('register', [
            'pageTitle' => 'Załóż konto',
            'errors' => $errors,
            'form' => ['name' => $name, 'email' => $email],
        ]);
    }

    public function logout(): void
    {
        if (!$this->isCsrfTokenValid((string) ($_POST['csrfToken'] ?? ''))) {
            http_response_code(403);
            exit(self::EXPIRED_FORM);
        }

        $_SESSION = [];

        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', [
                'expires' => time() - 42000,
                'path' => $params['path'],
                'domain' => $params['domain'],
                'secure' => $params['secure'],
                'httponly' => $params['httponly'],
                'samesite' => $params['samesite'] ?? 'Lax',
            ]);
        }

        session_destroy();
        $this->redirect('/');
    }
}
