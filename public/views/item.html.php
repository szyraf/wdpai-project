<p class="back"><a href="/ogloszenia">Wróć do ogłoszeń</a></p>
<div class="board detail">
    <div class="note photo">
        <?php require __DIR__ . '/item-photo.html.php'; ?>
    </div>
    <article class="note info<?= $item['type'] === 'Zguba' ? ' zguba' : '' ?>" aria-labelledby="item-heading">
        <p class="type"><?= htmlspecialchars($item['type']) ?></p>
        <h1 id="item-heading"><?= htmlspecialchars($pageTitle) ?></h1>
        <p class="cat">Ogłoszenie nr <?= $itemId ?></p>
        <p class="desc"><?= htmlspecialchars($item['description']) ?></p>
        <?php require __DIR__ . '/item-fields.html.php'; ?>
        <details class="report">
            <summary>Zgłoś nadużycie</summary>
            <form method="post" action="/ogloszenia/<?= $itemId ?>">
                <fieldset disabled>
                    <legend>Zgłoszenie nadużycia</legend>
                    <label class="legend" for="report-reason">Powód zgłoszenia</label>
                    <textarea class="input" id="report-reason" name="reason" rows="3" cols="25" required></textarea>
                    <button class="btn danger sm" type="submit">Zgłoś nadużycie</button>
                </fieldset>
            </form>
        </details>
    </article>
    <section class="note claim" aria-labelledby="claim-heading">
        <h2 id="claim-heading"><?= $item['type'] === 'Znalezisko' ? 'To moje!' : 'Znalazłem to' ?></h2>
        <form method="post" action="/ogloszenia/<?= $itemId ?>">
            <fieldset disabled>
                <legend>Zgłoszenie do autora</legend>
                <label class="legend" for="message"><?= $item['type'] === 'Znalezisko' ? 'Cecha weryfikująca' : 'Wiadomość do właściciela' ?></label>
                <textarea class="input" id="message" name="message" rows="4" cols="25" required aria-describedby="claim-help"></textarea>
                <p class="help" id="claim-help">
                    <?php if ($item['type'] === 'Znalezisko'): ?>
                        Opisz szczegół rzeczy niewidoczny na zdjęciu, po którym znalazca rozpozna właściciela.
                    <?php else: ?>
                        Napisz, gdzie znalazłeś rzecz i gdzie można ją odebrać.
                    <?php endif; ?>
                </p>
                <button class="btn primary" type="submit">Wyślij zgłoszenie</button>
            </fieldset>
        </form>
        <p class="small">Po akceptacji zgłoszenia obie strony otrzymają adres e-mail drugiej osoby, żeby umówić odbiór.</p>
    </section>
</div>
