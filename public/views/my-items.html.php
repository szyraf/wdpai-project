<div class="tools">
    <div class="head">
        <div>
            <p class="kicker">Cześć, Szymon</p>
            <h1><?= htmlspecialchars($pageTitle) ?></h1>
            <p class="page-lead">Podgląd konta: Szymon. Przykładowe zgłoszenia, bez aktywnej sesji.</p>
        </div>
        <div class="head-actions">
            <a class="btn primary" href="/ogloszenia/dodaj">Dodaj ogłoszenie</a>
            <button class="btn ghost" type="button" disabled>Wyloguj się</button>
        </div>
    </div>
</div>
<div class="cols">
    <section class="board" aria-labelledby="incoming-heading">
        <div class="board-head">
            <h2 id="incoming-heading" class="board-title">Zgłoszenia do moich ogłoszeń</h2>
        </div>
        <ul class="notes">
            <li class="note">
                <article>
                    <p class="type">Zgłoszenie "To moje!"</p>
                    <h3>Kasia zgłasza się po słuchawki</h3>
                    <p class="claim-for">Ogłoszenie: <a href="/ogloszenia/3"><?= htmlspecialchars($items[3]['title']) ?></a>.</p>
                    <p class="legend">Cecha weryfikująca:</p>
                    <blockquote class="quote"><p>Na lewej muszli jest naklejka z kotem.</p></blockquote>
                    <p class="status">Status: czeka na odpowiedź.</p>
                    <p class="hint">Po akceptacji obie strony zobaczą swoje adresy e-mail.</p>
                    <div class="note-actions">
                        <button class="btn primary" type="button" disabled>Akceptuj</button>
                        <button class="btn ghost" type="button" disabled>Odrzuć</button>
                    </div>
                </article>
            </li>
            <li class="note">
                <article>
                    <p class="type">Zgłoszenie "To moje!"</p>
                    <h3>Zaakceptowane zgłoszenie do parasolki</h3>
                    <p class="claim-for">Ogłoszenie: <a href="/ogloszenia/6"><?= htmlspecialchars($items[6]['title']) ?></a>.</p>
                    <blockquote class="quote"><p>Rączka jest lekko pęknięta przy końcu.</p></blockquote>
                    <p class="contact">Kontakt demonstracyjny: kasia@example.com.</p>
                </article>
            </li>
        </ul>
    </section>
    <div>
        <section class="board" aria-labelledby="mine-heading">
            <div class="board-head">
                <h2 id="mine-heading" class="board-title">Moje ogłoszenia</h2>
            </div>
            <ul class="notes">
                <?php foreach ([3 => 'Opublikowane', 6 => 'Oddane'] as $id => $status): ?>
                    <?php $item = $items[$id]; ?>
                    <li class="note<?= $status === 'Oddane' ? ' done' : '' ?><?= $item['type'] === 'Zguba' ? ' zguba' : '' ?>">
                        <article class="mini">
                            <?php require __DIR__ . '/item-photo.html.php'; ?>
                            <div>
                                <p class="type"><?= htmlspecialchars($item['type']) ?></p>
                                <h3><a href="/ogloszenia/<?= $id ?>"><?= htmlspecialchars($item['title']) ?></a></h3>
                                <p class="status<?= $status === 'Oddane' ? ' ok' : '' ?>">Status: <?= htmlspecialchars($status) ?></p>
                                <?php require __DIR__ . '/item-fields.html.php'; ?>
                                <?php if ($status === 'Opublikowane'): ?>
                                    <div class="note-actions">
                                        <button class="btn primary sm" type="button" disabled>Oznacz jako oddane</button>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </article>
                    </li>
                <?php endforeach; ?>
                <li class="note zguba done">
                    <article class="mini">
                        <div class="item-photo no-photo">
                            <img src="/img/document.svg" width="64" height="48" alt="">
                            <span>Bez zdjęcia</span>
                        </div>
                        <div>
                            <p class="type">Zguba</p>
                            <h3>Rękawiczki wełniane</h3>
                            <p class="meta">Zguba, Warszawska, Budynek Główny.</p>
                            <p class="status">Status: Archiwum (przykład z prototypu).</p>
                        </div>
                    </article>
                </li>
            </ul>
        </section>
        <section class="board" aria-labelledby="sent-heading">
            <div class="board-head">
                <h2 id="sent-heading" class="board-title">Moje zgłoszenia</h2>
            </div>
            <ul class="notes">
                <li class="note<?= $items[2]['type'] === 'Zguba' ? ' zguba' : '' ?>">
                    <article>
                        <p class="type"><?= htmlspecialchars($items[2]['type']) ?></p>
                        <h3><a href="/ogloszenia/2"><?= htmlspecialchars($items[2]['title']) ?></a></h3>
                        <p class="claim-for">Znalazłem to: legitymacja leżała przy kasie w Docent Bistro.</p>
                        <p class="status">Status: czeka na odpowiedź.</p>
                    </article>
                </li>
            </ul>
        </section>
    </div>
</div>
