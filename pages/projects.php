<?php
/* ============================================================
   VitrineBTP - Page Réalisations / Galerie filtrable
   ============================================================ */
require_once '../includes/config.php';

$pageTitle    = 'Nos Réalisations – Galerie de projets BTP | VitrineBTP';
$pageDesc     = 'Découvrez la galerie des réalisations de VitrineBTP : construction, rénovation, génie civil, voirie. 850+ projets livrés en Île-de-France et en France.';
$pageKeywords = 'réalisations BTP, galerie projets construction, portfolio bâtiment, travaux réalisés';

require_once '../includes/header.php';

$projets = [
  ['titre'=>'Résidence Les Pins',           'cat'=>'construction', 'lieu'=>'Paris 8e',          'date'=>'2024','surface'=>'4 200 m²','unsplash'=>'photo-1504307651254-35680f356dfd',  'desc'=>'Programme de 48 logements collectifs BBC en plein cœur de Paris, livré avec 3 semaines d\'avance.'],
  ['titre'=>'Pont de la Vallée',            'cat'=>'genie-civil',  'lieu'=>'Seine-et-Marne',    'date'=>'2023','surface'=>'180 ml',   'unsplash'=>'photo-1487958449943-2429e8be8625', 'desc'=>'Ouvrage d\'art routier de 180 mètres linéaires en béton précontraint.'],
  ['titre'=>'ZAC Horizon',                  'cat'=>'voirie',       'lieu'=>'Créteil',            'date'=>'2023','surface'=>'12 ha',    'unsplash'=>'photo-1590756254933-2873d72a83b6', 'desc'=>'Aménagement de zone d\'activités commerciales : voiries, réseaux, espaces verts.'],
  ['titre'=>'Hôtel Ibis – Rénovation',      'cat'=>'renovation',   'lieu'=>'Versailles',         'date'=>'2024','surface'=>'3 800 m²','unsplash'=>'photo-1565008447742-97f6f38c985c', 'desc'=>'Rénovation complète d\'un hôtel 3 étoiles : façades, toiture, chambres, communs.'],
  ['titre'=>'Entrepôt Logistique GLS',      'cat'=>'construction', 'lieu'=>'Roissy-en-France',   'date'=>'2022','surface'=>'8 000 m²','unsplash'=>'photo-1558618666-fcd25c85cd64',   'desc'=>'Bâtiment logistique classe A avec dock de chargement et bureaux intégrés.'],
  ['titre'=>'Lycée Jules Verne',            'cat'=>'construction', 'lieu'=>'Nanterre',           'date'=>'2022','surface'=>'6 500 m²','unsplash'=>'photo-1523217582562-09d05d6dce6a', 'desc'=>'Construction d\'un lycée régional de 1 500 élèves, certification HQE.'],
  ['titre'=>'Résidence Senior Horizon',     'cat'=>'construction', 'lieu'=>'Saint-Germain',      'date'=>'2023','surface'=>'5 100 m²','unsplash'=>'photo-1560472354-b33ff0c44a43',   'desc'=>'EHPAD de 96 chambres, structure béton, façades bardage composite.'],
  ['titre'=>'Dépôt de bus RATP',           'cat'=>'genie-civil',  'lieu'=>'Vitry-sur-Seine',    'date'=>'2021','surface'=>'14 000 m²','unsplash'=>'photo-1503387762-592deb58ef4e',  'desc'=>'Infrastructure de maintenance pour flotte de 200 bus électriques.'],
  ['titre'=>'Passerelle Métal Grand Paris', 'cat'=>'genie-civil',  'lieu'=>'Saint-Denis',        'date'=>'2023','surface'=>'95 ml',   'unsplash'=>'photo-1541888946425-d81bb19240f5','desc'=>'Passerelle piétonne acier et verre, 95 mètres, enjambant le canal Saint-Denis.'],
  ['titre'=>'Boulevard Rénovation Massy',   'cat'=>'voirie',       'lieu'=>'Massy',              'date'=>'2022','surface'=>'4,2 km',  'unsplash'=>'photo-1508450859948-4e04fabaa4ea',  'desc'=>'Réfection complète d\'un boulevard de 4,2 km avec pistes cyclables et éclairage LED.'],
  ['titre'=>'Villa Contemporaine',          'cat'=>'renovation',   'lieu'=>'Fontainebleau',      'date'=>'2024','surface'=>'420 m²',  'unsplash'=>'photo-1416879595882-3373a0480b5b', 'desc'=>'Rénovation énergétique complète d\'une villa des années 70 : isolation, menuiseries, chauffage.'],
  ['titre'=>'Centre Commercial Est',        'cat'=>'construction', 'lieu'=>'Meaux',              'date'=>'2021','surface'=>'22 000 m²','unsplash'=>'photo-1581094794329-c8112a89af12','desc'=>'Centre commercial galerie de 45 boutiques avec parking silo 600 places.'],
];
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="En-tête page Réalisations">
  <div class="container">
    <div class="row" data-aos="fade-right">
      <div class="col-lg-8">
        <nav class="breadcrumb-custom mb-3">
          <a href="<?= SITE_URL ?>/index.php">Accueil</a>
          <span class="mx-2 opacity-50">/</span>
          <span>Nos Réalisations</span>
        </nav>
        <h1>Nos <span style="color:var(--accent);">Réalisations</span></h1>
        <p class="mt-3" style="color:rgba(255,255,255,0.8);font-size:1.05rem;max-width:580px;">
          Plus de 850 projets livrés, chacun reflétant notre engagement pour la qualité et l'innovation.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Galerie filtrable -->
