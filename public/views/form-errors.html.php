<?php if (($errors ?? []) !== []): ?>
    <div class="form-errors" role="alert">
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
