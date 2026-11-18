<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> - Zguba PK</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <a class="skip-link" href="#content">Przejdź do treści</a>
    <header class="top">
        <div class="wrap bar">
            <a class="brand" href="/">Zguba <span>PK</span></a>
            <nav class="site-nav" aria-label="Główna">
                <ul>
                    <li><a href="/ogloszenia"<?php if (in_array($template, ['home', 'item'], true)): ?> aria-current="page"<?php endif; ?>>Ogłoszenia</a></li>
                    <li><a href="/ogloszenia/dodaj"<?php if ($template === 'item-create'): ?> aria-current="page"<?php endif; ?>>Dodaj ogłoszenie</a></li>
                    <li><a href="/moje-ogloszenia"<?php if ($template === 'my-items'): ?> aria-current="page"<?php endif; ?>>Moje ogłoszenia</a></li>
                    <?php if ($currentUserName === null): ?>
                        <li><a class="login" href="/logowanie"<?php if ($template === 'login'): ?> aria-current="page"<?php endif; ?>>Zaloguj się</a></li>
                    <?php else: ?>
                        <li>
                            <form method="post" action="/wyloguj">
                                <input type="hidden" name="csrfToken" value="<?= htmlspecialchars($csrfToken) ?>">
                                <button type="submit">Wyloguj się</button>
                            </form>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>
    <main class="wrap <?= $template === 'home' ? 'home-page' : 'content-page' ?>" id="content" tabindex="-1">
        <details class="demo-notice">
            <summary>Podgląd: większość formularzy jest jeszcze wyłączona.</summary>
            <p>Ogłoszenia i zgłoszenia są demonstracyjne. Działa zakładanie konta, logowanie i wylogowanie.</p>
        </details>
        <?php require $templatePath; ?>
    </main>
    <footer class="foot">
        <div class="wrap">
            <p>Zguba PK, projekt studencki Politechniki Krakowskiej.</p>
            <ul class="foot-links">
                <li><a href="/admin"<?php if ($template === 'admin'): ?> aria-current="page"<?php endif; ?>>Podgląd panelu administratora</a></li>
                <li><a href="/img/ZRODLA.txt">Źródła i licencje zdjęć</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
