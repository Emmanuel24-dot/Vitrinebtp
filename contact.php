<?php
/* ============================================================
   VitrineBTP - Page Contact + Traitement formulaire (AJAX)
   ============================================================ */
require_once 'includes/config.php';

/* ----- Traitement AJAX POST ----- */
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_SERVER['HTTP_X_REQUESTED_WITH'])) {
    header('Content-Type: application/json; charset=utf-8');

    /* Récupération & nettoyage des champs */
    $nom     = trim(strip_tags(isset($_POST['nom'])     ? $_POST['nom']     : ''));
    $email   = trim(strip_tags(isset($_POST['email'])   ? $_POST['email']   : ''));
    $tel     = trim(strip_tags(isset($_POST['tel'])     ? $_POST['tel']     : ''));
    $sujet   = trim(strip_tags(isset($_POST['sujet'])   ? $_POST['sujet']   : ''));
    $service = trim(strip_tags(isset($_POST['service']) ? $_POST['service'] : ''));
    $message = trim(strip_tags(isset($_POST['message']) ? $_POST['message'] : ''));

    /* Validation */
    $errors = [];
    if (strlen($nom) < 2)                        $errors[] = 'Nom invalide.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Email invalide.';
    if (strlen($message) < 20)                   $errors[] = 'Message trop court (20 caractères minimum).';

    if ($errors) {
        echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
        exit;
    }

    /* Enregistrement en fichier (log) */
    $logDir  = __DIR__ . '/logs';
    if (!is_dir($logDir)) mkdir($logDir, 0755, true);
    $logLine = date('Y-m-d H:i:s') . " | $nom | $email | $tel | $sujet | $service\n";
    file_put_contents($logDir . '/contacts.log', $logLine, FILE_APPEND | LOCK_EX);

    /* Enregistrement en DB si activé */
    $pdo = getDB();
    if ($pdo) {
        try {
            $stmt = $pdo->prepare(
                'INSERT INTO contacts (nom, email, telephone, sujet, service, message, created_at)
                 VALUES (:nom, :email, :tel, :sujet, :service, :message, NOW())'
            );
            $stmt->execute([
                ':nom'     => $nom,
                ':email'   => $email,
                ':tel'     => $tel,
                ':sujet'   => $sujet,
                ':service' => $service,
                ':message' => $message,
            ]);
        } catch (PDOException $e) { /* silencieux */ }
    }

    /* Envoi email (mail() PHP) */
    $to      = MAIL_TO;
    $subject = "Nouveau contact VitrineBTP : $sujet";
    $body    = "Nom : $nom\nEmail : $email\nTél : $tel\nService : $service\n\nMessage :\n$message";
    $headers = "From: " . MAIL_FROM . "\r\nReply-To: $email\r\nContent-Type: text/plain; charset=utf-8";
    @mail($to, $subject, $body, $headers);

    echo json_encode(['success' => true, 'message' => 'Votre message a bien été envoyé. Nous vous répondons sous 24h. Merci !']);
    exit;
}

/* ----- Page normale ----- */
$pageTitle    = 'Contactez-nous – Devis Gratuit | VitrineBTP';
$pageDesc     = 'Contactez VitrineBTP pour un devis gratuit. Formulaire, téléphone, email, carte interactive. Nous répondons sous 24h.';
$pageKeywords = 'contact VitrineBTP, devis gratuit BTP, téléphone construction, adresse Paris';

require_once 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="En-tête Contact">
  <div class="container">
    <div class="row" data-aos="fade-right">
      <div class="col-lg-8">
        <nav class="breadcrumb-custom mb-3">
          <a href="<?= SITE_URL ?>/index.php">Accueil</a>
          <span class="mx-2 opacity-50">/</span>
          <span>Contact</span>
        </nav>
        <h1>Contactez-<span style="color:var(--accent);">nous</span></h1>
        <p class="mt-3" style="color:rgba(255,255,255,0.8);font-size:1.05rem;max-width:580px;">
          Un projet en tête ? Notre équipe est disponible pour étudier votre demande et vous proposer une offre sur-mesure.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Contact principal -->
