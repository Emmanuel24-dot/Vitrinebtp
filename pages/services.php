<?php
/* ============================================================
   VitrineBTP - Page Services
   ============================================================ */
require_once '../includes/config.php';

$pageTitle    = 'Nos Services BTP – Construction, Rénovation, Génie Civil | VitrineBTP';
$pageDesc     = 'Découvrez tous les services de VitrineBTP : construction, rénovation, génie civil, voirie, maçonnerie, charpente, études techniques et gestion de projets.';
$pageKeywords = 'services BTP, construction bâtiment, rénovation, génie civil, voirie, maçonnerie, charpente, études techniques';

require_once '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero bg-light-alt" aria-label="En-tête page Services">
  <div class="container">
    <div class="row" data-aos="fade-right">
      <div class="col-lg-8">
        <nav class="breadcrumb-custom mb-3">
          <a href="<?= SITE_URL ?>/index.php">Accueil</a>
          <span class="mx-2 opacity-50">/</span>
          <span>Nos Services</span>
        </nav>
        <h1>Nos <span style="color:var(--accent);">Services</span></h1>
        <p class="mt-3" style="color:rgba(255,255,255,0.8);font-size:1.05rem;max-width:580px;">
          Des solutions globales et sur-mesure pour tous vos projets de construction et d'infrastructure.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Intro -->
<section class="section-padding-sm bg-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center" data-aos="fade-up">
        <p class="text-uppercase fw-bold" style="color:var(--primary-light);letter-spacing:2px;font-size:0.85rem;">Ce que nous faisons</p>
        <h2 class="section-title">Une offre <span>complète</span> pour chaque projet</h2>
        <div class="section-divider"></div>
        <p style="color:var(--text-muted);font-size:0.97rem;line-height:1.9;">
          Fort de 20 ans d'expérience, VitrineBTP propose une gamme étendue de services couvrant
          l'intégralité du cycle de vie de votre projet, de la conception à la maintenance.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Services détaillés -->
