<?php
/* ============================================================
   VitrineBTP - Header global (navbar + balises head)
   Variables attendues : $pageTitle, $pageDesc, $pageKeywords
   ============================================================ */
if (!defined('SITE_NAME')) require_once __DIR__ . '/config.php';

if (!isset($pageTitle))    $pageTitle    = SITE_NAME . ' – ' . SITE_TAGLINE;
if (!isset($pageDesc))     $pageDesc     = 'VitrineBTP, votre expert en construction, rénovation et travaux publics. Qualité, rigueur et innovation depuis plus de 20 ans.';
if (!isset($pageKeywords)) $pageKeywords = 'BTP, construction, rénovation, travaux publics, génie civil, bâtiment, maçonnerie, charpente, Paris';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- SEO -->
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">
  <meta name="keywords"    content="<?= htmlspecialchars($pageKeywords) ?>">
  <meta name="author"      content="VitrineBTP">
  <meta name="robots"      content="index, follow">

  <!-- Open Graph -->
  <meta property="og:type"        content="website">
  <meta property="og:title"       content="<?= htmlspecialchars($pageTitle) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
  <meta property="og:url"         content="<?= SITE_URL ?>">
  <meta property="og:image"       content="<?= SITE_URL ?>/assets/images/og-image.jpg">
  <meta property="og:site_name"   content="VitrineBTP">

  <!-- Twitter Card -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:title"       content="<?= htmlspecialchars($pageTitle) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($pageDesc) ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%230D47A1'/><text y='.9em' font-size='70' x='50%' text-anchor='middle'>🏗️</text></svg>">

  <!-- Bootstrap 5 CSS (local) -->
  <link rel="stylesheet" href="<?= SITE_URL ?>/assets/vendor/bootstrap/css/bootstrap.min.css">

  <!-- Bootstrap Icons (local) -->
  <link rel="stylesheet" href="<?= SITE_URL ?>/assets/vendor/bootstrap-icons/font/bootstrap-icons.min.css">

  <!-- AOS Animate On Scroll (local) -->
  <link rel="stylesheet" href="<?= SITE_URL ?>/assets/vendor/aos/aos.css">

  <!-- Google Fonts (optionnel - nécessite internet) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" media="print" onload="this.media='all'">

  <!-- Style principal -->
  <link rel="stylesheet" href="<?= SITE_URL ?>/assets/css/style.css">
</head>
<body>

<!-- Preloader -->
<div id="preloader">
  <div class="preloader-logo">
    <div class="logo-icon"><i class="bi bi-building"></i></div>
    <strong style="font-size:1.2rem;letter-spacing:2px;">VITRINEBTP</strong>
    <div class="preloader-bar"><div class="preloader-bar-fill"></div></div>
  </div>
</div>

<!-- WhatsApp flottant -->
<a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" class="whatsapp-float" target="_blank" rel="noopener" aria-label="WhatsApp">
  <i class="bi bi-whatsapp"></i>
</a>

<!-- Bouton retour en haut -->
<button id="backToTop" aria-label="Retour en haut">
  <i class="bi bi-arrow-up"></i>
</button>

<!-- ===== NAVIGATION ===== -->
<nav class="navbar navbar-expand-lg navbar-custom" aria-label="Navigation principale">
  <div class="container">

    <!-- Logo -->
    <a href="<?= SITE_URL ?>/index.php" class="navbar-brand-custom text-decoration-none">
      <div class="brand-logo"><i class="bi bi-building-fill-up"></i></div>
      <div class="brand-text">
        <strong>VITRINEBTP</strong>
        <span>Bâtiment & Travaux Publics</span>
      </div>
    </a>

    <!-- Toggler mobile -->
    <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNav"
            aria-controls="mainNav"
            aria-expanded="false"
            aria-label="Menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Liens nav -->
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-1">
        <li class="nav-item"><a class="nav-link" href="<?= SITE_URL ?>/index.php">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= SITE_URL ?>/pages/about.php">À propos</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= SITE_URL ?>/pages/services.php">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= SITE_URL ?>/pages/projects.php">Réalisations</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= SITE_URL ?>/pages/blog.php">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= SITE_URL ?>/pages/faq.php">FAQ</a></li>
        <li class="nav-item ms-lg-2">
          <a class="btn-primary-custom" href="<?= SITE_URL ?>/contact.php" style="padding:10px 22px;font-size:0.88rem;">
            <i class="bi bi-telephone-fill"></i> Contact
          </a>
        </li>
      </ul>
    </div>

  </div>
</nav>
