<?php
/* ============================================================
   VitrineBTP - Page FAQ
   ============================================================ */
require_once '../includes/config.php';

$pageTitle    = 'FAQ – Questions fréquentes BTP | VitrineBTP';
$pageDesc     = 'Toutes les réponses à vos questions sur nos services de construction, rénovation et travaux publics. Devis, délais, garanties, financement.';
$pageKeywords = 'FAQ BTP, questions fréquentes construction, garantie décennale, devis travaux, financement rénovation';

require_once '../includes/header.php';

$faqs = [
  [
    'cat'      => 'Devis & Tarifs',
    'questions'=> [
      ['q'=>'Comment obtenir un devis ?',
       'r'=>'Vous pouvez obtenir un devis gratuit en nous contactant via notre formulaire en ligne, par téléphone ou en nous rendant visite dans nos bureaux. Un de nos chargés d\'affaires se déplace sur votre chantier pour établir une étude personnalisée sous 48 heures.'],
      ['q'=>'Vos devis sont-ils gratuits ?',
       'r'=>'Oui, tous nos devis sont 100% gratuits et sans engagement. Nous nous déplaçons sur site pour évaluer précisément vos besoins et vous fournir une offre détaillée et transparente.'],
      ['q'=>'Quels sont vos délais de remise de devis ?',
       'r'=>'Nous nous engageons à vous remettre votre devis sous 48 à 72 heures après la visite de chantier pour les projets standards. Pour les projets complexes nécessitant une étude approfondie, le délai peut aller jusqu\'à 5 jours ouvrés.'],
      ['q'=>'Quels modes de paiement acceptez-vous ?',
       'r'=>'Nous acceptons les virements bancaires, chèques et prélèvements automatiques. Pour les projets importants, un échéancier de paiement adapté à l\'avancement des travaux est mis en place : acompte à la commande, situations de travaux mensuelles, solde à la réception.'],
    ],
  ],
  [
    'cat'      => 'Délais & Planning',
    'questions'=> [
      ['q'=>'Quels sont vos délais d\'intervention ?',
       'r'=>'Les délais varient selon la nature du projet. Pour des travaux de rénovation mineurs, nous pouvons intervenir sous 2 à 4 semaines. Pour des constructions neuves, le délai de démarrage est généralement de 4 à 8 semaines après signature du contrat, selon notre planning.'],
      ['q'=>'Comment gérez-vous les imprévus de chantier ?',
       'r'=>'Chaque projet est suivi par un conducteur de travaux dédié qui anticipe et gère les imprévus. En cas de problème, vous êtes immédiatement informé et une solution est proposée dans les 24 heures. Nous nous engageons contractuellement sur nos délais.'],
      ['q'=>'Travaillez-vous aussi le week-end ?',
       'r'=>'Nos équipes travaillent du lundi au vendredi, de 7h30 à 17h30. Des interventions le samedi peuvent être organisées sur demande et en accord avec le voisinage. Nous disposons également d\'un service d\'astreinte pour les urgences 7j/7.'],
    ],
  ],
  [
    'cat'      => 'Garanties & Assurances',
    'questions'=> [
      ['q'=>'Êtes-vous couverts par une garantie décennale ?',
       'r'=>'Oui, VitrineBTP dispose d\'une assurance responsabilité civile décennale (RC Décennale) couvrant tous nos travaux de construction pour une durée de 10 ans après réception. Nous pouvons vous fournir l\'attestation d\'assurance avant le démarrage du chantier.'],
      ['q'=>'Quelles garanties proposez-vous sur vos travaux ?',
       'r'=>'Nous offrons plusieurs garanties : la garantie de parfait achèvement (1 an), la garantie biennale pour les équipements (2 ans), et la garantie décennale pour la structure (10 ans). Des garanties fabricants s\'appliquent également aux matériaux et équipements installés.'],
      ['q'=>'Êtes-vous certifiés Qualibat et RGE ?',
       'r'=>'Oui, VitrineBTP est certifiée Qualibat pour de multiples catégories de travaux, et détient le label RGE (Reconnu Garant de l\'Environnement) pour les travaux de rénovation énergétique. Ces certifications attestent de la qualité de nos travaux et permettent à nos clients de bénéficier des aides de l\'État.'],
    ],
  ],
  [
    'cat'      => 'Financement & Aides',
    'questions'=> [
      ['q'=>'Pouvez-vous m\'aider à obtenir des aides à la rénovation ?',
       'r'=>'Absolument ! Grâce à notre label RGE, vos travaux de rénovation énergétique sont éligibles à MaPrimeRénov\', aux Certificats d\'Économies d\'Énergie (CEE), à l\'éco-PTZ et à la TVA à taux réduit de 5,5%. Notre équipe commerciale vous accompagne dans toutes les démarches administratives.'],
      ['q'=>'Proposez-vous des solutions de financement ?',
       'r'=>'Nous travaillons avec plusieurs partenaires financiers pour vous proposer des solutions adaptées : crédit travaux, éco-PTZ, financement participatif. Nos conseillers peuvent vous orienter vers les offres les plus avantageuses selon votre situation.'],
      ['q'=>'La TVA est-elle réduite pour les travaux de rénovation ?',
       'r'=>'Oui, sous certaines conditions. La TVA est à 5,5% pour les travaux d\'amélioration de la performance énergétique et à 10% pour les travaux de rénovation générale sur des logements de plus de 2 ans. Nous établissons vos factures avec le taux de TVA approprié.'],
    ],
  ],
  [
    'cat'      => 'Organisation de chantier',
    'questions'=> [
      ['q'=>'Comment se passe le suivi de mon chantier ?',
       'r'=>'Chaque client dispose d\'un accès à notre plateforme digitale de suivi de chantier. Vous consultez l\'avancement en temps réel, les photos, le planning et les comptes-rendus de réunion. Un conducteur de travaux vous contacte chaque semaine pour un point d\'avancement.'],
      ['q'=>'Gérez-vous la coordination avec les autres corps d\'état ?',
       'r'=>'Oui, si vous nous confiez la maîtrise d\'œuvre de votre projet, nous coordonnons l\'ensemble des intervenants : électriciens, plombiers, menuisiers, peintres... Vous n\'avez qu\'un seul interlocuteur pour toute la durée du chantier.'],
      ['q'=>'Que se passe-t-il à la réception des travaux ?',
       'r'=>'À la fin du chantier, nous organisons une réception contradictoire en votre présence. Vous pouvez émettre des réserves, que nous levons dans les délais convenus. Nous vous remettons le Dossier des Ouvrages Exécutés (DOE) complet : plans, notices, garanties et attestations.'],
    ],
  ],
];
?>

