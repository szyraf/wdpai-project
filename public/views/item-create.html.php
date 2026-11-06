<h1><?= htmlspecialchars($pageTitle) ?></h1>
<form method="post" action="/ogloszenia/dodaj" enctype="multipart/form-data">
    <fieldset disabled>
        <legend>Formularz ogłoszenia</legend>
        <fieldset>
            <legend>Typ ogłoszenia (wymagany)</legend>
            <label><input type="radio" name="type" value="znalezisko" checked required> Znalazłem</label>
            <label><input type="radio" name="type" value="zguba"> Zgubiłem</label>
        </fieldset>
        <p>
            <label for="title">Tytuł (wymagany)</label><br>
            <input id="title" name="title" type="text" maxlength="80" required aria-describedby="title-help">
        </p>
        <p id="title-help">Krótko opisz rzecz, np. czarny parasol. Do 80 znaków.</p>
        <p>
            <label for="category">Kategoria (wymagana)</label><br>
            <select id="category" name="category" required>
                <option value="">Wybierz kategorię</option>
                <?php foreach ($categories as $category): ?>
                    <option><?= htmlspecialchars($category) ?></option>
                <?php endforeach; ?>
            </select>
        </p>
        <p>
            <label for="date">Data znalezienia lub zgubienia (wymagana)</label><br>
            <input id="date" name="date" type="date" required>
        </p>
        <fieldset>
            <legend>Kampus (wymagany)</legend>
            <label><input type="radio" name="campus" value="Czyżyny" required> Czyżyny</label>
            <label><input type="radio" name="campus" value="Warszawska"> Warszawska</label>
        </fieldset>
        <p>
            <label for="building">Budynek (wymagany)</label><br>
            <select id="building" name="building" required>
                <option value="">Wybierz budynek</option>
                <?php foreach ($buildings as $building => $campus): ?>
                    <option value="<?= htmlspecialchars($building) ?>"><?= htmlspecialchars($building) ?></option>
                <?php endforeach; ?>
            </select>
        </p>
        <p>
            <label for="place">Opis miejsca</label><br>
            <input id="place" name="place" type="text" placeholder="np. sala 140, przy oknie">
        </p>
        <fieldset aria-describedby="storage-help">
            <legend>Miejsce przechowania</legend>
            <p id="storage-help">Dotyczy tylko znaleziska. Przy zgubie pomiń te pola.</p>
            <p><label><input type="radio" name="storage" value="finder"> U mnie</label></p>
            <p><label><input type="radio" name="storage" value="reception"> Oddałem na portiernię</label></p>
            <label for="reception-building">Budynek portierni</label><br>
            <select id="reception-building" name="receptionBuilding">
                <option value="">Wybierz budynek portierni</option>
                <?php foreach ($buildings as $building => $campus): ?>
                    <option><?= htmlspecialchars($building) ?></option>
                <?php endforeach; ?>
            </select>
        </fieldset>
        <p>
            <label for="description">Opis</label><br>
            <textarea id="description" name="description" rows="5" cols="25" maxlength="1000" aria-describedby="description-help"></textarea>
        </p>
        <p id="description-help">Opisz kolor i markę. Zostaw nieujawniony szczegół, po którym rozpoznasz właściciela.</p>
        <p>
            <label for="photo">Zdjęcie (opcjonalne)</label><br>
            <input id="photo" name="photo" type="file" accept="image/jpeg,image/png" aria-describedby="photo-help">
        </p>
        <p id="photo-help">JPG lub PNG. Nie pokazuj danych osobowych na dokumentach; zamaluj je przed dodaniem zdjęcia.</p>
        <button type="submit">Opublikuj ogłoszenie</button>
    </fieldset>
</form>
<p><a href="/ogloszenia">Anuluj i wróć do ogłoszeń</a></p>
<aside aria-labelledby="tips-heading">
    <h2 id="tips-heading">Dobre ogłoszenie</h2>
    <p>Podaj dokładne miejsce i datę. Zdjęcie pomoże rozpoznać rzecz.</p>
</aside>
