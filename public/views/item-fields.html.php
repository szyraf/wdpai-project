<dl>
    <div>
        <dt>Kategoria</dt>
        <dd><?= htmlspecialchars($item['category']) ?></dd>
    </div>
    <div>
        <dt>Kampus</dt>
        <dd><?= htmlspecialchars($item['campus']) ?></dd>
    </div>
    <div>
        <dt>Miejsce</dt>
        <dd><?= htmlspecialchars($item['place']) ?></dd>
    </div>
    <div>
        <dt>Data</dt>
        <dd><time datetime="<?= htmlspecialchars($item['date']) ?>"><?= htmlspecialchars($item['date']) ?></time></dd>
    </div>
    <?php if ($item['storage'] !== null): ?>
        <div>
            <dt>Przechowanie</dt>
            <dd><?= htmlspecialchars($item['storage']) ?></dd>
        </div>
    <?php endif; ?>
    <div>
        <dt>Autor</dt>
        <dd><?= htmlspecialchars($item['author']) ?></dd>
    </div>
</dl>
