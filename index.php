<?php
/* ============================================================
   VitrineBTP - Page d'accueil
   ============================================================ */
require_once 'includes/config.php';

$pageTitle    = 'VitrineBTP – Expert en Construction & Travaux Publics';
$pageDesc     = 'VitrineBTP, votre expert BTP depuis 20 ans. Construction, rénovation, génie civil, voirie. Qualité garantie. Demandez un devis gratuit.';
$pageKeywords = 'BTP Paris, construction bâtiment, travaux publics, rénovation, génie civil, devis gratuit';

require_once 'includes/header.php';
?>

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="hero-section" aria-label="Bannière principale">
  <div class="hero-particles">
    <span></span><span></span><span></span>
  </div>

  <div class="container">
    <div class="row align-items-center">

      <!-- Contenu gauche -->
      <div class="col-lg-6 hero-content" data-aos="fade-right">

        <div class="hero-badge">
          <i class="bi bi-award-fill text-warning"></i>
          <span>N°1 au TOGO</span>
        </div>

        <h1 class="hero-title">
          Bâtisseurs de <span class="highlight">votre</span><br>
          avenir depuis <span class="highlight">20 ans</span>
        </h1>

        <p class="hero-text">
          De la conception à la livraison, nous réalisons vos projets de construction,
          rénovation et travaux publics avec excellence, rigueur et innovation.
        </p>

        <div class="hero-actions">
          <a href="contact.php" class="btn-accent">
            <i class="bi bi-file-earmark-text-fill"></i>
            Demander un devis
          </a>
          <a href="contact.php" class="btn-outline-custom">
            <i class="bi bi-telephone-fill"></i>
            Nous contacter
          </a>
        </div>

        <div class="hero-stats">
          <div class="hero-stat-item">
            <div class="stat-number"><span data-counter data-target="850" data-suffix="+">0+</span></div>
            <div class="stat-label">Projets réalisés</div>
          </div>
          <div class="hero-stat-item">
            <div class="stat-number"><span data-counter data-target="1200" data-suffix="+">0+</span></div>
            <div class="stat-label">Clients satisfaits</div>
          </div>
          <div class="hero-stat-item">
            <div class="stat-number"><span data-counter data-target="20" data-suffix="">0</span><span class="stat-suffix">+</span></div>
            <div class="stat-label">Années d'expérience</div>
          </div>
          <div class="hero-stat-item">
            <div class="stat-number"><span data-counter data-target="98" data-suffix="%">0%</span></div>
            <div class="stat-label">Taux satisfaction</div>
          </div>
        </div>
      </div>

      <!-- Visuel droite -->
      <div class="col-lg-6 hero-visual" data-aos="fade-left" data-aos-delay="200">
        <div class="hero-card-main">
          <img src="assets/images/hero-construction.jpg"
               alt="Chantier de construction BTP VitrineBTP"
               onerror="this.src='https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&q=80'">
        </div>

        <div class="hero-floating-card card-1">
          <div class="card-icon bg-success bg-opacity-10 text-success"><i class="bi bi-check-circle-fill"></i></div>
          <div class="card-text">
            <strong>Projet livré</strong>
            <span>Résidence Les Pins – Paris 8e</span>
          </div>
        </div>

        <div class="hero-floating-card card-2">
          <div class="card-icon" style="background:rgba(255,111,0,0.1);color:#FF6F00;"><i class="bi bi-trophy-fill"></i></div>
          <div class="card-text">
            <strong>Certifié RGE</strong>
            <span>Qualibat – ISO 9001</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     STATISTIQUES ANIMÉES
     ============================================================ -->
<section class="stats-section" aria-label="Nos chiffres clés">
  <div class="container" style="position:relative;z-index:1;">
    <div class="row">
      <div class="col-6 col-lg-3">
        <div class="stat-card" data-aos="fade-up">
          <div class="stat-icon"><i class="bi bi-buildings"></i></div>
          <div class="stat-number"><span data-counter data-target="850" data-suffix="+">0</span></div>
          <div class="stat-label">Projets réalisés</div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
          <div class="stat-icon"><i class="bi bi-people"></i></div>
          <div class="stat-number"><span data-counter data-target="1200" data-suffix="+">0</span></div>
          <div class="stat-label">Clients satisfaits</div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
          <div class="stat-icon"><i class="bi bi-calendar-check"></i></div>
          <div class="stat-number"><span data-counter data-target="20" data-suffix="">0</span><span class="stat-suffix"> ans</span></div>
          <div class="stat-label">D'expérience</div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="stat-card" data-aos="fade-up" data-aos-delay="300">
          <div class="stat-icon"><i class="bi bi-people-fill"></i></div>
          <div class="stat-number"><span data-counter data-target="150" data-suffix="+">0</span></div>
          <div class="stat-label">Employés qualifiés</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     À PROPOS (aperçu)
     ============================================================ -->
