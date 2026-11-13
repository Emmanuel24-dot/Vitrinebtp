<?php
/* ============================================================
   VitrineBTP - Page Galerie (alias Réalisations étendu)
   ============================================================ */
require_once '../includes/config.php';

$pageTitle = 'Galerie Photo – Projets BTP | VitrineBTP';
$pageDesc  = 'Galerie photos de tous nos chantiers BTP : construction, rénovation, voirie, génie civil. Découvrez le savoir-faire VitrineBTP en images.';

require_once '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="En-tête Galerie">
  <div class="container">
    <div class="row" data-aos="fade-right">
      <div class="col-lg-8">
        <nav class="breadcrumb-custom mb-3">
          <a href="<?= SITE_URL ?>/index.php">Accueil</a>
          <span class="mx-2 opacity-50">/</span>
          <span>Galerie</span>
        </nav>
        <h1>Galerie <span style="color:var(--accent);">Photos</span></h1>
        <p class="mt-3" style="color:rgba(255,255,255,0.8);">
          L'excellence de nos réalisations en images.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="section-padding bg-white">
  <div class="container">
    <div class="gallery-filter text-center mb-5" data-aos="fade-up">
      <button class="filter-btn active" data-filter="all">Tout</button>
      <button class="filter-btn" data-filter="construction">Construction</button>
      <button class="filter-btn" data-filter="renovation">Rénovation</button>
      <button class="filter-btn" data-filter="genie-civil">Génie civil</button>
      <button class="filter-btn" data-filter="voirie">Voirie</button>
      <button class="filter-btn" data-filter="chantier">Chantier</button>
    </div>

    <div class="row g-3">
      <?php
      $photos = [
        ['cat'=>'construction', 'unsplash'=>'photo-1504307651254-35680f356dfd', 'alt'=>'Bâtiment résidentiel BTP'],
        ['cat'=>'chantier',     'unsplash'=>'photo-1581094794329-c8112a89af12', 'alt'=>'Vue de chantier construction'],
        ['cat'=>'genie-civil',  'unsplash'=>'photo-1487958449943-2429e8be8625', 'alt'=>'Pont génie civil'],
        ['cat'=>'renovation',   'unsplash'=>'photo-1565008447742-97f6f38c985c', 'alt'=>'Rénovation bâtiment'],
        ['cat'=>'voirie',       'unsplash'=>'photo-1590756254933-2873d72a83b6', 'alt'=>'Chantier voirie'],
        ['cat'=>'construction', 'unsplash'=>'photo-1558618666-fcd25c85cd64',   'alt'=>'Entrepôt construction'],
        ['cat'=>'chantier',     'unsplash'=>'photo-1503387762-592deb58ef4e',   'alt'=>'Grue chantier BTP'],
        ['cat'=>'construction', 'unsplash'=>'photo-1523217582562-09d05d6dce6a','alt'=>'Lycée construction'],
        ['cat'=>'renovation',   'unsplash'=>'photo-1416879595882-3373a0480b5b','alt'=>'Rénovation intérieure'],
        ['cat'=>'genie-civil',  'unsplash'=>'photo-1541888946425-d81bb19240f5','alt'=>'Passerelle génie civil'],
        ['cat'=>'voirie',       'unsplash'=>'photo-1508450859948-4e04fabaa4ea','alt'=>'Route voirie travaux'],
        ['cat'=>'chantier',     'unsplash'=>'photo-1560472354-b33ff0c44a43',   'alt'=>'Béton coulage chantier'],
      ];
      foreach ($photos as $i => $ph):
        $col = ($i % 5 === 0 || $i % 5 === 3) ? 'col-lg-8' : 'col-lg-4';
      ?>
      <div class="<?= $col ?> col-md-6 gallery-item" data-category="<?= $ph['cat'] ?>" data-aos="fade-up" data-aos-delay="<?= ($i%3)*80 ?>">
        <div style="border-radius:12px;overflow:hidden;box-shadow:var(--shadow);cursor:zoom-in;">
          <img src="https://images.unsplash.com/<?= $ph['unsplash'] ?>?w=800&q=80"
               alt="<?= htmlspecialchars($ph['alt']) ?>"
               style="width:100%;height:<?= ($col==='col-lg-8')?'320':'280' ?>px;object-fit:cover;transition:transform 0.5s ease;display:block;"
               loading="lazy">
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-section text-center">
  <div class="container" style="position:relative;z-index:1;">
    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-lg-7">
        <h2>Votre projet mérite la même qualité</h2>
        <p class="mt-3">Contactez-nous pour un devis gratuit.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap mt-4">
          <a href="<?= SITE_URL ?>/contact.php" class="btn-accent"><i class="bi bi-file-earmark-text-fill"></i> Devis gratuit</a>
          <a href="<?= SITE_URL ?>/pages/projects.php" class="btn-outline-custom"><i class="bi bi-images"></i> Toutes nos réalisations</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
