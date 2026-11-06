<?php if ($item['photo'] !== null): ?>
    <img src="/img/<?= htmlspecialchars($item['photo']) ?>" width="240" height="<?= (int) $item['photoHeight'] ?>" alt="<?= htmlspecialchars($item['photoAlt']) ?>">
<?php else: ?>
    <p>Brak zdjęcia. Dane dokumentu nie są publikowane.</p>
<?php endif; ?>
<dl>
    <dt>Kategoria</dt>
    <dd><?= htmlspecialchars($item['category']) ?></dd>
    <dt>Kampus</dt>
    <dd><?= htmlspecialchars($item['campus']) ?></dd>
    <dt>Miejsce</dt>
    <dd><?= htmlspecialchars($item['place']) ?></dd>
    <dt>Data</dt>
    <dd><time datetime="<?= htmlspecialchars($item['date']) ?>"><?= htmlspecialchars($item['date']) ?></time></dd>
    <?php if ($item['storage'] !== null): ?>
        <dt>Przechowanie</dt>
        <dd><?= htmlspecialchars($item['storage']) ?></dd>
    <?php endif; ?>
    <dt>Autor</dt>
    <dd><?= htmlspecialchars($item['author']) ?></dd>
</dl>
