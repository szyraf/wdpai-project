<?php if ($item['photo'] !== null): ?>
    <figure class="item-photo">
        <img src="/img/<?= htmlspecialchars($item['photo']) ?>" width="240" height="<?= (int) $item['photoHeight'] ?>" alt="<?= htmlspecialchars($item['photoAlt']) ?>">
    </figure>
<?php else: ?>
    <div class="item-photo no-photo">
        <img src="/img/document.svg" width="64" height="48" alt="">
        <span>Bez zdjęcia</span>
    </div>
<?php endif; ?>
