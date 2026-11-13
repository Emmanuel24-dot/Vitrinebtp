<?php
/* ============================================================
   VitrineBTP - Page À propos
   ============================================================ */
require_once '../includes/config.php';

$pageTitle    = 'À propos – VitrineBTP | Historique, Mission & Équipe';
$pageDesc     = 'Découvrez l\'histoire de VitrineBTP, notre mission, nos valeurs et notre équipe dirigeante. 20 ans d\'excellence dans le BTP.';
$pageKeywords = 'à propos VitrineBTP, histoire entreprise BTP, mission vision valeurs, équipe dirigeante construction';

require_once '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="En-tête page À propos">
  <div class="container">
    <div class="row">
      <div class="col-lg-8" data-aos="fade-right">
        <nav class="breadcrumb-custom mb-3">
          <a href="<?= SITE_URL ?>/index.php">Accueil</a>
          <span class="mx-2 opacity-50">/</span>
          <span>À propos</span>
        </nav>
        <h1>À propos de <span style="color:var(--accent);">VitrineBTP</span></h1>
        <p class="mt-3" style="color:rgba(255,255,255,0.8);font-size:1.05rem;max-width:580px;">
          20 ans d'excellence, de rigueur et d'innovation au service de vos projets de construction.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Histoire & Mission -->
<section class="section-padding bg-white">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6" data-aos="fade-right">
        <p class="text-uppercase fw-bold" style="color:var(--primary-light);letter-spacing:2px;font-size:0.85rem;">Notre histoire</p>
        <h2 class="section-title">Bâtisseurs depuis <span>2004</span></h2>
        <div class="section-divider" style="margin:0 0 24px;"></div>
        <p style="color:var(--text-muted);line-height:1.9;margin-bottom:20px;">
          VitrineBTP est née de la passion de ses fondateurs pour le bâtiment et d'une vision claire :
          offrir à la France des constructions durables, innovantes et respectueuses de l'environnement.
        </p>
        <p style="color:var(--text-muted);line-height:1.9;margin-bottom:32px;">
          Aujourd'hui, avec plus de 150 collaborateurs, un chiffre d'affaires de 45 M€ et 850 projets
          livrés, VitrineBTP s'impose comme un acteur incontournable du BTP en Île-de-France.
        </p>

        <!-- Timeline -->
        <div class="timeline">
          <?php
          $timeline = [
            ['annee'=>'2004', 'titre'=>'Fondation', 'desc'=>'Création de VitrineBTP par trois associés passionnés de construction à Paris.'],
            ['annee'=>'2008', 'titre'=>'Expansion régionale', 'desc'=>'Ouverture de notre second bureau à Lyon et premiers contrats de voirie publique.'],
            ['annee'=>'2012', 'titre'=>'Certification Qualibat', 'desc'=>'Obtention de la certification Qualibat et du label RGE, reconnaissance de notre qualité.'],
            ['annee'=>'2017', 'titre'=>'Cap des 500 projets', 'desc'=>'Franchissement du cap symbolique des 500 projets livrés avec un taux de satisfaction de 97%.'],
            ['annee'=>'2021', 'titre'=>'Innovation digitale', 'desc'=>'Déploiement du suivi de chantier digital BIM et lancement de notre bureau d\'études interne.'],
            ['annee'=>'2024', 'titre'=>'850+ projets', 'desc'=>'VitrineBTP fête ses 20 ans avec 850 projets livrés et 1200 clients satisfaits.'],
          ];
          foreach ($timeline as $item):
          ?>
          <div class="timeline-item">
            <div class="timeline-dot"></div>
            <span class="timeline-year"><?= $item['annee'] ?></span>
            <h6><?= $item['titre'] ?></h6>
            <p><?= $item['desc'] ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
        <img src="../assets/images/about-story.jpg"
             class="rounded-4 shadow-lg w-100"
             style="height:500px;object-fit:cover;"
             alt="Histoire VitrineBTP – équipe sur chantier"
             onerror="this.src='https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=700&q=80'">

        <!-- Chiffres clés -->
        <div class="row g-3 mt-3">
          <?php
          $chiffres = [
            ['val'=>'850+',  'label'=>'Projets livrés'],
            ['val'=>'20 ans','label'=>'D\'expérience'],
            ['val'=>'150+',  'label'=>'Collaborateurs'],
            ['val'=>'45M€',  'label'=>'Chiffre d\'affaires'],
          ];
          foreach ($chiffres as $c):
          ?>
          <div class="col-6">
            <div class="text-center p-3 rounded-3" style="background:var(--light-bg);">
              <div style="font-size:1.6rem;font-weight:900;color:var(--primary);"><?= $c['val'] ?></div>
              <div style="font-size:0.82rem;color:var(--text-muted);margin-top:4px;"><?= $c['label'] ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Mission, Vision, Valeurs -->
