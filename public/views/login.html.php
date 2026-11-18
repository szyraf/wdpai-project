<div class="board pin-board">
    <div class="note card">
        <p class="kicker">Konto Zguba PK</p>
        <h1><?= htmlspecialchars($pageTitle) ?></h1>
        <?php if ($registered ?? false): ?>
            <div class="form-notice" role="status"><p>Konto założone. Możesz się zalogować.</p></div>
        <?php endif; ?>
        <?php require __DIR__ . '/form-errors.html.php'; ?>
        <form class="auth-form" method="post" action="/logowanie">
            <input type="hidden" name="csrfToken" value="<?= htmlspecialchars($csrfToken) ?>">
            <fieldset>
                <legend class="sr-only">Dane logowania</legend>
                <div class="form-row">
                    <label for="email">E-mail</label>
                    <input class="input" id="email" name="email" type="email" autocomplete="email" required value="<?= htmlspecialchars($email ?? '') ?>">
                </div>
                <div class="form-row">
                    <label for="password">Hasło</label>
                    <input class="input" id="password" name="password" type="password" autocomplete="current-password" required>
                </div>
                <button class="btn primary" type="submit">Zaloguj się</button>
            </fieldset>
        </form>
        <p class="alt">Nie masz konta? <a href="/rejestracja">Załóż konto</a>.</p>
    </div>
    <aside class="note card-aside" aria-label="Informacja o koncie">
        <p class="hand">Dobrze wiedzieć</p>
        <p>Ogłoszenia można przeglądać bez konta. Docelowo konto pozwoli dodać ogłoszenie i zgłosić się po rzecz.</p>
    </aside>
</div>
