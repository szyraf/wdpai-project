<div class="board pin-board">
    <div class="note card">
        <p class="kicker">Konto Zguba PK</p>
        <h1><?= htmlspecialchars($pageTitle) ?></h1>
        <form class="auth-form" method="post" action="/rejestracja">
            <fieldset disabled>
                <legend class="sr-only">Dane nowego konta</legend>
                <div class="form-row">
                    <label for="name">Imię</label>
                    <input class="input" id="name" name="name" type="text" autocomplete="given-name" maxlength="120" required aria-describedby="name-help">
                    <p class="help" id="name-help">Na ogłoszeniach widać tylko imię autora.</p>
                </div>
                <div class="form-row">
                    <label for="email">E-mail</label>
                    <input class="input" id="email" name="email" type="email" autocomplete="email" required aria-describedby="email-help">
                    <p class="help" id="email-help">Możesz użyć dowolnego adresu e-mail. Kontakt zostanie udostępniony drugiej stronie po zaakceptowaniu zgłoszenia.</p>
                </div>
                <div class="form-row">
                    <label for="password">Hasło</label>
                    <input class="input" id="password" name="password" type="password" autocomplete="new-password" minlength="8" required aria-describedby="password-help">
                    <p class="help" id="password-help">Co najmniej 8 znaków.</p>
                </div>
                <div class="form-row">
                    <label for="password-confirmation">Powtórz hasło</label>
                    <input class="input" id="password-confirmation" name="passwordConfirmation" type="password" autocomplete="new-password" minlength="8" required>
                </div>
                <button class="btn primary" type="submit">Załóż konto</button>
            </fieldset>
        </form>
        <p class="alt">Masz już konto? <a href="/logowanie">Zaloguj się</a>.</p>
    </div>
    <aside class="note card-aside" aria-label="Informacja o koncie">
        <p class="hand">Dobrze wiedzieć</p>
        <p>Ogłoszenia można przeglądać bez konta. Docelowo konto pozwoli dodać ogłoszenie i zgłosić się po rzecz.</p>
    </aside>
</div>
