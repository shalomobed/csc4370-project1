<?php
session_start();
require __DIR__ . '/data/members.php';

$disciplines = array_values(array_unique(array_column($members, 'discipline')));
sort($disciplines);

$errors = [];
$submitted = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $type    = trim($_POST['discipline'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '') {
        $errors['name'] = 'Please enter your name.';
    }
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address.';
    }
    if ($type === '') {
        $errors['discipline'] = 'Please choose a discipline.';
    }
    if ($message === '') {
        $errors['message'] = 'Please describe what you have in mind.';
    }

    if (empty($errors)) {
        // Sanitize before storing/displaying.
        $_SESSION['inquiry'] = [
            'name'       => htmlspecialchars($name, ENT_QUOTES, 'UTF-8'),
            'email'      => htmlspecialchars($email, ENT_QUOTES, 'UTF-8'),
            'discipline' => htmlspecialchars($type, ENT_QUOTES, 'UTF-8'),
            'message'    => htmlspecialchars($message, ENT_QUOTES, 'UTF-8'),
            'submitted_at' => date('F j, Y g:i a'),
        ];
        header('Location: commission.php?sent=1');
        exit();
    }
}

// After redirect, show the confirmation using the session data.
if (isset($_GET['sent']) && isset($_SESSION['inquiry'])) {
    $submitted = true;
    $inquiry = $_SESSION['inquiry'];
}

$prefillArtist = isset($_GET['artist']) ? trim($_GET['artist']) : '';

$pageTitle = 'Commission Form — ArtsZone';
include __DIR__ . '/includes/header.php';
?>

<section class="section container">

    <?php if ($submitted): ?>

        <div class="form-card confirmation">
            <h2>Thanks, <?= $inquiry['name'] ?>!</h2>
            <p>Your commission inquiry was sent on <?= $inquiry['submitted_at'] ?>. Here's a copy for your records:</p>
            <p style="text-align:left; background:var(--bg); border:1px solid var(--border); border-radius:8px; padding:1rem;">
                <strong>Discipline:</strong> <?= $inquiry['discipline'] ?><br>
                <strong>Email:</strong> <?= $inquiry['email'] ?><br>
                <strong>Message:</strong> <?= nl2br($inquiry['message']) ?>
            </p>
            <p>An artist working in this discipline will be in touch soon.</p>
            <a href="gallery.php" class="btn">Browse More Artists</a>
        </div>

    <?php else: ?>

        <h2>Request a Commission</h2>
        <p>Tell us a bit about the piece you have in mind and we'll route it to the right artist.</p>

        <form class="form-card" method="post" action="commission.php" novalidate>

            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
                <?php if (isset($errors['name'])): ?><p class="error-text"><?= $errors['name'] ?></p><?php endif; ?>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                <?php if (isset($errors['email'])): ?><p class="error-text"><?= $errors['email'] ?></p><?php endif; ?>
            </div>

            <div class="form-group">
                <label for="discipline">Discipline</label>
                <select id="discipline" name="discipline">
                    <option value="">Select a discipline&hellip;</option>
                    <?php foreach ($disciplines as $d): ?>
                        <option value="<?= htmlspecialchars($d) ?>" <?= (($_POST['discipline'] ?? '') === $d) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($d) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <?php if (isset($errors['discipline'])): ?><p class="error-text"><?= $errors['discipline'] ?></p><?php endif; ?>
            </div>

            <div class="form-group">
                <label for="message">Project Details</label>
                <textarea id="message" name="message" placeholder="<?= $prefillArtist ? 'Tell ' . htmlspecialchars($prefillArtist) . ' about the piece you have in mind...' : 'Describe the piece you have in mind...' ?>"><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                <?php if (isset($errors['message'])): ?><p class="error-text"><?= $errors['message'] ?></p><?php endif; ?>
            </div>

            <button type="submit" class="btn">Send Inquiry</button>
        </form>

    <?php endif; ?>

</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