<section class="section-padding bg-light-custom">
  <div class="container">
    <?php
    $services_full = [
      [
        'id'      => 'construction',
        'icon'    => 'bi-buildings-fill',
        'titre'   => 'Construction de bâtiments',
        'color'   => 'var(--primary)',
        'img'     => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=700&q=80',
        'desc'    => 'Nous réalisons des bâtiments résidentiels, commerciaux, industriels et institutionnels de toute envergure. Notre bureau d\'études interne assure une conception optimisée, notre équipe de conducteurs de travaux garantit une exécution parfaite.',
        'points'  => ['Logements collectifs et individuels','Bureaux et locaux commerciaux','Bâtiments industriels et logistiques','Équipements publics et institutionnels','Construction écologique et HQE'],
      ],
      [
        'id'      => 'genie-civil',
        'icon'    => 'bi-gear-wide-connected',
        'titre'   => 'Génie civil',
        'color'   => '#1976D2',
        'img'     => 'https://images.unsplash.com/photo-1487958449943-2429e8be8625?w=700&q=80',
        'desc'    => 'Nos ingénieurs spécialisés en génie civil conçoivent et réalisent les structures les plus complexes : fondations profondes, ouvrages en béton armé, infrastructures de transport et ouvrages souterrains.',
        'points'  => ['Ouvrages d\'art et ponts','Fondations spéciales et pieux','Structures en béton armé et précontraint','Ouvrages hydrauliques','Soutènements et terrassements'],
      ],
      [
        'id'      => 'travaux-publics',
        'icon'    => 'bi-truck',
        'titre'   => 'Travaux publics',
        'color'   => '#FF6F00',
        'img'     => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=700&q=80',
        'desc'    => 'De la création de routes à la réalisation d\'infrastructures complexes, nos équipes travaux publics interviennent sur des chantiers d\'envergure pour le compte de collectivités et d\'entreprises privées.',
        'points'  => ['Routes et autoroutes','Terrassements généraux','Aménagements urbains','Espaces publics et places','Réseaux pluviaux et eaux usées'],
      ],
      [
        'id'      => 'renovation',
        'icon'    => 'bi-hammer',
        'titre'   => 'Rénovation',
        'color'   => '#2E7D32',
        'img'     => 'https://images.unsplash.com/photo-1565008447742-97f6f38c985c?w=700&q=80',
        'desc'    => 'Nous redonnons vie à vos bâtiments anciens avec des solutions de rénovation complètes alliant performance énergétique, modernité architecturale et respect du bâti existant.',
        'points'  => ['Rénovation énergétique globale','Réhabilitation lourde','Ravalement de façades','Rénovation intérieure complète','Mise aux normes ERP et accessibilité'],
      ],
      [
        'id'      => 'voirie',
        'icon'    => 'bi-signpost-split-fill',
        'titre'   => 'Voirie & Réseaux Divers',
        'color'   => '#6A1B9A',
        'img'     => 'https://images.unsplash.com/photo-1590756254933-2873d72a83b6?w=700&q=80',
        'desc'    => 'Création et réfection de voiries urbaines, pose de réseaux secs et humides, aménagements paysagers et mobilier urbain. Nous gérons l\'ensemble des VRD de votre projet.',
        'points'  => ['Création et réfection de chaussées','Réseaux eau potable et assainissement','Réseaux électricité et télécoms','Éclairage public LED','Signalisation horizontale et verticale'],
      ],
      [
        'id'      => 'maconnerie',
        'icon'    => 'bi-bricks',
        'titre'   => 'Maçonnerie',
        'color'   => '#BF360C',
        'img'     => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=700&q=80',
        'desc'    => 'Nos maçons qualifiés réalisent tous types de travaux de gros œuvre et second œuvre avec précision et savoir-faire. Des fondations aux finitions, nous maîtrisons chaque étape.',
        'points'  => ['Murs porteurs et cloisons','Dallages et planchers béton','Chapes et ragréages','Enduits et crépis','Réparation et consolidation d\'ouvrages'],
      ],
      [
        'id'      => 'charpente',
        'icon'    => 'bi-house-fill',
        'titre'   => 'Charpente & Couverture',
        'color'   => '#01579B',
        'img'     => 'https://images.unsplash.com/photo-1523217582562-09d05d6dce6a?w=700&q=80',
        'desc'    => 'Charpentes bois traditionnelles ou industrielles, charpentes métalliques et structures mixtes. Notre équipe certifiée réalise également tous travaux de couverture et d\'étanchéité.',
        'points'  => ['Charpentes bois traditionnelles','Charpentes métalliques','Couverture tuiles, ardoises, zinc','Étanchéité toiture-terrasse','Isolation thermique par l\'extérieur'],
      ],
      [
        'id'      => 'etudes',
        'icon'    => 'bi-file-earmark-ruled-fill',
        'titre'   => 'Études techniques',
        'color'   => '#004D40',
        'img'     => 'https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=700&q=80',
        'desc'    => 'Notre bureau d\'études interne réalise l\'ensemble des études techniques nécessaires à vos projets : études de sol, béton armé, thermique, fluides et VRD.',
        'points'  => ['Études de sol et géotechnique','Béton armé et charpente métallique','Thermique RT2020 / RE2020','Fluides : plomberie, chauffage, VMC','Plans d\'exécution et dossiers DOE'],
      ],
      [
        'id'      => 'gestion',
        'icon'    => 'bi-kanban-fill',
        'titre'   => 'Gestion de projets',
        'color'   => '#1A237E',
        'img'     => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=700&q=80',
        'desc'    => 'En tant que mandataire ou assistant à maîtrise d\'ouvrage, nous pilotons votre projet de bout en bout : planning, budget, coordination des intervenants et réception des travaux.',
        'points'  => ['Maîtrise d\'œuvre d\'exécution','Coordination OPC','Suivi budgétaire et reporting','Gestion des interfaces et sous-traitants','Réception et levée de réserves'],
      ],
      [
        'id'      => 'maintenance',
        'icon'    => 'bi-tools',
        'titre'   => 'Maintenance',
        'color'   => '#37474F',
        'img'     => 'https://images.unsplash.com/photo-1508450859948-4e04fabaa4ea?w=700&q=80',
        'desc'    => 'Après la livraison, nous assurons la maintenance préventive et corrective de vos ouvrages. Des contrats sur-mesure pour préserver la valeur de votre patrimoine immobilier.',
        'points'  => ['Contrats de maintenance multi-techniques','Maintenance préventive planifiée','Interventions correctives rapides','Diagnostic et audit technique','Carnet numérique du bâtiment'],
      ],
    ];

    foreach ($services_full as $i => $srv):
      $reverse = ($i % 2 !== 0) ? 'flex-row-reverse' : '';
    ?>
    <div id="<?= $srv['id'] ?>" class="row align-items-center g-5 mb-5 pb-5 border-bottom" data-aos="fade-up">

      <div class="col-lg-6 <?= $reverse ?>">
        <div style="position:relative;">
          <img src="<?= $srv['img'] ?>"
               class="rounded-4 shadow-lg w-100"
               style="height:360px;object-fit:cover;"
               alt="<?= htmlspecialchars($srv['titre']) ?> – VitrineBTP"
               loading="lazy">
          <div style="position:absolute;top:20px;left:20px;width:54px;height:54px;background:<?= $srv['color'] ?>;border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:1.6rem;color:#fff;box-shadow:0 6px 18px rgba(0,0,0,0.25);">
            <i class="bi <?= $srv['icon'] ?>"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <h3 style="font-size:1.6rem;font-weight:800;color:var(--text-dark);margin-bottom:16px;">
          <?= $srv['titre'] ?>
        </h3>
        <p style="color:var(--text-muted);font-size:0.95rem;line-height:1.9;margin-bottom:22px;">
          <?= $srv['desc'] ?>
        </p>
        <ul class="check-list">
          <?php foreach ($srv['points'] as $pt): ?>
          <li><i class="bi bi-check-circle-fill" style="color:<?= $srv['color'] ?>;"></i> <?= $pt ?></li>
          <?php endforeach; ?>
        </ul>
        <a href="<?= SITE_URL ?>/contact.php" class="btn-primary-custom mt-4">
          <i class="bi bi-file-earmark-text"></i> Demander un devis
        </a>
      </div>

    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- CTA -->
<section class="cta-section text-center">
  <div class="container" style="position:relative;z-index:1;">
    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-lg-7">
        <h2>Un projet en tête ?</h2>
        <p class="mt-3">Contactez nos experts pour une étude gratuite et personnalisée.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap mt-4">
          <a href="<?= SITE_URL ?>/contact.php" class="btn-accent">
            <i class="bi bi-file-earmark-text-fill"></i> Devis gratuit
          </a>
          <a href="tel:+33123456789" class="btn-outline-custom">
            <i class="bi bi-telephone-fill"></i> <?= CONTACT_PHONE ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
