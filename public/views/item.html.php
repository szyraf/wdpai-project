<p><a href="/ogloszenia">Wróć do ogłoszeń</a></p>
<article>
    <h1><?= htmlspecialchars($pageTitle) ?></h1>
    <p><?= htmlspecialchars($item['type']) ?>, ogłoszenie nr <?= $itemId ?></p>
    <p><?= htmlspecialchars($item['description']) ?></p>
    <?php require __DIR__ . '/item-fields.html.php'; ?>
</article>
<section aria-labelledby="claim-heading">
    <h2 id="claim-heading"><?= $item['type'] === 'Znalezisko' ? 'To moje!' : 'Znalazłem to' ?></h2>
    <form method="post" action="/ogloszenia/<?= $itemId ?>">
        <fieldset disabled>
            <legend>Zgłoszenie do autora</legend>
            <label for="message"><?= $item['type'] === 'Znalezisko' ? 'Cecha weryfikująca' : 'Wiadomość do właściciela' ?></label><br>
            <textarea id="message" name="message" rows="4" cols="25" required aria-describedby="claim-help"></textarea>
            <p id="claim-help">
                <?php if ($item['type'] === 'Znalezisko'): ?>
                    Opisz szczegół rzeczy niewidoczny na zdjęciu, po którym znalazca rozpozna właściciela.
                <?php else: ?>
                    Napisz, gdzie znalazłeś rzecz i gdzie można ją odebrać.
                <?php endif; ?>
            </p>
            <button type="submit">Wyślij zgłoszenie</button>
        </fieldset>
    </form>
    <p>Po akceptacji zgłoszenia obie strony otrzymają adres e-mail drugiej osoby, żeby umówić odbiór.</p>
</section>
<details>
    <summary>Zgłoś nadużycie</summary>
    <form method="post" action="/ogloszenia/<?= $itemId ?>">
        <fieldset disabled>
            <legend>Zgłoszenie nadużycia</legend>
            <label for="report-reason">Powód zgłoszenia</label><br>
            <textarea id="report-reason" name="reason" rows="3" cols="25" required></textarea><br>
            <button type="submit">Zgłoś nadużycie</button>
        </fieldset>
    </form>
</details>
