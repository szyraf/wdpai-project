<h1><?= htmlspecialchars($pageTitle) ?></h1>
<p>Podgląd konta: Szymon. Przykładowe zgłoszenia, bez aktywnej sesji.</p>
<p><a href="/ogloszenia/dodaj">Dodaj ogłoszenie</a> <button type="button" disabled>Wyloguj się</button></p>
<section aria-labelledby="incoming-heading">
    <h2 id="incoming-heading">Zgłoszenia do moich ogłoszeń</h2>
    <article>
        <h3>Kasia zgłasza się po słuchawki</h3>
        <p>Ogłoszenie: <a href="/ogloszenia/3"><?= htmlspecialchars($items[3]['title']) ?></a>.</p>
        <p>Cecha weryfikująca:</p>
        <blockquote><p>Na lewej muszli jest naklejka z kotem.</p></blockquote>
        <p>Status: czeka na odpowiedź.</p>
        <p>Po akceptacji obie strony zobaczą swoje adresy e-mail.</p>
        <button type="button" disabled>Akceptuj</button>
        <button type="button" disabled>Odrzuć</button>
    </article>
    <article>
        <h3>Zaakceptowane zgłoszenie do parasolki</h3>
        <p>Ogłoszenie: <a href="/ogloszenia/6"><?= htmlspecialchars($items[6]['title']) ?></a>.</p>
        <blockquote><p>Rączka jest lekko pęknięta przy końcu.</p></blockquote>
        <p>Kontakt demonstracyjny: kasia@example.com.</p>
    </article>
</section>
<section aria-labelledby="mine-heading">
    <h2 id="mine-heading">Moje ogłoszenia</h2>
    <ul>
        <?php foreach ([3 => 'Opublikowane', 6 => 'Oddane'] as $id => $status): ?>
            <?php $item = $items[$id]; ?>
            <li>
                <article>
                    <h3><a href="/ogloszenia/<?= $id ?>"><?= htmlspecialchars($item['title']) ?></a></h3>
                    <p>Status: <?= htmlspecialchars($status) ?></p>
                    <?php require __DIR__ . '/item-photo.html.php'; ?>
                    <?php require __DIR__ . '/item-fields.html.php'; ?>
                    <?php if ($status === 'Opublikowane'): ?>
                        <button type="button" disabled>Oznacz jako oddane</button>
                    <?php endif; ?>
                </article>
            </li>
        <?php endforeach; ?>
        <li>
            <article>
                <h3>Rękawiczki wełniane</h3>
                <p>Zguba, Warszawska, Budynek Główny.</p>
                <p>Status: Archiwum (przykład z prototypu).</p>
            </article>
        </li>
    </ul>
</section>
<section aria-labelledby="sent-heading">
    <h2 id="sent-heading">Moje zgłoszenia</h2>
    <article>
        <h3><a href="/ogloszenia/2"><?= htmlspecialchars($items[2]['title']) ?></a></h3>
        <p>Znalazłem to: legitymacja leżała przy kasie w Docent Bistro.</p>
        <p>Status: czeka na odpowiedź.</p>
    </article>
</section>
