<?php
/* ============================================================
   VitrineBTP - Page Blog / Actualités
   ============================================================ */
require_once '../includes/config.php';

$pageTitle    = 'Blog & Actualités BTP – Conseils, Tendances | VitrineBTP';
$pageDesc     = 'Le blog de VitrineBTP : actualités du secteur BTP, conseils en construction et rénovation, innovations et réglementations.';
$pageKeywords = 'blog BTP, actualités construction, conseils rénovation, innovation bâtiment, réglementation RE2020';

require_once '../includes/header.php';

$articles = [
  ['cat'=>'Innovation','titre'=>'Le BIM révolutionne la gestion de projets de construction','resume'=>'La modélisation des données du bâtiment (BIM) transforme en profondeur les méthodes de travail dans le secteur BTP. De la conception à la maintenance, cette technologie apporte gains de temps et réduction des coûts.','date'=>'10 Juin 2025','auteur'=>'Pierre Leclerc','temps'=>'6 min','unsplash'=>'photo-1416879595882-3373a0480b5b','color'=>'#0D47A1'],
  ['cat'=>'Réglementation','titre'=>'RE2020 : ce qui change pour les constructions neuves en 2025','resume'=>'La réglementation environnementale 2020 impose de nouvelles exigences énergétiques et carbone pour toutes les constructions neuves. Découvrez les impacts concrets pour vos projets.','date'=>'28 Mai 2025','auteur'=>'Catherine Morel','temps'=>'8 min','unsplash'=>'photo-1508450859948-4e04fabaa4ea','color'=>'#FF6F00'],
  ['cat'=>'Conseils','titre'=>'Rénovation énergétique : quelles aides financières en 2025 ?','resume'=>'MaPrimeRénov\', CEE, éco-PTZ, TVA à taux réduit... Découvrez tous les dispositifs d\'aide pour financer votre rénovation énergétique et réduire votre facture en 2025.','date'=>'15 Mai 2025','auteur'=>'Sandrine Petit','temps'=>'7 min','unsplash'=>'photo-1541888946425-d81bb19240f5','color'=>'#2E7D32'],
  ['cat'=>'Secteur BTP','titre'=>'Pénurie de matériaux : comment VitrineBTP s\'adapte','resume'=>'Face aux tensions persistantes sur les prix des matériaux, VitrineBTP a développé une stratégie d\'approvisionnement résiliente pour protéger ses clients des hausses de coût.','date'=>'2 Mai 2025','auteur'=>'Yannick Bernard','temps'=>'5 min','unsplash'=>'photo-1581094794329-c8112a89af12','color'=>'#6A1B9A'],
  ['cat'=>'Innovation','titre'=>'Impression 3D dans le BTP : entre promesses et réalité','resume'=>'L\'impression 3D de bâtiments n\'est plus de la science-fiction. Tour d\'horizon des technologies actuelles, leurs avantages et leurs limites pour le secteur de la construction.','date'=>'18 Avr. 2025','auteur'=>'Pierre Leclerc','temps'=>'9 min','unsplash'=>'photo-1503387762-592deb58ef4e','color'=>'#0D47A1'],
  ['cat'=>'Conseils','titre'=>'Comment choisir son entreprise de BTP ? Les 10 critères essentiels','resume'=>'Certifications, références, garanties, assurances... Voici les 10 critères indispensables pour sélectionner le bon partenaire pour votre chantier et éviter les mauvaises surprises.','date'=>'5 Avr. 2025','auteur'=>'Sandrine Petit','temps'=>'6 min','unsplash'=>'photo-1590756254933-2873d72a83b6','color'=>'#2E7D32'],
];

$catColors = ['Innovation'=>'#0D47A1','Réglementation'=>'#FF6F00','Conseils'=>'#2E7D32','Secteur BTP'=>'#6A1B9A'];
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="En-tête Blog">
  <div class="container">
    <div class="row" data-aos="fade-right">
      <div class="col-lg-8">
        <nav class="breadcrumb-custom mb-3">
          <a href="<?= SITE_URL ?>/index.php">Accueil</a>
          <span class="mx-2 opacity-50">/</span>
          <span>Blog & Actualités</span>
        </nav>
        <h1>Blog <span style="color:var(--accent);">& Actualités</span></h1>
        <p class="mt-3" style="color:rgba(255,255,255,0.8);font-size:1.05rem;">
          Conseils d'experts, tendances du secteur et actualités de VitrineBTP.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Articles -->