<section class="section-padding bg-light-custom">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="section-title">Mission, Vision <span>&amp; Valeurs</span></h2>
      <div class="section-divider"></div>
    </div>
    <div class="row g-4 mb-5">
      <div class="col-md-4" data-aos="fade-up">
        <div class="p-4 rounded-4 bg-white h-100 shadow-sm text-center">
          <div style="width:70px;height:70px;background:linear-gradient(135deg,var(--primary),var(--primary-light));border-radius:18px;margin:0 auto 20px;display:flex;align-items:center;justify-content:center;font-size:2rem;color:#fff;">
            <i class="bi bi-bullseye"></i>
          </div>
          <h4 style="font-size:1.2rem;font-weight:800;margin-bottom:14px;color:var(--primary);">Notre Mission</h4>
          <p style="color:var(--text-muted);font-size:0.93rem;line-height:1.8;">
            Concevoir et réaliser des ouvrages de qualité qui répondent aux besoins de nos clients
            tout en respectant les normes environnementales et les délais contractuels.
          </p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="p-4 rounded-4 bg-white h-100 shadow-sm text-center">
          <div style="width:70px;height:70px;background:linear-gradient(135deg,#FF6F00,#FF8F00);border-radius:18px;margin:0 auto 20px;display:flex;align-items:center;justify-content:center;font-size:2rem;color:#fff;">
            <i class="bi bi-eye-fill"></i>
          </div>
          <h4 style="font-size:1.2rem;font-weight:800;margin-bottom:14px;color:#FF6F00;">Notre Vision</h4>
          <p style="color:var(--text-muted);font-size:0.93rem;line-height:1.8;">
            Devenir le leader national du BTP durable en intégrant les meilleures innovations
            technologiques et en plaçant le capital humain au cœur de notre développement.
          </p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="p-4 rounded-4 bg-white h-100 shadow-sm text-center">
          <div style="width:70px;height:70px;background:linear-gradient(135deg,#2E7D32,#43A047);border-radius:18px;margin:0 auto 20px;display:flex;align-items:center;justify-content:center;font-size:2rem;color:#fff;">
            <i class="bi bi-heart-fill"></i>
          </div>
          <h4 style="font-size:1.2rem;font-weight:800;margin-bottom:14px;color:#2E7D32;">Nos Engagements</h4>
          <p style="color:var(--text-muted);font-size:0.93rem;line-height:1.8;">
            Qualité irréprochable, respect des délais, transparence dans les coûts et
            engagement environnemental : voilà ce qui nous distingue depuis 20 ans.
          </p>
        </div>
      </div>
    </div>

    <!-- Valeurs -->
    <div class="text-center mb-4" data-aos="fade-up">
      <h3 class="section-title" style="font-size:1.8rem;">Nos <span>valeurs fondamentales</span></h3>
    </div>
    <div class="row g-4">
      <?php
      $valeurs = [
        ['icon'=>'bi-shield-check-fill', 'titre'=>'Intégrité',     'desc'=>'Honnêteté et transparence dans toutes nos relations clients, fournisseurs et partenaires.'],
        ['icon'=>'bi-trophy-fill',        'titre'=>'Excellence',    'desc'=>'Recherche permanente de la meilleure qualité dans chaque ouvrage que nous réalisons.'],
        ['icon'=>'bi-people-fill',        'titre'=>'Équipe',        'desc'=>'La force collective de nos 150 collaborateurs passionnés est notre premier atout.'],
        ['icon'=>'bi-lightbulb-fill',     'titre'=>'Innovation',    'desc'=>'Adoption des meilleures technologies BIM, matériaux durables et procédés constructifs.'],
        ['icon'=>'bi-tree-fill',          'titre'=>'Durabilité',    'desc'=>'Engagement RSE fort : réduction de l\'empreinte carbone, matériaux écologiques.'],
        ['icon'=>'bi-handshake-fill',     'titre'=>'Partenariat',   'desc'=>'Relation de confiance durable avec chaque client, de la conception à la livraison.'],
      ];
      foreach ($valeurs as $i => $v):
      ?>
      <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="<?= $i * 80 ?>">
        <div class="value-card">
          <div class="value-icon"><i class="bi <?= $v['icon'] ?>"></i></div>
          <h5><?= $v['titre'] ?></h5>
          <p><?= $v['desc'] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Pourquoi nous choisir -->
