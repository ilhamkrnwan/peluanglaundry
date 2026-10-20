/**
 * PeluangLaundry Main Script
 * Lightweight Vanilla JavaScript
 */

document.addEventListener('DOMContentLoaded', function () {
  // 1. Mobile Menu Drawer
  var hamburger = document.querySelector('.pl-hamburger');
  var drawer = document.querySelector('.pl-mobile-drawer');
  var closeBtn = document.querySelector('.pl-drawer-close');
  var overlay = document.querySelector('.pl-overlay');

  function openDrawer() {
    if (drawer && overlay) {
      drawer.classList.add('is-active');
      overlay.classList.add('is-active');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeDrawer() {
    if (drawer && overlay) {
      drawer.classList.remove('is-active');
      overlay.classList.remove('is-active');
      document.body.style.overflow = '';
    }
  }

  if (hamburger) hamburger.addEventListener('click', openDrawer);
  if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
  if (overlay) overlay.addEventListener('click', closeDrawer);

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && drawer && drawer.classList.contains('is-active')) {
      closeDrawer();
    }
  });

  // 2. Sticky Header Shadow on Scroll
  var header = document.querySelector('.pl-header');
  if (header) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 20) {
        header.classList.add('is-scrolled');
      } else {
        header.classList.remove('is-scrolled');
      }
    }, { passive: true });
  }

  // 3. Image Lightbox Modal (Pembesar Gambar saat Diklik)
  function initImageModal() {
    var modal = document.getElementById('pl-image-modal');
    if (!modal) {
      modal = document.createElement('div');
      modal.id = 'pl-image-modal';
      modal.className = 'pl-img-modal';
      modal.setAttribute('role', 'dialog');
      modal.setAttribute('aria-modal', 'true');
      modal.setAttribute('aria-hidden', 'true');
      modal.innerHTML = 
        '<div class="pl-img-modal-backdrop"></div>' +
        '<div class="pl-img-modal-dialog">' +
          '<button type="button" class="pl-img-modal-close" aria-label="Tutup gambar">&times;</button>' +
          '<div class="pl-img-modal-content">' +
            '<img src="" alt="" class="pl-img-modal-target">' +
            '<div class="pl-img-modal-caption"></div>' +
          '</div>' +
        '</div>';
      document.body.appendChild(modal);
    }

    var modalImg = modal.querySelector('.pl-img-modal-target');
    var modalCaption = modal.querySelector('.pl-img-modal-caption');
    var closeBtn = modal.querySelector('.pl-img-modal-close');
    var backdrop = modal.querySelector('.pl-img-modal-backdrop');

    function openModal(src, alt) {
      modalImg.src = src;
      modalImg.alt = alt || '';
      if (alt && alt.trim().length > 0) {
        modalCaption.textContent = alt;
        modalCaption.style.display = 'block';
      } else {
        modalCaption.textContent = '';
        modalCaption.style.display = 'none';
      }
      modal.classList.add('is-open');
      modal.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
    }

    function closeModal() {
      modal.classList.remove('is-open');
      modal.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
      setTimeout(function () {
        if (!modal.classList.contains('is-open')) {
          modalImg.src = '';
        }
      }, 250);
    }

    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    if (backdrop) backdrop.addEventListener('click', closeModal);

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && modal.classList.contains('is-open')) {
        closeModal();
      }
    });

    // Delegasi klik pada gambar
    document.addEventListener('click', function (e) {
      var target = e.target;
      if (!target || target.tagName !== 'IMG') return;

      // Abaikan logo, header, footer, icon avatar
      if (target.closest('.pl-header, .pl-footer, .pl-wa-float, .pl-avatar, .pl-logo-area')) {
        return;
      }

      // Pastikan gambar adalah gambar konten, artikel, produk, atau gallery
      var isZoomable = target.classList.contains('pl-zoomable') ||
                       target.hasAttribute('data-zoomable') ||
                       target.closest('.pl-content, .pl-entry-featured-img, .pl-prose, .pl-prod-card-thumb, .pl-landing-container, .pl-proof-card, .pl-catalog-grid, article');

      // Atau jika dibungkus link yang mengarah ke file gambar
      var parentLink = target.closest('a');
      var isImageLink = false;
      var highResUrl = '';

      if (parentLink && /\.(jpe?g|png|webp|gif)($|\?)/i.test(parentLink.href)) {
        isImageLink = true;
        highResUrl = parentLink.href;
      }

      if (isZoomable || isImageLink) {
        if (parentLink) {
          e.preventDefault();
        }

        var src = highResUrl || target.currentSrc || target.src;
        if (!src) return;

        // Ambil caption dari figcaption atau alt
        var figcaption = target.closest('figure') ? target.closest('figure').querySelector('figcaption') : null;
        var altText = figcaption ? figcaption.innerText : (target.alt || target.title || '');

        openModal(src, altText);
      }
    });
  }

  initImageModal();
});

