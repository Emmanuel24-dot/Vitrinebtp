/* ============================================================
   VitrineBTP - JavaScript principal
   ============================================================ */

document.addEventListener('DOMContentLoaded', function () {

  /* ----- Preloader ----- */
  var preloader = document.getElementById('preloader');
  if (preloader) {
    var hidePreloader = function() { preloader.classList.add('hidden'); };
    /* Timeout de secours : masque le preloader après 3s maximum */
    var preloaderTimer = setTimeout(hidePreloader, 3000);
    window.addEventListener('load', function() {
      clearTimeout(preloaderTimer);
      setTimeout(hidePreloader, 400);
    });
  }

  /* ----- Navbar scroll ----- */
  const navbar = document.querySelector('.navbar-custom');
  if (navbar) {
    const handleScroll = () => {
      navbar.classList.toggle('scrolled', window.scrollY > 60);
    };
    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();
  }

  /* ----- Active nav link ----- */
  const currentPage = window.location.pathname.split('/').pop() || 'index.php';
  document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
    const href = link.getAttribute('href');
    if (href && (href === currentPage || (currentPage === '' && href === 'index.php'))) {
      link.classList.add('active');
    }
  });

  /* ----- Back to top ----- */
  const backToTop = document.getElementById('backToTop');
  if (backToTop) {
    window.addEventListener('scroll', () => {
      backToTop.classList.toggle('visible', window.scrollY > 400);
    }, { passive: true });
    backToTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ----- Counter animation ----- */
  function animateCounter(el) {
    const target = parseInt(el.dataset.target, 10);
    const suffix = el.dataset.suffix || '';
    const duration = 2000;
    const step = target / (duration / 16);
    let current = 0;
    const timer = setInterval(() => {
      current += step;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      el.textContent = Math.floor(current) + suffix;
    }, 16);
  }

  const counters = document.querySelectorAll('[data-counter]');
  if (counters.length) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !entry.target.dataset.counted) {
          entry.target.dataset.counted = '1';
          animateCounter(entry.target);
        }
      });
    }, { threshold: 0.5 });
    counters.forEach(c => observer.observe(c));
  }

  /* ----- Gallery filter ----- */
  const filterBtns = document.querySelectorAll('.filter-btn');
  const galleryItems = document.querySelectorAll('.gallery-item[data-category]');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', function () {
      filterBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');
      const filter = this.dataset.filter;

      galleryItems.forEach(item => {
        const match = filter === 'all' || item.dataset.category === filter;
        item.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
        if (match) {
          item.style.opacity = '0';
          item.style.transform = 'scale(0.95)';
          item.style.display = '';
          setTimeout(() => {
            item.style.opacity = '1';
            item.style.transform = 'scale(1)';
          }, 50);
        } else {
          item.style.opacity = '0';
          item.style.transform = 'scale(0.9)';
          setTimeout(() => { item.style.display = 'none'; }, 400);
        }
      });
    });
  });

  /* ----- Fade in on scroll ----- */
  const fadeEls = document.querySelectorAll('.fade-in-up');
  if (fadeEls.length) {
    const fadeObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          fadeObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
    fadeEls.forEach(el => fadeObserver.observe(el));
  }

  /* ----- Contact form validation & AJAX ----- */
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      if (!contactForm.checkValidity()) {
        contactForm.classList.add('was-validated');
        return;
      }
      const btn = contactForm.querySelector('[type=submit]');
      const original = btn.innerHTML;
      btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Envoi en cours…';
      btn.disabled = true;

      const formData = new FormData(contactForm);
      fetch('contact.php', { method: 'POST', body: formData })
        .then(r => r.json())
        .then(data => {
          const alert = document.getElementById('formAlert');
          if (data.success) {
            alert.className = 'alert alert-success mt-3';
            alert.textContent = data.message;
            contactForm.reset();
            contactForm.classList.remove('was-validated');
          } else {
            alert.className = 'alert alert-danger mt-3';
            alert.textContent = data.message;
          }
          alert.style.display = 'block';
          setTimeout(() => { alert.style.display = 'none'; }, 6000);
        })
        .catch(() => {
          const alert = document.getElementById('formAlert');
          alert.className = 'alert alert-danger mt-3';
          alert.textContent = 'Une erreur est survenue. Veuillez réessayer.';
          alert.style.display = 'block';
        })
        .finally(() => {
          btn.innerHTML = original;
          btn.disabled = false;
        });
    });
  }

  /* ----- Newsletter form ----- */
  const newsletterForms = document.querySelectorAll('.newsletter-form');
  newsletterForms.forEach(form => {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      const input = form.querySelector('input[type=email]');
      if (input && input.value) {
        input.value = '';
        const msg = form.querySelector('.newsletter-msg');
        if (msg) {
          msg.style.display = 'block';
          setTimeout(() => { msg.style.display = 'none'; }, 4000);
        }
      }
    });
  });

  /* ----- Smooth scrolling pour ancres internes ----- */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        const offset = 80;
        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });

  /* ----- Init AOS si disponible ----- */
  if (typeof AOS !== 'undefined') {
    AOS.init({ duration: 700, easing: 'ease-out-cubic', once: true, offset: 60 });
  }

});
