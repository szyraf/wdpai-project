<h1><?= htmlspecialchars($pageTitle) ?></h1>
<p>Publiczny podgląd panelu na danych demonstracyjnych. Nie przyznaje uprawnień administratora.</p>
<button type="button" disabled>Wyloguj się</button>
<section aria-labelledby="reports-heading">
    <h2 id="reports-heading">Zgłoszenia nadużyć</h2>
    <ul>
        <li>
            <article>
                <h3>Sprzedam iPhone tanio</h3>
                <p>Przykładowe nadużycie: reklama zamiast ogłoszenia o zgubie.</p>
                <p>Zgłoszono 2 razy, <time datetime="2026-11-03">2026-11-03</time>.</p>
                <button type="button" disabled>Ukryj ogłoszenie</button>
                <button type="button" disabled>Odrzuć zgłoszenie</button>
            </article>
        </li>
        <li>
            <article>
                <h3><a href="/ogloszenia/4"><?= htmlspecialchars($items[4]['title']) ?></a></h3>
                <p>Przykładowy powód: zdjęcie pokazuje dane osobowe.</p>
                <p>Zgłoszono 1 raz, <time datetime="2026-11-02">2026-11-02</time>.</p>
                <button type="button" disabled>Ukryj ogłoszenie</button>
                <button type="button" disabled>Odrzuć zgłoszenie</button>
            </article>
        </li>
    </ul>
</section>
<section aria-labelledby="moderation-heading">
    <h2 id="moderation-heading">Moderacja wstępna</h2>
    <p>
        <input id="moderation" name="moderation" type="checkbox" disabled aria-describedby="moderation-help">
        <label for="moderation">Zatwierdzaj nowe ogłoszenia przed publikacją</label>
    </p>
    <p id="moderation-help">Domyślnie wyłączona. Po włączeniu nowe ogłoszenia będą czekały na decyzję administratora.</p>
    <h3>Ogłoszenia oczekujące na akceptację</h3>
    <p>Brak oczekujących ogłoszeń w tym przykładzie.</p>
</section>
<section aria-labelledby="manage-heading">
    <h2 id="manage-heading">Ogłoszenia</h2>
    <form role="search" method="get" action="/admin">
        <fieldset disabled>
            <legend>Wyszukaj ogłoszenie (podgląd)</legend>
            <label for="admin-query">Tytuł lub imię autora</label><br>
            <input id="admin-query" name="q" type="search">
            <button type="submit">Szukaj</button>
        </fieldset>
    </form>
    <ul>
        <?php foreach ($items as $id => $item): ?>
            <li>
                <article>
                    <h3><a href="/ogloszenia/<?= (int) $id ?>"><?= htmlspecialchars($item['title']) ?></a></h3>
                    <p><?= htmlspecialchars($item['type']) ?>, autor: <?= htmlspecialchars($item['author']) ?></p>
                    <button type="button" disabled>Ukryj</button>
                    <button type="button" disabled>Usuń</button>
                </article>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
<section aria-labelledby="buildings-heading">
    <h2 id="buildings-heading">Budynki</h2>
    <ul>
        <?php foreach ($buildings as $building => $campus): ?>
            <li>
                <?= htmlspecialchars($building) ?> (<?= htmlspecialchars($campus) ?>)
                <button type="button" disabled aria-label="Usuń budynek: <?= htmlspecialchars($building) ?>">Usuń</button>
            </li>
        <?php endforeach; ?>
    </ul>
    <form method="post" action="/admin">
        <fieldset disabled>
            <legend>Dodaj budynek</legend>
            <p><label for="building-name">Nazwa budynku</label><br><input id="building-name" name="buildingName" type="text" required></p>
            <p>
                <label for="building-campus">Kampus</label><br>
                <select id="building-campus" name="campus" required>
                    <option value="">Wybierz kampus</option>
                    <option>Czyżyny</option>
                    <option>Warszawska</option>
                </select>
            </p>
            <button type="submit">Dodaj budynek</button>
        </fieldset>
    </form>
</section>
<section aria-labelledby="categories-heading">
    <h2 id="categories-heading">Kategorie</h2>
    <ul>
        <?php foreach ($categories as $category): ?>
            <li>
                <?= htmlspecialchars($category) ?>
                <button type="button" disabled aria-label="Usuń kategorię: <?= htmlspecialchars($category) ?>">Usuń</button>
            </li>
        <?php endforeach; ?>
    </ul>
    <form method="post" action="/admin">
        <fieldset disabled>
            <legend>Dodaj kategorię</legend>
            <label for="category-name">Nazwa kategorii</label><br>
            <input id="category-name" name="categoryName" type="text" required>
            <button type="submit">Dodaj kategorię</button>
        </fieldset>
    </form>
</section>
