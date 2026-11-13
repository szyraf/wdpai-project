<section class="tools" aria-labelledby="page-heading">
    <div class="head">
        <div>
            <p class="kicker">Portiernia online</p>
            <h1 id="page-heading"><?= htmlspecialchars($pageTitle) ?></h1>
        </div>
        <a class="btn primary" href="/ogloszenia/dodaj">Dodaj ogłoszenie</a>
    </div>
    <form class="search" method="get" action="/ogloszenia" role="search">
        <fieldset class="search-fields" disabled>
            <legend class="sr-only">Wyszukiwanie i filtry (podgląd)</legend>
            <label class="sr-only" for="q">Czego szukasz?</label>
            <div class="field">
                <img src="/img/search.svg" width="20" height="20" alt="" aria-hidden="true">
                <input id="q" name="q" type="search" placeholder="np. klucze, legitymacja">
                <button class="btn primary" type="submit">Szukaj</button>
            </div>
            <div class="filters">
                <fieldset class="group">
                    <legend>Typ</legend>
                    <div class="chips">
                        <input type="radio" name="type" id="type-all" value="" checked><label for="type-all">Wszystkie</label>
                        <input type="radio" name="type" id="type-found" value="znalezisko"><label for="type-found">Znaleziska</label>
                        <input type="radio" name="type" id="type-lost" value="zguba"><label for="type-lost">Zguby</label>
                    </div>
                </fieldset>
                <div class="group">
                    <label class="legend" for="category">Kategoria</label>
                    <div class="select">
                        <select id="category" name="category">
                            <option value="">Wszystkie</option>
                            <?php foreach ($categories as $category): ?>
                                <option><?= htmlspecialchars($category) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <fieldset class="group">
                    <legend>Kampus</legend>
                    <div class="chips">
                        <input type="radio" name="campus" id="campus-all" value="" checked><label for="campus-all">Oba</label>
                        <input type="radio" name="campus" id="campus-czyzyny" value="Czyżyny"><label for="campus-czyzyny">Czyżyny</label>
                        <input type="radio" name="campus" id="campus-warszawska" value="Warszawska"><label for="campus-warszawska">Warszawska</label>
                    </div>
                </fieldset>
            </div>
        </fieldset>
    </form>
</section>
<section class="board" aria-labelledby="items-heading">
    <div class="board-head">
        <h2 id="items-heading" class="board-title">Przypięte na tablicy</h2>
        <p class="count">Ogłoszenia: <?= count($items) ?></p>
    </div>
    <?php if ($items === []): ?>
        <p class="board-empty">Nie ma jeszcze ogłoszeń do wyświetlenia.</p>
    <?php else: ?>
        <ul class="notes">
            <?php foreach ($items as $id => $item): ?>
                <li class="note<?= $item['type'] === 'Zguba' ? ' zguba' : '' ?>">
                    <article>
                        <?php require __DIR__ . '/item-photo.html.php'; ?>
                        <p class="type"><?= htmlspecialchars($item['type']) ?></p>
                        <h3>
                            <a href="/ogloszenia/<?= (int) $id ?>"><?= htmlspecialchars($item['title']) ?></a>
                        </h3>
                        <?php require __DIR__ . '/item-fields.html.php'; ?>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</section>