<section class="section-padding about-home bg-white" aria-label="Présentation de l'entreprise">
  <div class="container">
    <div class="row align-items-center g-5">

      <div class="col-lg-5" data-aos="fade-right">
        <div class="about-img-wrap">
          <img src="assets/images/about-team.jpg"
               class="main-img"
               alt="Équipe VitrineBTP en action sur chantier"
               onerror="this.src='https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=700&q=80'">
          <div class="exp-badge">
            <div class="exp-num">20</div>
            <div class="exp-text">ans<br>d'excellence</div>
          </div>
        </div>
      </div>

      <div class="col-lg-7" data-aos="fade-left" data-aos-delay="100">
        <p class="text-uppercase fw-bold" style="color:var(--primary-light);letter-spacing:2px;font-size:0.85rem;">À propos de nous</p>
        <h2 class="section-title">Un partenaire <span>de confiance</span><br>pour vos grands projets</h2>
        <div class="section-divider" style="margin:0 0 24px;"></div>
        <p class="mb-4" style="color:var(--text-muted);font-size:0.97rem;line-height:1.9;">
          Fondée en 2004, VitrineBTP est une entreprise de bâtiment et travaux publics implantée
          en Île-de-France. Nous intervenons sur tous types de chantiers : résidentiels, commerciaux,
          industriels et d'infrastructure, avec des équipes certifiées et un parc matériel moderne.
        </p>

        <ul class="check-list mb-4">
          <li><i class="bi bi-check-circle-fill"></i> Certifié Qualibat &amp; RGE – Reconnu Garant de l'Environnement</li>
          <li><i class="bi bi-check-circle-fill"></i> Respect des délais et des budgets — engagement contractuel</li>
          <li><i class="bi bi-check-circle-fill"></i> Équipes pluridisciplinaires hautement qualifiées</li>
          <li><i class="bi bi-check-circle-fill"></i> Matériaux certifiés et fournisseurs homologués</li>
          <li><i class="bi bi-check-circle-fill"></i> Suivi de chantier digital en temps réel</li>
        </ul>

        <div class="d-flex gap-3 flex-wrap">
          <a href="pages/about.php" class="btn-primary-custom">
            <i class="bi bi-info-circle"></i> En savoir plus
          </a>
          <a href="contact.php" class="btn-outline-custom" style="color:var(--primary);border-color:var(--primary);">
            <i class="bi bi-telephone"></i> Nous appeler
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     SERVICES (aperçu)
     ============================================================ -->
<section class="section-padding bg-light-custom" aria-label="Nos services">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <p class="text-uppercase fw-bold" style="color:var(--primary-light);letter-spacing:2px;font-size:0.85rem;">Ce que nous faisons</p>
      <h2 class="section-title">Nos <span>expertises</span></h2>
      <div class="section-divider"></div>
      <p class="section-subtitle">Des solutions complètes et sur-mesure pour tous vos projets de construction et de rénovation.</p>
    </div>

    <div class="row g-4">
      <?php
      $services = [
        ['icon'=>'bi-buildings-fill',        'title'=>'Construction de bâtiments',  'desc'=>'Conception et réalisation de bâtiments résidentiels, commerciaux et industriels dans les règles de l\'art.'],
        ['icon'=>'bi-hammer',                 'title'=>'Rénovation',                 'desc'=>'Réhabilitation et modernisation de bâtiments existants avec des matériaux de qualité supérieure.'],
        ['icon'=>'bi-truck',                  'title'=>'Travaux publics',            'desc'=>'Réalisation de routes, ponts, ouvrages d\'art et toutes infrastructures publiques.'],
        ['icon'=>'bi-gear-wide-connected',    'title'=>'Génie civil',               'desc'=>'Études et exécution de structures complexes : fondations, ouvrages en béton armé, tunnels.'],
        ['icon'=>'bi-signpost-split-fill',    'title'=>'Voirie & Réseaux',          'desc'=>'Création et réfection de voiries, réseaux divers : eau, assainissement, électricité.'],
        ['icon'=>'bi-bricks',                 'title'=>'Maçonnerie',                 'desc'=>'Travaux de maçonnerie générale : murs, cloisons, fondations et ouvrages en béton.'],
      ];
      foreach ($services as $i => $s):
      ?>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i * 80 ?>">
        <div class="service-card">
          <div class="service-icon"><i class="bi <?= $s['icon'] ?>"></i></div>
          <h5><?= $s['title'] ?></h5>
          <p><?= $s['desc'] ?></p>
          <a href="pages/services.php" class="service-link">En savoir plus <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5" data-aos="fade-up">
      <a href="pages/services.php" class="btn-primary-custom">
        <i class="bi bi-grid"></i> Voir tous nos services
      </a>
    </div>
  </div>
