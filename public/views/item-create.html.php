<div class="tools">
    <div class="head">
        <div>
            <p class="kicker">Nowa kartka na tablicy</p>
            <h1><?= htmlspecialchars($pageTitle) ?></h1>
        </div>
        <p class="who">Dodajesz jako <strong>Szymon</strong>. Na tablicy pokażemy tylko Twoje imię.</p>
    </div>
</div>
<div class="board add-board">
    <form class="form-sheet" method="post" action="/ogloszenia/dodaj" enctype="multipart/form-data">
        <fieldset disabled>
            <legend class="sheet-title">Formularz ogłoszenia</legend>
            <div class="form-grid">
                <fieldset class="group f-full">
                    <legend>Typ ogłoszenia (wymagany)</legend>
                    <div class="seg">
                        <input type="radio" name="type" id="type-found" value="znalezisko" checked required><label for="type-found"><strong>Znalazłem</strong><span>Znalezisko</span></label>
                        <input type="radio" name="type" id="type-lost" value="zguba"><label for="type-lost"><strong>Zgubiłem</strong><span>Zguba</span></label>
                    </div>
                </fieldset>
                <div class="ctrl f-full">
                    <label class="legend" for="title">Tytuł (wymagany)</label>
                    <input class="input" id="title" name="title" type="text" maxlength="80" required aria-describedby="title-help">
                    <p class="help" id="title-help">Krótko opisz rzecz, np. czarny parasol. Do 80 znaków.</p>
                </div>
                <div class="ctrl">
                    <label class="legend" for="category">Kategoria (wymagana)</label>
                    <div class="select">
                        <select id="category" name="category" required>
                            <option value="">Wybierz kategorię</option>
                            <?php foreach ($categories as $category): ?>
                                <option><?= htmlspecialchars($category) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="ctrl">
                    <label class="legend" for="date">Data znalezienia lub zgubienia (wymagana)</label>
                    <input class="input" id="date" name="date" type="date" required>
                </div>
                <fieldset class="group">
                    <legend>Kampus (wymagany)</legend>
                    <div class="chips">
                        <input type="radio" name="campus" id="campus-czyzyny" value="Czyżyny" required><label for="campus-czyzyny">Czyżyny</label>
                        <input type="radio" name="campus" id="campus-warszawska" value="Warszawska"><label for="campus-warszawska">Warszawska</label>
                    </div>
                </fieldset>
                <div class="ctrl">
                    <label class="legend" for="building">Budynek (wymagany)</label>
                    <div class="select">
                        <select id="building" name="building" required>
                            <option value="">Wybierz budynek</option>
                            <?php foreach ($buildings as $building => $campus): ?>
                                <option value="<?= htmlspecialchars($building) ?>"><?= htmlspecialchars($building) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="ctrl f-full">
                    <label class="legend" for="place">Opis miejsca</label>
                    <input class="input" id="place" name="place" type="text" placeholder="np. sala 140, przy oknie">
                </div>
                <fieldset class="group f-full" aria-describedby="storage-help">
                    <legend>Miejsce przechowania</legend>
                    <p class="help help-top" id="storage-help">Dotyczy tylko znaleziska. Przy zgubie pomiń te pola.</p>
                    <div class="choices">
                        <input type="radio" name="storage" id="storage-finder" value="finder"><label for="storage-finder"><strong>U mnie</strong></label>
                        <input type="radio" name="storage" id="storage-reception" value="reception"><label for="storage-reception"><strong>Oddałem na portiernię</strong></label>
                    </div>
                    <div class="ctrl storage-building">
                        <label class="legend" for="reception-building">Budynek portierni</label>
                        <div class="select">
                            <select id="reception-building" name="receptionBuilding">
                                <option value="">Wybierz budynek portierni</option>
                                <?php foreach ($buildings as $building => $campus): ?>
                                    <option><?= htmlspecialchars($building) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </fieldset>
                <div class="ctrl">
                    <label class="legend" for="description">Opis</label>
                    <textarea class="input area" id="description" name="description" rows="5" cols="25" maxlength="1000" aria-describedby="description-help"></textarea>
                    <p class="help" id="description-help">Opisz kolor i markę. Zostaw nieujawniony szczegół, po którym rozpoznasz właściciela.</p>
                </div>
                <div class="ctrl">
                    <label class="legend" for="photo">Zdjęcie (opcjonalne)</label>
                    <div class="drop">
                        <svg viewBox="0 0 24 24" width="32" height="32" aria-hidden="true"><path d="M4 7h3l2-3h6l2 3h3v13H4z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><circle cx="12" cy="13" r="3.5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                        <input id="photo" name="photo" type="file" accept="image/jpeg,image/png" aria-describedby="photo-help">
                    </div>
                    <p class="help" id="photo-help">JPG lub PNG. Nie pokazuj danych osobowych na dokumentach; zamaluj je przed dodaniem zdjęcia.</p>
                </div>
            </div>
            <div class="form-actions">
                <button class="btn primary" type="submit">Opublikuj ogłoszenie</button>
                <a class="cancel" href="/ogloszenia">Anuluj i wróć do ogłoszeń</a>
            </div>
        </fieldset>
    </form>
    <aside class="tips" aria-labelledby="tips-heading">
        <div class="note tip">
            <h2 id="tips-heading">Dobre ogłoszenie</h2>
            <p>Podaj dokładne miejsce i datę. Zdjęcie pomoże rozpoznać rzecz.</p>
        </div>
    </aside>
</div>
