<?php
require __DIR__ . '/data/members.php';

$id = (int) ($_GET['member'] ?? 0);
$found = array_values(array_filter($members, fn($m) => $m['id'] === $id));

if (empty($found)) {
    header('Location: gallery.php');
    exit();
}

$member = $found[0];
$pageTitle = $member['name'] . ' — ArtsZone';
include __DIR__ . '/includes/header.php';
?>

<section class="section container">

    <p><a href="gallery.php">&larr; Back to Members</a></p>

    <div class="profile-header">
        <img src="<?= htmlspecialchars($member['image']) ?>" alt="<?= htmlspecialchars($member['name']) ?>">
        <div class="profile-info">
            <p class="meta"><?= htmlspecialchars($member['discipline']) ?></p>
            <h1><?= htmlspecialchars($member['name']) ?></h1>
            <p class="bio"><?= htmlspecialchars($member['bio']) ?></p>
            <a href="commission.php?artist=<?= urlencode($member['name']) ?>" class="btn">Request a Commission</a>
        </div>
    </div>

    <div class="section-head">
        <h2>Project Gallery</h2>
    </div>

    <!-- CSS Grid masonry gallery: row-span per item is computed in PHP from
         the project's real image dimensions, so taller images span more
         rows automatically. Pure CSS Grid, no JavaScript. -->

    <div class="masonry">
    <?php foreach ($member['projects'] as $i => $p): ?>
        <a href="#project-<?= $id ?>-<?= $i ?>" class="masonry-item">
            <img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['title']) ?>">
            <span class="caption"><?= htmlspecialchars($p['title']) ?></span>
        </a>
    <?php endforeach; ?>
    </div>

    <?php foreach ($member['projects'] as $i => $p): ?>
        <div class="lightbox" id="project-<?= $id ?>-<?= $i ?>">
            <div class="lightbox-content">
                <img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['title']) ?>">
                <p class="lightbox-caption"><?= htmlspecialchars($p['title']) ?> &mdash; <?= htmlspecialchars($member['name']) ?></p>
                <a href="#" class="lightbox-close">Close</a>
            </div>
        </div>
    <?php endforeach; ?>

</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