</section>

<!-- ============================================================
     RÉALISATIONS (aperçu)
     ============================================================ -->
<section class="section-padding bg-white" aria-label="Galerie de réalisations">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <p class="text-uppercase fw-bold" style="color:var(--primary-light);letter-spacing:2px;font-size:0.85rem;">Nos réalisations</p>
      <h2 class="section-title">Des projets qui nous <span>définissent</span></h2>
      <div class="section-divider"></div>
      <p class="section-subtitle">Découvrez quelques-unes de nos plus belles réalisations à travers la France.</p>
    </div>

    <div class="row g-3">
      <?php
      $projects = [
        ['img'=>'proj1.jpg', 'unsplash'=>'photo-1487958449943-2429e8be8625', 'title'=>'Résidence Les Pins',     'cat'=>'Construction', 'lieu'=>'Paris 8e',         'date'=>'2024'],
        ['img'=>'proj2.jpg', 'unsplash'=>'photo-1503387762-592deb58ef4e', 'title'=>'Pont de la Vallée',       'cat'=>'Génie civil',  'lieu'=>'Seine-et-Marne',   'date'=>'2023'],
        ['img'=>'proj3.jpg', 'unsplash'=>'photo-1590756254933-2873d72a83b6', 'title'=>'ZAC Horizon',           'cat'=>'Voirie',       'lieu'=>'Créteil',          'date'=>'2023'],
        ['img'=>'proj4.jpg', 'unsplash'=>'photo-1565008447742-97f6f38c985c', 'title'=>'Hôtel Ibis Rénovation','cat'=>'Rénovation',   'lieu'=>'Versailles',       'date'=>'2024'],
        ['img'=>'proj5.jpg', 'unsplash'=>'photo-1558618666-fcd25c85cd64', 'title'=>'Entrepôt Logistique',    'cat'=>'Construction', 'lieu'=>'Roissy-en-France', 'date'=>'2022'],
        ['img'=>'proj6.jpg', 'unsplash'=>'photo-1523217582562-09d05d6dce6a', 'title'=>'Lycée Jules Verne',    'cat'=>'Construction', 'lieu'=>'Nanterre',         'date'=>'2022'],
      ];
      foreach ($projects as $i => $p):
        $col = ($i === 0 || $i === 5) ? 'col-lg-8' : 'col-lg-4';
      ?>
      <div class="<?= $col ?> col-md-6" data-aos="fade-up" data-aos-delay="<?= $i * 60 ?>">
        <div class="gallery-item">
          <img src="assets/images/<?= $p['img'] ?>"
               alt="<?= htmlspecialchars($p['title']) ?> – projet BTP VitrineBTP"
               onerror="this.src='https://images.unsplash.com/<?= $p['unsplash'] ?>?w=800&q=80'">
          <div class="gallery-overlay">
            <h6><?= $p['title'] ?></h6>
            <span><i class="bi bi-geo-alt-fill me-1"></i><?= $p['lieu'] ?> &nbsp;·&nbsp; <?= $p['date'] ?></span>
            <div class="gallery-tags">
              <span class="tag"><?= $p['cat'] ?></span>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5" data-aos="fade-up">
      <a href="pages/projects.php" class="btn-primary-custom">
        <i class="bi bi-images"></i> Voir toutes nos réalisations
      </a>
    </div>
  </div>
