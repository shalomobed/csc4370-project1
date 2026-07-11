<?php
require __DIR__ . '/data/events.php';

usort($events, fn($a, $b) => strtotime($a['date']) <=> strtotime($b['date']));

$pageTitle = 'Workshops — Tell The World';
include __DIR__ . '/includes/header.php';
?>

<section class="section container">
    <div class="section-head">
        <h2>Upcoming Workshops</h2>
        <p>Check out our upcoming workshops.</p>
    </div>

    <div class="workshop-list-detailed">
        <?php foreach ($events as $e): ?>
            <div class="workshop-row">
                <div class="workshop-date-badge">
                    <?= date('M j', strtotime($e['date'])) ?>
                    <small><?= date('Y', strtotime($e['date'])) ?></small>
                </div>
                <div class="details">
                    <h3><?= htmlspecialchars($e['title']) ?></h3>
                    <p class="host">hosted by <?= htmlspecialchars($e['host']) ?></p>
                    <p><?= htmlspecialchars($e['description']) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
