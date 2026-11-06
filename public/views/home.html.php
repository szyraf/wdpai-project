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
            <a href="/ogloszenia" aria-current="page">Ogłoszenia</a>
        </nav>
    </header>
    <main>
        <h1><?= htmlspecialchars($pageTitle) ?></h1>
        <p>Zgubione i znalezione na kampusach Czyżyny i Warszawska.</p>
        <p>Dane demonstracyjne z prototypu, nie są to prawdziwe zgłoszenia.</p>
        <section aria-labelledby="items-heading">
            <h2 id="items-heading">Przypięte na tablicy</h2>
            <p>Liczba ogłoszeń: <?= count($items) ?></p>
            <?php if ($items === []): ?>
                <p>Nie ma jeszcze ogłoszeń do wyświetlenia.</p>
            <?php else: ?>
                <ul>
                    <?php foreach ($items as $item): ?>
                        <li>
                            <article>
                                <p><?= htmlspecialchars($item['type']) ?></p>
                                <h3>
                                    <a href="/ogloszenia/<?= (int) $item['id'] ?>"><?= htmlspecialchars($item['title']) ?></a>
                                </h3>
                                <dl>
                                    <dt>Kategoria</dt>
                                    <dd><?= htmlspecialchars($item['category']) ?></dd>
                                    <dt>Kampus</dt>
                                    <dd><?= htmlspecialchars($item['campus']) ?></dd>
                                    <dt>Miejsce</dt>
                                    <dd><?= htmlspecialchars($item['place']) ?></dd>
                                    <dt>Data</dt>
                                    <dd><time datetime="<?= htmlspecialchars($item['date']) ?>"><?= htmlspecialchars($item['date']) ?></time></dd>
                                    <?php if ($item['storage'] !== null): ?>
                                        <dt>Przechowanie</dt>
                                        <dd><?= htmlspecialchars($item['storage']) ?></dd>
                                    <?php endif; ?>
                                </dl>
                            </article>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </section>
    </main>
    <footer>
        <p>Zguba PK, projekt studencki Politechniki Krakowskiej.</p>
    </footer>
</body>
</html>