<section class="section-padding bg-light-custom" aria-label="Articles de blog">
  <div class="container">

    <!-- Article vedette -->
    <div class="mb-5" data-aos="fade-up">
      <div class="row g-0 rounded-4 overflow-hidden shadow-lg bg-white">
        <div class="col-lg-6">
          <img src="https://images.unsplash.com/<?= $articles[0]['unsplash'] ?>?w=800&q=80"
               alt="<?= htmlspecialchars($articles[0]['titre']) ?>"
               style="width:100%;height:100%;min-height:380px;object-fit:cover;">
        </div>
        <div class="col-lg-6 d-flex align-items-center p-5">
          <div>
            <?php $catColor0 = isset($catColors[$articles[0]['cat']]) ? $catColors[$articles[0]['cat']] : '#0D47A1'; ?>
            <span class="badge mb-3 px-3 py-2 rounded-pill" style="background:<?= $catColor0 ?>;color:#fff;font-size:0.8rem;letter-spacing:0.5px;">
              <?= $articles[0]['cat'] ?>
            </span>
            <h2 style="font-size:1.5rem;font-weight:800;margin-bottom:16px;line-height:1.3;"><?= $articles[0]['titre'] ?></h2>
            <p style="color:var(--text-muted);font-size:0.93rem;line-height:1.8;margin-bottom:24px;"><?= $articles[0]['resume'] ?></p>
            <div class="d-flex align-items-center gap-3 mb-4" style="font-size:0.82rem;color:var(--text-muted);">
              <span><i class="bi bi-person me-1"></i><?= $articles[0]['auteur'] ?></span>
              <span><i class="bi bi-calendar3 me-1"></i><?= $articles[0]['date'] ?></span>
              <span><i class="bi bi-clock me-1"></i><?= $articles[0]['temps'] ?> de lecture</span>
            </div>
            <a href="#" class="btn-primary-custom" style="font-size:0.9rem;">
              <i class="bi bi-book-open-fill"></i> Lire l'article
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Grille articles -->
    <div class="row g-4">
      <?php foreach (array_slice($articles, 1) as $i => $a): ?>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
        <div class="blog-card">
          <div class="blog-card-img">
            <img src="https://images.unsplash.com/<?= $a['unsplash'] ?>?w=700&q=80"
                 alt="<?= htmlspecialchars($a['titre']) ?>"
                 loading="lazy">
            <?php $catColorA = isset($catColors[$a['cat']]) ? $catColors[$a['cat']] : '#0D47A1'; ?>
            <span class="blog-card-category" style="background:<?= $catColorA ?>;"><?= $a['cat'] ?></span>
          </div>
          <div class="blog-card-body">
            <div class="blog-card-meta">
              <span><i class="bi bi-calendar3"></i> <?= $a['date'] ?></span>
              <span><i class="bi bi-clock"></i> <?= $a['temps'] ?></span>
            </div>
            <h5><?= $a['titre'] ?></h5>
            <p><?= substr($a['resume'], 0, 130) ?>…</p>
            <div class="d-flex align-items-center justify-content-between mt-3">
              <span style="font-size:0.8rem;color:var(--text-muted);"><i class="bi bi-person me-1"></i><?= $a['auteur'] ?></span>
              <a href="#" class="blog-read-more">Lire <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Newsletter -->
    <div class="mt-5 p-5 rounded-4 text-center" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));" data-aos="fade-up">
      <h3 style="color:#fff;font-weight:800;margin-bottom:12px;">Ne ratez aucun article</h3>
      <p style="color:rgba(255,255,255,0.8);margin-bottom:24px;">Recevez nos conseils et actualités BTP directement dans votre boîte mail.</p>
      <form class="newsletter-form d-flex justify-content-center gap-2 flex-wrap" novalidate>
        <input type="email" placeholder="Votre adresse email"
               style="padding:12px 20px;border-radius:50px;border:none;min-width:280px;font-size:0.9rem;"
               required>
        <button type="submit" class="btn-accent" style="border-radius:50px;">
          <i class="bi bi-send-fill"></i> S'abonner
        </button>
      </form>
      <p class="newsletter-msg mt-2" style="display:none;color:#A5D6A7;font-size:0.85rem;">
        <i class="bi bi-check-circle-fill me-1"></i> Merci pour votre inscription !
      </p>
    </div>

  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
