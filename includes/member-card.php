<?php
/**
 * Member card partial.
 * Expects $m (a single entry from $members[]) to be set by the caller.
 * Included via include() from index.php and gallery.php so the markup
 * for an artist card lives in exactly one place.
 */
?>
<article class="tile-card">
    <img class="thumb" src="<?= htmlspecialchars($m['image']) ?>" alt="<?= htmlspecialchars($m['name']) ?>">
    <div class="tile-body">
        <h3><?= htmlspecialchars($m['name']) ?></h3>
        <p class="meta"><?= htmlspecialchars($m['discipline']) ?></p>
        <p class="card-bio"><?= htmlspecialchars(truncate_text($m['bio'], 80)) ?></p>
        <a class="tile-btn" href="member.php?member=<?= $m['id'] ?>">View Profile</a>
    </div>
</article>
