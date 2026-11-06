<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> - Zguba PK</title>
</head>
<body>
    <header>
        <a href="/">Zguba PK</a>
        <nav aria-label="Główna">
            <ul>
                <li><a href="/ogloszenia">Ogłoszenia</a></li>
                <li><a href="/ogloszenia/dodaj">Dodaj ogłoszenie</a></li>
                <li><a href="/moje-ogloszenia">Moje ogłoszenia</a></li>
                <li><a href="/logowanie">Zaloguj się</a></li>
                <li><a href="/admin">Panel administratora (podgląd)</a></li>
            </ul>
        </nav>
    </header>
    <main id="content">
        <p><strong>Podgląd szablonów.</strong> Dane są demonstracyjne. Formularze i przyciski zmieniające dane są wyłączone. Konta, uprawnienia i zapis nie są jeszcze obsługiwane.</p>
        <?php require $templatePath; ?>
    </main>
    <footer>
        <p>Zguba PK, projekt studencki Politechniki Krakowskiej.</p>
        <a href="/img/ZRODLA.txt">Źródła i licencje zdjęć</a>
    </footer>
</body>
</html>
