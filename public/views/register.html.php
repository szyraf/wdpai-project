<h1><?= htmlspecialchars($pageTitle) ?></h1>
<form method="post" action="/rejestracja">
    <fieldset disabled>
        <legend>Dane nowego konta</legend>
        <p>
            <label for="name">Imię</label><br>
            <input id="name" name="name" type="text" autocomplete="given-name" maxlength="120" required aria-describedby="name-help">
        </p>
        <p id="name-help">Na ogłoszeniach widać tylko imię autora.</p>
        <p>
            <label for="email">E-mail</label><br>
            <input id="email" name="email" type="email" autocomplete="email" required aria-describedby="email-help">
        </p>
        <p id="email-help">Możesz użyć dowolnego adresu e-mail. Kontakt zostanie udostępniony drugiej stronie po zaakceptowaniu zgłoszenia.</p>
        <p>
            <label for="password">Hasło</label><br>
            <input id="password" name="password" type="password" autocomplete="new-password" minlength="8" required aria-describedby="password-help">
        </p>
        <p id="password-help">Co najmniej 8 znaków.</p>
        <p>
            <label for="password-confirmation">Powtórz hasło</label><br>
            <input id="password-confirmation" name="passwordConfirmation" type="password" autocomplete="new-password" minlength="8" required>
        </p>
        <button type="submit">Załóż konto</button>
    </fieldset>
</form>
<p>Masz już konto? <a href="/logowanie">Zaloguj się</a>.</p>