<section class="section-padding bg-light-custom" aria-label="Formulaire de contact">
  <div class="container">
    <div class="row g-5">

      <!-- Infos & horaires -->
      <div class="col-lg-4" data-aos="fade-right">
        <div class="contact-info-card">
          <h3 style="font-size:1.3rem;font-weight:800;color:#fff;margin-bottom:28px;">
            <i class="bi bi-info-circle-fill me-2"></i> Nos coordonnées
          </h3>

          <div class="contact-info-item">
            <div class="icon-wrap"><i class="bi bi-geo-alt-fill"></i></div>
            <div>
              <strong>Adresse</strong>
              <span><?= CONTACT_ADDRESS ?></span>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="icon-wrap"><i class="bi bi-telephone-fill"></i></div>
            <div>
              <strong>Téléphone</strong>
              <?php $phoneClean = preg_replace('/\s/', '', CONTACT_PHONE); ?>
              <a href="tel:<?= $phoneClean ?>"><?= CONTACT_PHONE ?></a>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="icon-wrap"><i class="bi bi-envelope-fill"></i></div>
            <div>
              <strong>Email</strong>
              <a href="mailto:<?= CONTACT_EMAIL ?>"><?= CONTACT_EMAIL ?></a>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="icon-wrap"><i class="bi bi-clock-fill"></i></div>
            <div>
              <strong>Horaires</strong>
              <span><?= CONTACT_HOURS ?></span><br>
              <span style="font-size:0.82rem;opacity:0.75;">Samedi 9h – 12h (sur RDV)</span>
            </div>
          </div>

          <!-- Réseaux sociaux -->
          <div class="mt-4">
            <p style="font-size:0.82rem;opacity:0.75;text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;">Suivez-nous</p>
            <div class="social-icons">
              <a href="<?= SOCIAL_FACEBOOK ?>"  class="social-icon" target="_blank" rel="noopener" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
              <a href="<?= SOCIAL_LINKEDIN ?>"  class="social-icon" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
              <a href="<?= SOCIAL_INSTAGRAM ?>" class="social-icon" target="_blank" rel="noopener" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" class="social-icon" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Formulaire -->
      <div class="col-lg-8" data-aos="fade-left" data-aos-delay="100">
        <div class="contact-form-card">
          <h3 style="font-size:1.3rem;font-weight:800;margin-bottom:6px;">Envoyez-nous un message</h3>
          <p style="color:var(--text-muted);font-size:0.88rem;margin-bottom:28px;">Réponse garantie sous 24 heures ouvrées.</p>

          <div id="formAlert" class="alert" style="display:none;" role="alert"></div>

          <form id="contactForm" novalidate>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label" for="nom">Nom complet <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="nom" name="nom"
                       placeholder="Jean Dupont" required minlength="2">
                <div class="invalid-feedback">Veuillez entrer votre nom.</div>
              </div>

              <div class="col-md-6">
                <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" name="email"
                       placeholder="jean@example.com" required>
                <div class="invalid-feedback">Veuillez entrer un email valide.</div>
              </div>

              <div class="col-md-6">
                <label class="form-label" for="tel">Téléphone</label>
                <input type="tel" class="form-control" id="tel" name="tel"
                       placeholder="+33 6 00 00 00 00">
              </div>

              <div class="col-md-6">
                <label class="form-label" for="service">Service concerné</label>
                <select class="form-select" id="service" name="service">
                  <option value="">— Choisir —</option>
                  <option>Construction de bâtiments</option>
                  <option>Génie civil</option>
                  <option>Travaux publics</option>
                  <option>Rénovation</option>
                  <option>Voirie & Réseaux</option>
                  <option>Maçonnerie</option>
                  <option>Charpente & Couverture</option>
                  <option>Études techniques</option>
                  <option>Gestion de projets</option>
                  <option>Maintenance</option>
                  <option>Autre</option>
                </select>
              </div>

              <div class="col-12">
                <label class="form-label" for="sujet">Sujet <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="sujet" name="sujet"
                       placeholder="Ex : Demande de devis pour rénovation" required>
                <div class="invalid-feedback">Veuillez indiquer le sujet.</div>
              </div>

              <div class="col-12">
                <label class="form-label" for="message">Message <span class="text-danger">*</span></label>
                <textarea class="form-control" id="message" name="message" rows="5"
                          placeholder="Décrivez votre projet, votre budget estimé, vos contraintes de délai…"
                          required minlength="20"></textarea>
                <div class="invalid-feedback">Votre message doit comporter au moins 20 caractères.</div>
              </div>

              <div class="col-12">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="rgpd" required>
                  <label class="form-check-label" for="rgpd" style="font-size:0.85rem;color:var(--text-muted);">
                    J'accepte que mes données soient utilisées pour traiter ma demande conformément à la
                    <a href="#" style="color:var(--primary-light);">politique de confidentialité</a>.
                    <span class="text-danger">*</span>
                  </label>
                  <div class="invalid-feedback">Veuillez accepter nos conditions.</div>
                </div>
              </div>

              <div class="col-12">
                <button type="submit" class="btn-primary-custom w-100 justify-content-center">
                  <i class="bi bi-send-fill"></i> Envoyer le message
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Carte Google Maps -->
<section class="bg-white" aria-label="Notre localisation">
  <div class="container-fluid p-0">
    <div data-aos="fade-up">
      <div style="position:relative;">
        <div style="position:absolute;top:30px;left:50%;transform:translateX(-50%);z-index:10;background:#fff;border-radius:14px;padding:14px 24px;box-shadow:0 8px 32px rgba(0,0,0,0.12);text-align:center;white-space:nowrap;">
          <strong style="color:var(--primary);font-size:0.95rem;"><i class="bi bi-geo-alt-fill me-2"></i>Notre siège social</strong><br>
          <span style="font-size:0.82rem;color:var(--text-muted);"><?= CONTACT_ADDRESS ?></span>
        </div>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.0!2d2.3079!3d48.8737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2c5a31a95b%3A0xd65e91a94bb59698!2sParis%2C%20France!5e0!3m2!1sfr!2sfr!4v1234567890"
          width="100%"
          height="450"
          style="border:0;display:block;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Localisation VitrineBTP sur Google Maps"
          aria-label="Carte Google Maps – VitrineBTP Paris 8e"></iframe>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section text-center">
  <div class="container" style="position:relative;z-index:1;">
    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-lg-7">
        <h2>Nous sommes là pour vous</h2>
        <p class="mt-3">Appelez-nous directement pour une réponse immédiate.</p>
        <a href="tel:+33123456789" class="btn-accent mt-3">
          <i class="bi bi-telephone-fill"></i> <?= CONTACT_PHONE ?>
        </a>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