<!-- Page Hero -->
<section class="page-hero bg-light-alt" aria-label="En-tête FAQ">
  <div class="container">
    <div class="row" data-aos="fade-right">
      <div class="col-lg-8">
        <nav class="breadcrumb-custom mb-3">
          <a href="<?= SITE_URL ?>/index.php">Accueil</a>
          <span class="mx-2 opacity-50">/</span>
          <span>FAQ</span>
        </nav>
        <h1>Questions <span style="color:var(--accent);">Fréquentes</span></h1>
        <p class="mt-3" style="color:rgba(255,255,255,0.8);font-size:1.05rem;max-width:580px;">
          Toutes les réponses à vos questions sur nos services, garanties et processus.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Accordéon -->
<section class="section-padding faq-section" aria-label="Questions fréquentes">
  <div class="container">

    <div class="row justify-content-center mb-5" data-aos="fade-up">
      <div class="col-lg-6 text-center">
        <h2 class="section-title">Nous répondons à <span>toutes vos questions</span></h2>
        <div class="section-divider"></div>
        <p class="section-subtitle">Si vous ne trouvez pas la réponse à votre question, n'hésitez pas à nous contacter directement.</p>
      </div>
    </div>

    <div class="row g-5">
      <div class="col-lg-8">
        <?php foreach ($faqs as $ci => $cat): ?>
        <div class="mb-4" data-aos="fade-up" data-aos-delay="<?= $ci * 50 ?>">
          <h4 style="font-size:1.1rem;font-weight:800;color:var(--primary);margin-bottom:16px;display:flex;align-items:center;gap:10px;">
            <span style="width:32px;height:32px;background:var(--primary);border-radius:8px;display:inline-flex;align-items:center;justify-content:center;color:#fff;font-size:0.85rem;"><?= $ci + 1 ?></span>
            <?= $cat['cat'] ?>
          </h4>
          <div class="accordion faq-accordion" id="faqCat<?= $ci ?>">
            <?php foreach ($cat['questions'] as $qi => $faq):
              $id = "faq-{$ci}-{$qi}";
            ?>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-<?= $id ?>">
                <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse-<?= $id ?>"
                        aria-expanded="false"
                        aria-controls="collapse-<?= $id ?>">
                  <?= htmlspecialchars($faq['q']) ?>
                </button>
              </h2>
              <div id="collapse-<?= $id ?>"
                   class="accordion-collapse collapse"
                   aria-labelledby="heading-<?= $id ?>"
                   data-bs-parent="#faqCat<?= $ci ?>">
                <div class="accordion-body">
                  <?= htmlspecialchars($faq['r']) ?>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <!-- Sidebar contact -->
      <div class="col-lg-4">
        <div style="position:sticky;top:100px;">
          <div class="p-4 rounded-4 text-white mb-4" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));" data-aos="fade-left">
            <i class="bi bi-chat-dots-fill" style="font-size:2rem;opacity:0.6;display:block;margin-bottom:16px;"></i>
            <h5 style="font-weight:800;margin-bottom:12px;">Vous n'avez pas trouvé votre réponse ?</h5>
            <p style="font-size:0.9rem;opacity:0.85;margin-bottom:20px;">Notre équipe est disponible pour répondre à toutes vos questions personnalisées.</p>
            <a href="<?= SITE_URL ?>/contact.php" class="btn-accent d-block text-center" style="font-size:0.9rem;">
              <i class="bi bi-envelope-fill"></i> Nous contacter
            </a>
            <a href="tel:+33123456789" class="btn-outline-custom d-block text-center mt-2" style="font-size:0.9rem;">
              <i class="bi bi-telephone-fill"></i> <?= CONTACT_PHONE ?>
            </a>
          </div>

          <div class="p-4 rounded-4 bg-white shadow-sm" data-aos="fade-left" data-aos-delay="100">
            <h5 style="font-weight:800;margin-bottom:16px;font-size:1rem;">Horaires d'ouverture</h5>
            <?php
            $horaires = [
              ['Lundi – Vendredi','8h00 – 18h00',true],
              ['Samedi','9h00 – 12h00 (sur RDV)',false],
              ['Dimanche','Fermé (urgences uniquement)',false],
            ];
            foreach ($horaires as $h):
            ?>
            <div class="d-flex justify-content-between align-items-center py-2 border-bottom" style="font-size:0.88rem;">
              <span style="color:var(--text-muted);"><?= $h[0] ?></span>
              <span style="font-weight:<?= $h[2]?'700':'500' ?>;color:<?= $h[2]?'var(--primary)':'var(--text-muted)' ?>;">
                <?= $h[1] ?>
              </span>
            </div>
            <?php endforeach; ?>
            <div class="mt-3 d-flex align-items-center gap-2" style="font-size:0.82rem;color:var(--primary);">
              <i class="bi bi-telephone-fill"></i>
              <span>Urgences 24h/24 : <strong><?= CONTACT_PHONE ?></strong></span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="cta-section text-center">
  <div class="container" style="position:relative;z-index:1;">
    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-lg-7">
        <h2>Prêt à démarrer votre projet ?</h2>
        <p class="mt-3">Obtenez votre devis gratuit en moins de 48 heures.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap mt-4">
          <a href="<?= SITE_URL ?>/contact.php" class="btn-accent"><i class="bi bi-file-earmark-text-fill"></i> Devis gratuit</a>
          <a href="tel:+33123456789" class="btn-outline-custom"><i class="bi bi-telephone-fill"></i> Appeler</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
