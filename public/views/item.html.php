<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> - Zguba PK</title>
</head>
<body>
    <main>
        <h1><?= htmlspecialchars($pageTitle) ?></h1>
        <p>Identyfikator ogłoszenia przekazany z adresu: <?= $itemId ?></p>
        <p>Widok ćwiczeniowy pokazuje przekazanie numeru przez router i kontroler. Nie sprawdza jeszcze, czy ogłoszenie istnieje w bazie.</p>
        <a href="/ogloszenia">Wróć do ogłoszeń</a>
    </main>
</body>
</html>
