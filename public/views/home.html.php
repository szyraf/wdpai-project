<h1><?= htmlspecialchars($pageTitle) ?></h1>
<p>Zgubione i znalezione na kampusach Czyżyny i Warszawska.</p>
<p><a href="/ogloszenia/dodaj">Dodaj ogłoszenie</a></p>
<form method="get" action="/ogloszenia" role="search">
    <fieldset disabled>
        <legend>Wyszukiwanie i filtry (podgląd)</legend>
        <p>
            <label for="q">Czego szukasz?</label><br>
            <input id="q" name="q" type="search" placeholder="np. klucze, legitymacja">
        </p>
        <p>
            <label for="type">Typ</label><br>
            <select id="type" name="type">
                <option value="">Wszystkie</option>
                <option value="znalezisko">Znaleziska</option>
                <option value="zguba">Zguby</option>
            </select>
        </p>
        <p>
            <label for="category">Kategoria</label><br>
            <select id="category" name="category">
                <option value="">Wszystkie</option>
                <?php foreach ($categories as $category): ?>
                    <option><?= htmlspecialchars($category) ?></option>
                <?php endforeach; ?>
            </select>
        </p>
        <p>
            <label for="campus">Kampus</label><br>
            <select id="campus" name="campus">
                <option value="">Oba</option>
                <option>Czyżyny</option>
                <option>Warszawska</option>
            </select>
        </p>
        <button type="submit">Szukaj</button>
    </fieldset>
</form>
<section aria-labelledby="items-heading">
    <h2 id="items-heading">Przypięte na tablicy</h2>
    <p>Liczba ogłoszeń: <?= count($items) ?></p>
    <?php if ($items === []): ?>
        <p>Nie ma jeszcze ogłoszeń do wyświetlenia.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($items as $id => $item): ?>
                <li>
                    <article>
                        <p><?= htmlspecialchars($item['type']) ?></p>
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