<section class="section-padding bg-white">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6" data-aos="fade-right">
        <p class="text-uppercase fw-bold" style="color:var(--primary-light);letter-spacing:2px;font-size:0.85rem;">Nos différenciateurs</p>
        <h2 class="section-title">Pourquoi choisir <span>VitrineBTP ?</span></h2>
        <div class="section-divider" style="margin:0 0 24px;"></div>
        <div class="row g-3">
          <?php
          $avantages = [
            ['icon'=>'bi-patch-check-fill','titre'=>'Certifié Qualibat','desc'=>'Garantie de qualité reconnue au niveau national.'],
            ['icon'=>'bi-clock-fill',      'titre'=>'Respect des délais','desc'=>'98% de nos chantiers livrés dans les délais contractuels.'],
            ['icon'=>'bi-shield-fill',     'titre'=>'Garantie décennale','desc'=>'Couverture complète pour 10 ans après la livraison.'],
            ['icon'=>'bi-cpu-fill',        'titre'=>'Technologie BIM',   'desc'=>'Modélisation 3D et suivi de chantier digital en temps réel.'],
            ['icon'=>'bi-leaf-fill',       'titre'=>'Éco-responsable',   'desc'=>'Label RGE et charte RSE pour des constructions durables.'],
            ['icon'=>'bi-headset',         'titre'=>'Suivi dédié',       'desc'=>'Un chef de projet attitré pour chaque client.'],
          ];
          foreach ($avantages as $i => $a):
          ?>
          <div class="col-6">
            <div class="d-flex gap-3 align-items-start p-3 rounded-3" style="background:var(--light-bg);">
              <i class="bi <?= $a['icon'] ?>" style="font-size:1.4rem;color:var(--primary);flex-shrink:0;"></i>
              <div>
                <div style="font-weight:700;font-size:0.88rem;margin-bottom:4px;"><?= $a['titre'] ?></div>
                <div style="font-size:0.8rem;color:var(--text-muted);"><?= $a['desc'] ?></div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
        <img src="../assets/images/why-us.jpg"
             class="rounded-4 shadow-lg w-100"
             style="height:460px;object-fit:cover;"
             alt="Pourquoi choisir VitrineBTP"
             onerror="this.src='https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=700&q=80'">
      </div>
    </div>
  </div>
</section>

<!-- Équipe dirigeante -->
<section class="section-padding bg-light-custom">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <p class="text-uppercase fw-bold" style="color:var(--primary-light);letter-spacing:2px;font-size:0.85rem;">Les visages de VitrineBTP</p>
      <h2 class="section-title">Notre équipe <span>dirigeante</span></h2>
      <div class="section-divider"></div>
      <p class="section-subtitle">Des professionnels expérimentés qui pilotent chaque projet avec passion et expertise.</p>
    </div>
    <div class="row g-4">
      <?php
      $equipe = [
        ['nom'=>'Pierre Leclerc',    'poste'=>'Président-Directeur Général',  'desc'=>'Ingénieur diplômé de l\'École des Ponts. 25 ans d\'expérience dans le BTP.',    'img'=>'team1.jpg', 'unsplash'=>'photo-1507003211169-0a1dd7228f2d'],
        ['nom'=>'Catherine Morel',   'poste'=>'Directrice Technique',         'desc'=>'Architecte DPLG. Spécialiste construction durable et réglementation thermique.','img'=>'team2.jpg', 'unsplash'=>'photo-1573496359142-b8d87734a5a2'],
        ['nom'=>'Yannick Bernard',   'poste'=>'Directeur des Travaux',        'desc'=>'Chef de chantier pendant 15 ans avant de devenir DT. Expert en gestion de risques.','img'=>'team3.jpg','unsplash'=>'photo-1560250097-0b93528c311a'],
        ['nom'=>'Sandrine Petit',    'poste'=>'Directrice Commerciale',       'desc'=>'MBA HEC. Développe les partenariats stratégiques et fidélise notre portefeuille clients.','img'=>'team4.jpg','unsplash'=>'photo-1580489944761-15a19d654956'],
      ];
      foreach ($equipe as $i => $m):
      ?>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
        <div class="team-card">
          <div class="team-img-wrap">
            <img src="../assets/images/<?= $m['img'] ?>"
                 alt="<?= htmlspecialchars($m['nom']) ?> – <?= htmlspecialchars($m['poste']) ?>"
                 onerror="this.src='https://images.unsplash.com/<?= $m['unsplash'] ?>?w=400&q=80'">
            <div class="team-social-overlay">
              <a href="<?= SOCIAL_LINKEDIN ?>" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
              <a href="mailto:<?= CONTACT_EMAIL ?>" aria-label="Email"><i class="bi bi-envelope-fill"></i></a>
            </div>
          </div>
          <div class="team-card-body">
            <h5><?= $m['nom'] ?></h5>
            <span><?= $m['poste'] ?></span>
            <p style="font-size:0.82rem;color:var(--text-muted);margin-top:10px;"><?= $m['desc'] ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section text-center">
  <div class="container" style="position:relative;z-index:1;">
    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-lg-7">
        <h2>Rejoignez nos 1 200 clients satisfaits</h2>
        <p class="mt-3">Parlez-nous de votre projet et obtenez une étude personnalisée gratuite.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap mt-4">
          <a href="<?= SITE_URL ?>/contact.php" class="btn-accent">
            <i class="bi bi-file-earmark-text-fill"></i> Demander un devis
          </a>
          <a href="<?= SITE_URL ?>/pages/services.php" class="btn-outline-custom">
            <i class="bi bi-grid"></i> Nos services
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