</section>

<!-- ============================================================
     TÉMOIGNAGES
     ============================================================ -->
<section class="section-padding testimonial-section" aria-label="Avis de nos clients">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <p class="text-uppercase fw-bold" style="color:var(--primary-light);letter-spacing:2px;font-size:0.85rem;">Ils nous font confiance</p>
      <h2 class="section-title">Ce que disent <span>nos clients</span></h2>
      <div class="section-divider"></div>
    </div>

    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <div class="row g-4 justify-content-center">
            <?php
            $temoins = [
              ['nom'=>'Jean-Pierre Martin',  'poste'=>'Directeur immobilier – Nexity',       'initiale'=>'J', 'note'=>5, 'avis'=>'VitrineBTP a livré notre programme de 48 logements avec 3 semaines d\'avance. La qualité de finition est irréprochable et l\'équipe a fait preuve d\'un professionnalisme exemplaire tout au long du chantier.'],
              ['nom'=>'Sophie Lecomte',      'poste'=>'Responsable travaux – Ville de Paris', 'initiale'=>'S', 'note'=>5, 'avis'=>'Nous collaborons avec VitrineBTP depuis 8 ans pour nos projets de voirie et d\'aménagement urbain. Leur expertise technique et leur réactivité sont des atouts précieux pour la collectivité.'],
              ['nom'=>'Ahmed Bensalah',      'poste'=>'Promoteur – Groupe Habitat Plus',      'initiale'=>'A', 'note'=>5, 'avis'=>'Une entreprise sérieuse qui tient ses engagements. Le suivi de chantier digital facilite grandement la coordination. Je les recommande sans hésitation pour tout projet d\'envergure.'],
            ];
            foreach ($temoins as $t):
            ?>
            <div class="col-md-4">
              <div class="testimonial-card" data-aos="fade-up">
                <div class="stars">
                  <?= str_repeat('<i class="bi bi-star-fill"></i>', $t['note']) ?>
                </div>
                <p>"<?= $t['avis'] ?>"</p>
                <div class="testimonial-author">
                  <div class="author-avatar"><?= $t['initiale'] ?></div>
                  <div class="author-info">
                    <strong><?= $t['nom'] ?></strong>
                    <span><?= $t['poste'] ?></span>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="carousel-item">
          <div class="row g-4 justify-content-center">
            <?php
            $temoins2 = [
              ['nom'=>'Marie Dubois',        'poste'=>'Architecte – Studio MD',              'initiale'=>'M', 'note'=>5, 'avis'=>'La collaboration avec VitrineBTP est toujours enrichissante. Ils comprennent les contraintes architecturales et proposent des solutions ingénieuses. Un vrai partenaire de création.'],
              ['nom'=>'François Garnier',    'poste'=>'PDG – Logistique Garnier',            'initiale'=>'F', 'note'=>5, 'avis'=>'Notre entrepôt de 8 000 m² a été livré en 14 mois, délai respecté à la semaine près. La qualité de construction est excellente et les équipes ont été très professionnelles.'],
              ['nom'=>'Isabelle Rousseau',   'poste'=>'Proviseure – Lycée J. Verne',         'initiale'=>'I', 'note'=>5, 'avis'=>'La rénovation de notre établissement s\'est déroulée sans perturber les cours. VitrineBTP a su s\'adapter à nos contraintes d\'exploitation. Résultat magnifique !'],
            ];
            foreach ($temoins2 as $t):
            ?>
            <div class="col-md-4">
              <div class="testimonial-card">
                <div class="stars">
                  <?= str_repeat('<i class="bi bi-star-fill"></i>', $t['note']) ?>
                </div>
                <p>"<?= $t['avis'] ?>"</p>
                <div class="testimonial-author">
                  <div class="author-avatar"><?= $t['initiale'] ?></div>
                  <div class="author-info">
                    <strong><?= $t['nom'] ?></strong>
                    <span><?= $t['poste'] ?></span>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div><!-- /carousel-inner -->

      <div class="d-flex justify-content-center gap-2 mt-4">
        <button class="carousel-control-prev position-static w-auto" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev"
                style="background:var(--primary);border-radius:50%;width:44px;height:44px;display:flex;align-items:center;justify-content:center;">
          <i class="bi bi-chevron-left text-white"></i>
        </button>
        <button class="carousel-control-next position-static w-auto" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next"
                style="background:var(--primary);border-radius:50%;width:44px;height:44px;display:flex;align-items:center;justify-content:center;">
          <i class="bi bi-chevron-right text-white"></i>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     BLOG (aperçu)
     ============================================================ -->
