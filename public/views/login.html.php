<h1><?= htmlspecialchars($pageTitle) ?></h1>
<form method="post" action="/logowanie">
    <fieldset disabled>
        <legend>Dane logowania</legend>
        <p>
            <label for="email">E-mail</label><br>
            <input id="email" name="email" type="email" autocomplete="email" required>
        </p>
        <p>
            <label for="password">Hasło</label><br>
            <input id="password" name="password" type="password" autocomplete="current-password" required>
        </p>
        <button type="submit">Zaloguj się</button>
    </fieldset>
</form>
<details>
    <summary>Przykład komunikatu przy błędnych danych</summary>
    <p>E-mail lub hasło jest niepoprawne.</p>
</details>
<p>Nie masz konta? <a href="/rejestracja">Załóż konto</a>.</p>
<aside aria-label="Informacja o koncie">
    <p>Ogłoszenia można przeglądać bez konta. Docelowo konto pozwoli dodać ogłoszenie i zgłosić się po rzecz.</p>
</aside>
