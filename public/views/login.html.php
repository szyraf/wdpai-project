<div class="board pin-board">
    <div class="note card">
        <p class="kicker">Konto Zguba PK</p>
        <h1><?= htmlspecialchars($pageTitle) ?></h1>
        <form class="auth-form" method="post" action="/logowanie">
            <fieldset disabled>
                <legend class="sr-only">Dane logowania</legend>
                <div class="form-row">
                    <label for="email">E-mail</label>
                    <input class="input" id="email" name="email" type="email" autocomplete="email" required>
                </div>
                <div class="form-row">
                    <label for="password">Hasło</label>
                    <input class="input" id="password" name="password" type="password" autocomplete="current-password" required>
                </div>
                <button class="btn primary" type="submit">Zaloguj się</button>
            </fieldset>
        </form>
        <details class="example">
            <summary>Przykład komunikatu przy błędnych danych</summary>
            <p>E-mail lub hasło jest niepoprawne.</p>
        </details>
        <p class="alt">Nie masz konta? <a href="/rejestracja">Załóż konto</a>.</p>
    </div>
    <aside class="note card-aside" aria-label="Informacja o koncie">
        <p class="hand">Dobrze wiedzieć</p>
        <p>Ogłoszenia można przeglądać bez konta. Docelowo konto pozwoli dodać ogłoszenie i zgłosić się po rzecz.</p>
    </aside>
</div>