<section class="section-padding bg-white" aria-label="Actualités BTP">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <p class="text-uppercase fw-bold" style="color:var(--primary-light);letter-spacing:2px;font-size:0.85rem;">Actualités</p>
      <h2 class="section-title">Notre <span>blog</span></h2>
      <div class="section-divider"></div>
      <p class="section-subtitle">Restez informés des dernières tendances et actualités du secteur BTP.</p>
    </div>
    <div class="row g-4">
      <?php
      $articles = [
        ['img'=>'blog1.jpg','unsplash'=>'photo-1416879595882-3373a0480b5b','cat'=>'Innovation','title'=>'Le BIM révolutionne la gestion de projets de construction','resume'=>'La modélisation des données du bâtiment transforme en profondeur les méthodes de travail dans le secteur BTP.','date'=>'10 Juin 2025','auteur'=>'Équipe VitrineBTP'],
        ['img'=>'blog2.jpg','unsplash'=>'photo-1508450859948-4e04fabaa4ea','cat'=>'Réglementation','title'=>'RE2020 : ce qui change pour les constructions neuves en 2025','resume'=>'La réglementation environnementale 2020 impose de nouvelles exigences énergétiques pour toutes les constructions neuves.','date'=>'28 Mai 2025','auteur'=>'Équipe VitrineBTP'],
        ['img'=>'blog3.jpg','unsplash'=>'photo-1541888946425-d81bb19240f5','cat'=>'Conseils','title'=>'Rénovation énergétique : quelles aides financières en 2025 ?','resume'=>'MaPrimeRénov\', CEE, éco-PTZ... Découvrez tous les dispositifs d\'aide pour financer votre rénovation énergétique.','date'=>'15 Mai 2025','auteur'=>'Équipe VitrineBTP'],
      ];
      foreach ($articles as $i => $a):
      ?>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
        <div class="blog-card">
          <div class="blog-card-img">
            <img src="assets/images/<?= $a['img'] ?>"
                 alt="<?= htmlspecialchars($a['title']) ?>"
                 onerror="this.src='https://images.unsplash.com/<?= $a['unsplash'] ?>?w=700&q=80'">
            <span class="blog-card-category"><?= $a['cat'] ?></span>
          </div>
          <div class="blog-card-body">
            <div class="blog-card-meta">
              <span><i class="bi bi-calendar3"></i> <?= $a['date'] ?></span>
              <span><i class="bi bi-person"></i> <?= $a['auteur'] ?></span>
            </div>
            <h5><?= $a['title'] ?></h5>
            <p><?= $a['resume'] ?></p>
            <a href="pages/blog.php" class="blog-read-more">Lire l'article <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="text-center mt-5" data-aos="fade-up">
      <a href="pages/blog.php" class="btn-primary-custom">
        <i class="bi bi-newspaper"></i> Tous les articles
      </a>
    </div>
  </div>
</section>

<!-- ============================================================
     CTA FINAL
     ============================================================ -->
<section class="cta-section text-center" aria-label="Appel à l'action">
  <div class="container" style="position:relative;z-index:1;">
    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-lg-8">
        <i class="bi bi-building-fill" style="font-size:3rem;color:rgba(255,255,255,0.3);display:block;margin-bottom:20px;"></i>
        <h2>Prêt à concrétiser votre projet ?</h2>
        <p class="mt-3">
          Contactez nos experts dès aujourd'hui pour une consultation gratuite et un devis
          personnalisé adapté à vos besoins et votre budget.
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap mt-4">
          <a href="contact.php" class="btn-accent">
            <i class="bi bi-file-earmark-text-fill"></i> Demander un devis gratuit
          </a>
          <a href="tel:+33123456789" class="btn-outline-custom">
            <i class="bi bi-telephone-fill"></i> Appeler maintenant
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
