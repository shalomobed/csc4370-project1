<?php
require __DIR__ . '/includes/helpers.php';
require __DIR__ . '/data/members.php';
require __DIR__ . '/data/events.php';

// Sort events by date ascending 
usort($events, fn($a, $b) => strtotime($a['date']) <=> strtotime($b['date']));
$OurEvents = array_slice($events, 0, 3);

// Feature a handful of members on the home page.
$featuredCreatives = array_slice($members, 0, 4);

// Static testimonial content for the Client Reviews section.
$reviews = [
    ['name' => 'Mia (Model)', 'text' => 'My first time modelling but quite literally the best experience ever!'],
    ['name' => 'Eric (Brand Owner - Blessed Brand', 'text' => 'So happy with the results of the show. Got to showcase my upcoming collection and work with Christ Centered Creatives'],
    ['name' => 'Suzi (Model)', 'text' => 'Modeled with Bunkie before so it was so fun seeing her in the stylist and creative direction role!'],
];

$pageTitle = 'Tell The World — Creative Community';
include __DIR__ . '/includes/header.php';
?>

<section class="hero" style="background-image:url('Media/Show_BTS_3.jpg');">
    <div class="hero-inner">
        <h1>Where Faith and Creativity Meet<span class="hashtag">#Matt28:19</span></h1>
    </div>
    <div class="hero-dots" aria-hidden="true">
        <span class="is-active"></span><span></span><span></span>
    </div>
</section>

<section class="section container">
    <div class="section-head">
        <h2>Featured Creatives</h2>
        <p>Check out brands, models, and so much more</p>
    </div>
    <div class="card-grid featured-grid">
        <?php foreach ($featuredCreatives as $m): ?>
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
        <?php foreach ($OurEvents as $e): ?>
            <article class="tile-card">
                <div class="event-slider">
                    <?php foreach ($e['images'] as $img): ?>
                        <img class="thumb" src="Media/<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($e['title']) ?>">
                    <?php endforeach; ?>
                </div>
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
