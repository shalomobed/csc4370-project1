<?php
require __DIR__ . '/includes/helpers.php';
require __DIR__ . '/data/members.php';

// Build the list of disciplines directly from the data instead of
// hardcoding it, so it always matches what's actually in $members.
$disciplines = array_values(array_unique(array_column($members, 'discipline')));
sort($disciplines);

$selectedType = isset($_GET['type']) ? trim($_GET['type']) : '';

$filteredMembers = $selectedType === ''
    ? $members
    : array_filter($members, fn($m) => strcasecmp($m['discipline'], $selectedType) === 0);

$pageTitle = 'Members — ArtsZone';
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

<?php include __DIR__ . '/includes/footer.php'; ?>