<section class="section-padding bg-white" aria-label="Galerie de réalisations">
  <div class="container">

    <!-- Filtres -->
    <div class="gallery-filter text-center" data-aos="fade-up">
      <button class="filter-btn active" data-filter="all">Tous les projets</button>
      <button class="filter-btn" data-filter="construction">Construction</button>
      <button class="filter-btn" data-filter="renovation">Rénovation</button>
      <button class="filter-btn" data-filter="genie-civil">Génie civil</button>
      <button class="filter-btn" data-filter="voirie">Voirie & VRD</button>
    </div>

    <!-- Grille -->
    <div class="row g-4">
      <?php foreach ($projets as $i => $p):
        $catLabel = ['construction'=>'Construction','renovation'=>'Rénovation','genie-civil'=>'Génie civil','voirie'=>'Voirie'];
      ?>
      <div class="col-md-6 col-lg-4 gallery-item" data-category="<?= $p['cat'] ?>" data-aos="fade-up" data-aos-delay="<?= ($i % 3) * 80 ?>">
        <div class="gallery-item" style="border-radius:12px;overflow:hidden;box-shadow:var(--shadow);cursor:pointer;"
             data-bs-toggle="modal" data-bs-target="#projModal<?= $i ?>">
          <img src="https://images.unsplash.com/<?= $p['unsplash'] ?>?w=700&q=80"
               alt="<?= htmlspecialchars($p['titre']) ?>"
               style="width:100%;height:280px;object-fit:cover;transition:transform 0.5s ease;"
               loading="lazy">
          <div class="gallery-overlay">
            <div>
              <div class="gallery-tags"><span class="tag"><?= isset($catLabel[$p['cat']]) ? $catLabel[$p['cat']] : $p['cat'] ?></span></div>
              <h6 class="mt-2"><?= $p['titre'] ?></h6>
              <span><i class="bi bi-geo-alt-fill me-1"></i><?= $p['lieu'] ?> &nbsp;·&nbsp; <?= $p['date'] ?></span>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="projModal<?= $i ?>" tabindex="-1" aria-labelledby="projModalLabel<?= $i ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content" style="border-radius:20px;overflow:hidden;border:none;">
            <div style="position:relative;">
              <img src="https://images.unsplash.com/<?= $p['unsplash'] ?>?w=900&q=80"
                   alt="<?= htmlspecialchars($p['titre']) ?>"
                   style="width:100%;height:380px;object-fit:cover;">
              <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"
                      style="background:#fff;border-radius:50%;padding:8px;"></button>
              <span style="position:absolute;top:16px;left:16px;background:var(--primary);color:#fff;padding:4px 14px;border-radius:50px;font-size:0.78rem;font-weight:700;">
                <?= isset($catLabel[$p['cat']]) ? $catLabel[$p['cat']] : $p['cat'] ?>
              </span>
            </div>
            <div class="modal-body p-4">
              <h4 style="font-weight:800;margin-bottom:12px;"><?= $p['titre'] ?></h4>
              <p style="color:var(--text-muted);margin-bottom:20px;"><?= $p['desc'] ?></p>
              <div class="row g-3">
                <div class="col-4 text-center">
                  <div style="font-size:0.78rem;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;">Lieu</div>
                  <div style="font-weight:700;font-size:0.92rem;margin-top:4px;"><?= $p['lieu'] ?></div>
                </div>
                <div class="col-4 text-center">
                  <div style="font-size:0.78rem;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;">Surface</div>
                  <div style="font-weight:700;font-size:0.92rem;margin-top:4px;"><?= $p['surface'] ?></div>
                </div>
                <div class="col-4 text-center">
                  <div style="font-size:0.78rem;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;">Livraison</div>
                  <div style="font-weight:700;font-size:0.92rem;margin-top:4px;"><?= $p['date'] ?></div>
                </div>
              </div>
              <div class="text-center mt-4">
                <a href="<?= SITE_URL ?>/contact.php" class="btn-primary-custom" style="font-size:0.88rem;">
                  <i class="bi bi-file-earmark-text"></i> Projet similaire ? Demander un devis
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Stats -->
<section class="stats-section">
  <div class="container" style="position:relative;z-index:1;">
    <div class="row">
      <div class="col-6 col-lg-3"><div class="stat-card"><div class="stat-icon"><i class="bi bi-buildings"></i></div><div class="stat-number"><span data-counter data-target="850" data-suffix="+">0</span></div><div class="stat-label">Projets livrés</div></div></div>
      <div class="col-6 col-lg-3"><div class="stat-card"><div class="stat-icon"><i class="bi bi-map"></i></div><div class="stat-number"><span data-counter data-target="12" data-suffix="">0</span></div><div class="stat-label">Régions couvertes</div></div></div>
      <div class="col-6 col-lg-3"><div class="stat-card"><div class="stat-icon"><i class="bi bi-calendar-check"></i></div><div class="stat-number"><span data-counter data-target="98" data-suffix="%">0</span></div><div class="stat-label">Délais respectés</div></div></div>
      <div class="col-6 col-lg-3"><div class="stat-card"><div class="stat-icon"><i class="bi bi-star-fill"></i></div><div class="stat-number"><span data-counter data-target="4.9" data-suffix="/5">0</span></div><div class="stat-label">Note moyenne</div></div></div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section text-center">
  <div class="container" style="position:relative;z-index:1;">
    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-lg-7">
        <h2>Votre projet sera notre prochaine réussite</h2>
        <p class="mt-3">Contactez-nous pour discuter de votre projet et obtenir un devis gratuit.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap mt-4">
          <a href="<?= SITE_URL ?>/contact.php" class="btn-accent"><i class="bi bi-file-earmark-text-fill"></i> Demander un devis</a>
          <a href="<?= SITE_URL ?>/pages/services.php" class="btn-outline-custom"><i class="bi bi-grid"></i> Nos services</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
