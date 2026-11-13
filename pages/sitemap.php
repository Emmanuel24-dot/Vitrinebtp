<?php
require_once '../includes/config.php';
$pageTitle = 'Plan du site | VitrineBTP';
require_once '../includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="col-lg-8" data-aos="fade-right">
      <nav class="breadcrumb-custom mb-3">
        <a href="<?= SITE_URL ?>/index.php">Accueil</a><span class="mx-2 opacity-50">/</span><span>Plan du site</span>
      </nav>
      <h1>Plan du <span style="color:var(--accent);">site</span></h1>
    </div>
  </div>
</section>

<section class="section-padding bg-white">
  <div class="container">
    <div class="row g-5">
      <div class="col-md-4">
        <h4 style="font-weight:800;color:var(--primary);margin-bottom:16px;"><i class="bi bi-house-fill me-2"></i>Pages principales</h4>
        <ul class="footer-links" style="list-style:none;padding:0;">
          <li><a href="<?= SITE_URL ?>/index.php" style="color:var(--text-dark);"><i class="bi bi-chevron-right me-2" style="color:var(--accent);"></i>Accueil</a></li>
          <li><a href="<?= SITE_URL ?>/pages/about.php" style="color:var(--text-dark);"><i class="bi bi-chevron-right me-2" style="color:var(--accent);"></i>À propos</a></li>
          <li><a href="<?= SITE_URL ?>/pages/services.php" style="color:var(--text-dark);"><i class="bi bi-chevron-right me-2" style="color:var(--accent);"></i>Nos services</a></li>
          <li><a href="<?= SITE_URL ?>/pages/projects.php" style="color:var(--text-dark);"><i class="bi bi-chevron-right me-2" style="color:var(--accent);"></i>Nos réalisations</a></li>
          <li><a href="<?= SITE_URL ?>/pages/gallery.php" style="color:var(--text-dark);"><i class="bi bi-chevron-right me-2" style="color:var(--accent);"></i>Galerie</a></li>
          <li><a href="<?= SITE_URL ?>/pages/blog.php" style="color:var(--text-dark);"><i class="bi bi-chevron-right me-2" style="color:var(--accent);"></i>Blog & Actualités</a></li>
          <li><a href="<?= SITE_URL ?>/pages/faq.php" style="color:var(--text-dark);"><i class="bi bi-chevron-right me-2" style="color:var(--accent);"></i>FAQ</a></li>
          <li><a href="<?= SITE_URL ?>/contact.php" style="color:var(--text-dark);"><i class="bi bi-chevron-right me-2" style="color:var(--accent);"></i>Contact</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4 style="font-weight:800;color:var(--primary);margin-bottom:16px;"><i class="bi bi-grid-fill me-2"></i>Nos services</h4>
        <ul style="list-style:none;padding:0;">
          <?php
          $svcs = ['Construction de bâtiments','Génie civil','Travaux publics','Rénovation','Voirie & Réseaux','Maçonnerie','Charpente','Études techniques','Gestion de projets','Maintenance'];
          foreach ($svcs as $s):
          ?>
          <li style="margin-bottom:8px;">
            <a href="<?= SITE_URL ?>/pages/services.php" style="color:var(--text-dark);font-size:0.9rem;">
              <i class="bi bi-chevron-right me-2" style="color:var(--accent);"></i><?= $s ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="col-md-4">
        <h4 style="font-weight:800;color:var(--primary);margin-bottom:16px;"><i class="bi bi-info-circle-fill me-2"></i>Informations légales</h4>
        <ul style="list-style:none;padding:0;">
          <li style="margin-bottom:8px;"><a href="#" style="color:var(--text-dark);font-size:0.9rem;"><i class="bi bi-chevron-right me-2" style="color:var(--accent);"></i>Mentions légales</a></li>
          <li style="margin-bottom:8px;"><a href="#" style="color:var(--text-dark);font-size:0.9rem;"><i class="bi bi-chevron-right me-2" style="color:var(--accent);"></i>Politique de confidentialité</a></li>
          <li style="margin-bottom:8px;"><a href="#" style="color:var(--text-dark);font-size:0.9rem;"><i class="bi bi-chevron-right me-2" style="color:var(--accent);"></i>Conditions générales d'utilisation</a></li>
          <li style="margin-bottom:8px;"><a href="#" style="color:var(--text-dark);font-size:0.9rem;"><i class="bi bi-chevron-right me-2" style="color:var(--accent);"></i>Cookies</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
