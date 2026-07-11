<?php
// Expects $pageTitle to be set by the including page.
$pageTitle = $pageTitle ?? 'Tell The World — Creative Community';
$currentPage = basename($_SERVER['SCRIPT_NAME']);

require_once __DIR__ . '/../data/members.php';
$featuredMemberId = $members[0]['id'] ?? 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($pageTitle) ?></title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- CSS-only theme switcher: radios must be direct siblings before .site-wrapper -->
<input type="radio" name="theme" id="theme-studio" class="theme-switcher-inputs" checked>
<input type="radio" name="theme" id="theme-warm" class="theme-switcher-inputs">
<input type="radio" name="theme" id="theme-cool" class="theme-switcher-inputs">

<!-- CSS-only mobile nav toggle -->
<input type="checkbox" id="nav-toggle" class="nav-toggle-input">

<div class="site-wrapper">

<header class="site-header">
    <div class="container header-row">
        <a href="index.php" class="brand">
            <span class="brand-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 8h12l-1.1 12.2a1 1 0 0 1-1 .8H8.1a1 1 0 0 1-1-.8L6 8z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                    <path d="M9 8V6.5a3 3 0 0 1 6 0V8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </span>
            <span class="brand-name">Tell The World</span>
        </a>

        <nav class="main-nav">
            <ul>
                <li><a href="gallery.php" class="<?= $currentPage === 'gallery.php' ? 'active' : '' ?>">Members</a></li>
                <li><a href="member.php?member=<?= $featuredMemberId ?>" class="...">Member Profile</a></li>
                <li><a href="workshops.php" class="<?= $currentPage === 'workshops.php' ? 'active' : '' ?>">Workshops</a></li>
                <li><a href="commission.php" class="<?= $currentPage === 'commission.php' ? 'active' : '' ?>">Commission Form</a></li>
            </ul>
            <div class="theme-switcher" aria-label="Theme switcher">
                <label for="theme-studio" title="Mono theme"></label>
                <label for="theme-warm" title="Terracotta theme"></label>
                <label for="theme-cool" title="Slate theme"></label>
            </div>
        </nav>

        <label for="nav-toggle" class="nav-toggle-btn" aria-label="Toggle menu">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 6h18M3 12h18M3 18h18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
        </label>
    </div>
</header>

<main>
