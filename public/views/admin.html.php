<div class="tools">
    <div class="head">
        <div>
            <h1><?= htmlspecialchars($pageTitle) ?></h1>
            <p class="page-lead">Publiczny podgląd panelu na danych demonstracyjnych. Nie przyznaje uprawnień administratora.</p>
        </div>
        <div class="head-actions">
            <button class="btn ghost" type="button" disabled>Wyloguj się</button>
        </div>
    </div>
</div>
<div class="board adm">
    <section class="note panel reports" aria-labelledby="reports-heading">
        <h2 id="reports-heading">Zgłoszenia nadużyć</h2>
        <table class="rtable" aria-labelledby="reports-heading">
            <thead>
                <tr><th scope="col">Ogłoszenie</th><th scope="col">Powód</th><th scope="col">Zgłoszono</th><th scope="col">Decyzja</th></tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" data-label="Ogłoszenie">Sprzedam iPhone tanio</th>
                    <td data-label="Powód">Przykładowe nadużycie: reklama zamiast ogłoszenia o zgubie.</td>
                    <td data-label="Zgłoszono">Zgłoszono 2 razy, <time datetime="2026-11-03">2026-11-03</time>.</td>
                    <td class="acts">
                        <button class="btn primary sm" type="button" disabled>Ukryj ogłoszenie</button>
                        <button class="btn ghost sm" type="button" disabled>Odrzuć zgłoszenie</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row" data-label="Ogłoszenie"><a href="/ogloszenia/4"><?= htmlspecialchars($items[4]['title']) ?></a></th>
                    <td data-label="Powód">Przykładowy powód: zdjęcie pokazuje dane osobowe.</td>
                    <td data-label="Zgłoszono">Zgłoszono 1 raz, <time datetime="2026-11-02">2026-11-02</time>.</td>
                    <td class="acts">
                        <button class="btn primary sm" type="button" disabled>Ukryj ogłoszenie</button>
                        <button class="btn ghost sm" type="button" disabled>Odrzuć zgłoszenie</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    <section class="note panel mod" aria-labelledby="moderation-heading">
        <h2 id="moderation-heading">Moderacja wstępna</h2>
        <p class="switch">
            <input id="moderation" name="moderation" type="checkbox" disabled aria-describedby="moderation-help">
            <label for="moderation">Zatwierdzaj nowe ogłoszenia przed publikacją</label>
        </p>
        <p class="help" id="moderation-help">Domyślnie wyłączona. Po włączeniu nowe ogłoszenia będą czekały na decyzję administratora.</p>
        <h3>Ogłoszenia oczekujące na akceptację</h3>
        <p class="help">Brak oczekujących ogłoszeń w tym przykładzie.</p>
    </section>
    <section class="note panel ads" aria-labelledby="manage-heading">
        <h2 id="manage-heading">Ogłoszenia</h2>
        <form class="adm-search" role="search" method="get" action="/admin">
            <fieldset disabled>
                <legend class="sr-only">Wyszukaj ogłoszenie (podgląd)</legend>
                <label class="legend" for="admin-query">Tytuł lub imię autora</label>
                <div class="field">
                    <input id="admin-query" name="q" type="search">
                    <button class="btn primary" type="submit">Szukaj</button>
                </div>
            </fieldset>
        </form>
        <table class="rtable" aria-labelledby="manage-heading">
            <thead>
                <tr><th scope="col">Ogłoszenie</th><th scope="col">Typ i autor</th><th scope="col">Akcje</th></tr>
            </thead>
            <tbody>
                <?php foreach ($items as $id => $item): ?>
                    <tr>
                        <th scope="row" data-label="Ogłoszenie"><a href="/ogloszenia/<?= (int) $id ?>"><?= htmlspecialchars($item['title']) ?></a></th>
                        <td data-label="Typ i autor"><?= htmlspecialchars($item['type']) ?>, autor: <?= htmlspecialchars($item['author']) ?></td>
                        <td class="acts">
                            <button class="btn ghost sm" type="button" disabled>Ukryj</button>
                            <button class="btn danger sm" type="button" disabled>Usuń</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
    <section class="note panel buildings" aria-labelledby="buildings-heading">
        <h2 id="buildings-heading">Budynki</h2>
        <ul class="elist">
            <?php foreach ($buildings as $building => $campus): ?>
                <li>
                    <span><?= htmlspecialchars($building) ?> <small>(<?= htmlspecialchars($campus) ?>)</small></span>
                    <button class="btn ghost sm" type="button" disabled aria-label="Usuń budynek: <?= htmlspecialchars($building) ?>">Usuń</button>
                </li>
            <?php endforeach; ?>
        </ul>
        <form class="add" method="post" action="/admin">
            <fieldset disabled>
                <legend class="legend">Dodaj budynek</legend>
                <div class="add-fields">
                    <div class="add-field">
                        <label for="building-name">Nazwa budynku</label>
                        <input class="input" id="building-name" name="buildingName" type="text" required>
                    </div>
                    <div class="add-field">
                        <label for="building-campus">Kampus</label>
                        <div class="select">
                            <select id="building-campus" name="campus" required>
                                <option value="">Wybierz kampus</option>
                                <option>Czyżyny</option>
                                <option>Warszawska</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn primary sm" type="submit">Dodaj budynek</button>
                </div>
            </fieldset>
        </form>
    </section>
    <section class="note panel categories" aria-labelledby="categories-heading">
        <h2 id="categories-heading">Kategorie</h2>
        <ul class="elist">
            <?php foreach ($categories as $category): ?>
                <li>
                    <span><?= htmlspecialchars($category) ?></span>
                    <button class="btn ghost sm" type="button" disabled aria-label="Usuń kategorię: <?= htmlspecialchars($category) ?>">Usuń</button>
                </li>
            <?php endforeach; ?>
        </ul>
        <form class="add" method="post" action="/admin">
            <fieldset disabled>
                <legend class="legend">Dodaj kategorię</legend>
                <div class="add-fields">
                    <div class="add-field">
                        <label for="category-name">Nazwa kategorii</label>
                        <input class="input" id="category-name" name="categoryName" type="text" required>
                    </div>
                    <button class="btn primary sm" type="submit">Dodaj kategorię</button>
                </div>
            </fieldset>
        </form>
    </section>
</div>
