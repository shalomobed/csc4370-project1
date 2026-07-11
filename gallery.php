<?php
require __DIR__ . '/includes/helpers.php';
require __DIR__ . '/data/members.php';
require __DIR__ . '/data/events.php';

// Build the list of disciplines directly from the data instead of
// hardcoding it, so it always matches what's actually in $members.
$disciplines = array_values(array_unique(array_column($members, 'discipline')));
sort($disciplines);

$selectedType = isset($_GET['type']) ? trim($_GET['type']) : '';

$filteredMembers = $selectedType === ''
    ? $members
    : array_filter($members, fn($m) => strcasecmp($m['discipline'], $selectedType) === 0);

// --- Other Photos: anything in Media/ not already used by a member's
// profile/project images or an event's images. ---
$usedImages = [];

foreach ($members as $m) {
    if (!str_starts_with($m['image'], 'http')) {
        $usedImages[] = strtolower(basename($m['image']));
    }
    foreach ($m['projects'] as $p) {
        if (!str_starts_with($p['image'], 'http')) {
            $usedImages[] = strtolower(basename($p['image']));
        }
    }
}

foreach ($events as $e) {
    if (!empty($e['images'])) {
        foreach ($e['images'] as $img) {
            $usedImages[] = strtolower($img);
        }
    }
}

$mediaDir = __DIR__ . '/Media';
$allMediaFiles = array_unique(glob($mediaDir . '/*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}', GLOB_BRACE));

$leftoverPhotos = [];
foreach ($allMediaFiles as $filePath) {
    $filename = basename($filePath);
    if (!in_array(strtolower($filename), $usedImages, true)) {
        $leftoverPhotos[] = $filename;
    }
}

$pageTitle = 'Members — Tell The World';
include __DIR__ . '/includes/header.php';
?>

<section class="section container">
    <div class="section-head">
        <h2>Members</h2>
        <p>Browse artists and makers by discipline.</p>
    </div>

    <div class="filter-bar">
        <a href="gallery.php" class="<?= $selectedType === '' ? 'active' : '' ?>">All Disciplines</a>
        <?php foreach ($disciplines as $d): ?>
            <a href="gallery.php?type=<?= urlencode($d) ?>"
               class="<?= strcasecmp($selectedType, $d) === 0 ? 'active' : '' ?>">
               <?= htmlspecialchars($d) ?>
            </a>
        <?php endforeach; ?>
    </div>

    <?php if (empty($filteredMembers)): ?>
        <p>No members found for that discipline yet. <a href="gallery.php">View all members</a>.</p>
    <?php else: ?>
        <div class="card-grid">
            <?php foreach ($filteredMembers as $m): ?>
                <?php include __DIR__ . '/includes/member-card.php'; ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>

<?php if (!empty($leftoverPhotos)): ?>
<section class="section container">
    <div class="section-head">
        <h2>Other Photos</h2>
        <p>More from around the community.</p>
    </div>
    <div class="photo-grid">
        <?php foreach ($leftoverPhotos as $photo): ?>
            <div class="photo-tile">
                <img src="Media/<?= htmlspecialchars($photo) ?>" alt="Community photo">
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>