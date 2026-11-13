<?php
/* ============================================================
   VitrineBTP - Footer global
   ============================================================ */
if (!defined('SITE_NAME')) require_once __DIR__ . '/config.php';
?>

<!-- ===== FOOTER ===== -->
<footer class="footer-main" aria-label="Pied de page">
  <div class="container">
    <div class="row g-5">

      <!-- Colonne 1 : Brand -->
      <div class="col-lg-4 col-md-6">
        <div class="footer-brand">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div style="width:50px;height:50px;background:linear-gradient(135deg,#FF6F00,#FF8F00);border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:1.6rem;color:#fff;">
              <i class="bi bi-building-fill-up"></i>
            </div>
            <div>
              <div class="brand-name">VITRINEBTP</div>
              <div class="brand-tagline">Bâtiment & Travaux Publics</div>
            </div>
          </div>
          <p>Votre partenaire de confiance pour tous vos projets de construction, rénovation et travaux publics. Qualité, rigueur et innovation depuis plus de 20 ans.</p>

          <!-- Réseaux sociaux -->
          <div class="social-icons">
            <a href="<?= SOCIAL_FACEBOOK ?>"  class="social-icon" target="_blank" rel="noopener" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="<?= SOCIAL_LINKEDIN ?>"  class="social-icon" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="<?= SOCIAL_INSTAGRAM ?>" class="social-icon" target="_blank" rel="noopener" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="<?= SOCIAL_YOUTUBE ?>"   class="social-icon" target="_blank" rel="noopener" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
            <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" class="social-icon" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
          </div>
        </div>
      </div>

      <!-- Colonne 2 : Liens rapides -->
      <div class="col-lg-2 col-md-6 col-sm-6">
        <h4 class="footer-heading">Liens rapides</h4>
        <ul class="footer-links">
          <li><a href="<?= SITE_URL ?>/index.php"><i class="bi bi-chevron-right"></i> Accueil</a></li>
          <li><a href="<?= SITE_URL ?>/pages/about.php"><i class="bi bi-chevron-right"></i> À propos</a></li>
          <li><a href="<?= SITE_URL ?>/pages/services.php"><i class="bi bi-chevron-right"></i> Nos services</a></li>
          <li><a href="<?= SITE_URL ?>/pages/projects.php"><i class="bi bi-chevron-right"></i> Réalisations</a></li>
          <li><a href="<?= SITE_URL ?>/pages/blog.php"><i class="bi bi-chevron-right"></i> Blog</a></li>
          <li><a href="<?= SITE_URL ?>/pages/faq.php"><i class="bi bi-chevron-right"></i> FAQ</a></li>
          <li><a href="<?= SITE_URL ?>/contact.php"><i class="bi bi-chevron-right"></i> Contact</a></li>
        </ul>
      </div>

      <!-- Colonne 3 : Services -->
      <div class="col-lg-2 col-md-6 col-sm-6">
        <h4 class="footer-heading">Nos services</h4>
        <ul class="footer-links">
          <li><a href="<?= SITE_URL ?>/pages/services.php#construction"><i class="bi bi-chevron-right"></i> Construction</a></li>
          <li><a href="<?= SITE_URL ?>/pages/services.php#renovation"><i class="bi bi-chevron-right"></i> Rénovation</a></li>
          <li><a href="<?= SITE_URL ?>/pages/services.php#genie-civil"><i class="bi bi-chevron-right"></i> Génie civil</a></li>
          <li><a href="<?= SITE_URL ?>/pages/services.php#voirie"><i class="bi bi-chevron-right"></i> Voirie & Réseaux</a></li>
          <li><a href="<?= SITE_URL ?>/pages/services.php#charpente"><i class="bi bi-chevron-right"></i> Charpente</a></li>
          <li><a href="<?= SITE_URL ?>/pages/services.php#maconnerie"><i class="bi bi-chevron-right"></i> Maçonnerie</a></li>
        </ul>
      </div>

      <!-- Colonne 4 : Contact & Newsletter -->
      <div class="col-lg-4 col-md-6">
        <h4 class="footer-heading">Contact & Horaires</h4>

        <div class="footer-contact-item">
          <i class="bi bi-geo-alt-fill"></i>
          <span><?= CONTACT_ADDRESS ?></span>
        </div>
        <div class="footer-contact-item">
          <i class="bi bi-telephone-fill"></i>
          <a href="tel:<?= preg_replace('/\s/', '', CONTACT_PHONE) ?>" style="color:inherit;"><?= CONTACT_PHONE ?></a>
        </div>
        <div class="footer-contact-item">
          <i class="bi bi-envelope-fill"></i>
          <a href="mailto:<?= CONTACT_EMAIL ?>" style="color:inherit;"><?= CONTACT_EMAIL ?></a>
        </div>
        <div class="footer-contact-item">
          <i class="bi bi-clock-fill"></i>
          <span><?= CONTACT_HOURS ?></span>
        </div>

        <!-- Newsletter -->
        <h5 style="font-size:0.88rem;color:rgba(255,255,255,0.75);text-transform:uppercase;letter-spacing:1px;margin-top:24px;margin-bottom:10px;">Newsletter</h5>
        <form class="newsletter-form d-flex footer-newsletter" novalidate>
          <input type="email" placeholder="Votre adresse email" required aria-label="Email newsletter">
          <button type="submit" aria-label="S'abonner"><i class="bi bi-send-fill"></i></button>
        </form>
        <p class="newsletter-msg mt-2" style="display:none;color:#4CAF50;font-size:0.82rem;">
          <i class="bi bi-check-circle-fill me-1"></i> Merci pour votre inscription !
        </p>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->

  <!-- Bottom bar -->
  <div class="container">
    <div class="footer-bottom">
      <span>&copy; <?= date('Y') ?> <strong>Mawabaemmanuel</strong>. Tous droits réservés.</span>
      <div class="d-flex gap-3 flex-wrap">
        <a href="#">Mentions légales</a>
        <a href="#">Politique de confidentialité</a>
        <a href="#">CGU</a>
        <a href="<?= SITE_URL ?>/pages/sitemap.php">Plan du site</a>
      </div>
    </div>
  </div>
</footer>

<!-- ===== SCRIPTS ===== -->
<!-- Bootstrap 5 JS (local) -->
<script src="<?= SITE_URL ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AOS (local) -->
<script src="<?= SITE_URL ?>/assets/vendor/aos/aos.js"></script>

<!-- Script principal -->
<script src="<?= SITE_URL ?>/assets/js/main.js"></script>
</body>
</html>
