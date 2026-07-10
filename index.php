<?php
require __DIR__ . '/includes/helpers.php';
require __DIR__ . '/data/members.php';
require __DIR__ . '/data/events.php';

// Sort events by date ascending so "upcoming" really means soonest-first.
usort($events, fn($a, $b) => strtotime($a['date']) <=> strtotime($b['date']));
$upcomingEvents = array_slice($events, 0, 3);

// Feature a handful of members on the home page.
$featuredMembers = array_slice($members, 0, 3);

// Static testimonial content for the Client Reviews section.
$reviews = [
    ['name' => 'Customer A', 'text' => 'Highly recommended!'],
    ['name' => 'Customer B', 'text' => 'Highly recommended!'],
    ['name' => 'Customer D', 'text' => 'Highly recommended!'],
];

$pageTitle = 'ArtsZone — Where Artists Can Share Their Work';
include __DIR__ . '/includes/header.php';
?>

<section class="hero" style="background-image:url('https://picsum.photos/id/1027/1600/700');">
    <div class="hero-inner">
        <h1>Where Artists Can Share Their Work!<span class="hashtag">#ARTSZONE</span></h1>
    </div>
    <div class="hero-dots" aria-hidden="true">
        <span class="is-active"></span><span></span><span></span>
    </div>
</section>

<section class="section container">
    <div class="section-head">
        <h2>Featured Artists</h2>
        <p>Check out our featured Artists.</p>
    </div>
    <div class="card-grid">
        <?php foreach ($featuredMembers as $m): ?>
            <?php include __DIR__ . '/includes/member-card.php'; ?>
        <?php endforeach; ?>
    </div>
</section>

<section class="section container">
    <div class="section-head">
        <h2>Upcoming Workshops</h2>
        <p>Check out our upcoming workshops.</p>
    </div>
    <div class="card-grid">
        <?php foreach ($upcomingEvents as $e): ?>
            <article class="tile-card">
                <img class="thumb" src="https://picsum.photos/seed/<?= urlencode($e['title']) ?>/400/300" alt="<?= htmlspecialchars($e['title']) ?>">
                <div class="tile-body">
                    <h3><?= htmlspecialchars($e['title']) ?></h3>
                    <p class="meta"><?= date('F j, Y', strtotime($e['date'])) ?></p>
                    <a class="tile-btn" href="workshops.php">View Details</a>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<div class="reviews-banner">Client Reviews</div>

<section class="section container">
    <div class="section-head">
        <h2>Our happy customers</h2>
    </div>
    <div class="reviews-grid">
        <?php foreach ($reviews as $r): ?>
            <div class="review-card">
                <div class="review-avatar" aria-hidden="true"></div>
                <div>
                    <div class="review-name-row">
                        <span class="review-name"><?= htmlspecialchars($r['name']) ?></span>
                        <span class="review-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                    </div>
                    <p class="review-text"><?= htmlspecialchars($r['text']) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
