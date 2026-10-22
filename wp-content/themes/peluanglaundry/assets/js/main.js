/**
 * PeluangLaundry Main Script
 * Lightweight Vanilla JavaScript
 */

document.addEventListener('DOMContentLoaded', function () {
  // 1. Mobile Fullscreen Navigation & Swipe Drilldown System
  var hamburger = document.querySelector('.pl-hamburger');
  var drawer = document.querySelector('.pl-mobile-fullscreen, .pl-mobile-drawer');
  var closeBtns = document.querySelectorAll('.pl-fs-close, .pl-drawer-close');
  var overlay = document.querySelector('.pl-overlay');
  var track = document.getElementById('pl-fs-track');
  var subTitle = document.getElementById('pl-fs-sub-title');
  var subList = document.getElementById('pl-fs-sub-list');
  var backBtn = document.getElementById('pl-fs-back-btn');
  var subPane = document.getElementById('pl-fs-pane-sub');

  function openDrawer() {
    if (drawer) {
      drawer.classList.add('is-active');
      if (overlay) overlay.classList.add('is-active');
      drawer.setAttribute('aria-hidden', 'false');
      if (hamburger) hamburger.setAttribute('aria-expanded', 'true');
      document.body.style.overflow = 'hidden';
      var fsBody = drawer.querySelector('.pl-fs-body');
      if (fsBody) fsBody.scrollTop = 0;
      // Always reset drilldown to main menu pane when opening
      if (track) track.classList.remove('is-sliding-sub');
      if (subPane) subPane.setAttribute('aria-hidden', 'true');
    }
  }

  function closeDrawer() {
    if (drawer) {
      drawer.classList.remove('is-active');
      if (overlay) overlay.classList.remove('is-active');
      drawer.setAttribute('aria-hidden', 'true');
      if (hamburger) {
        hamburger.setAttribute('aria-expanded', 'false');
        hamburger.focus();
      }
      document.body.style.overflow = '';
      // Reset sliding track after drawer fades out
      setTimeout(function () {
        if (track) track.classList.remove('is-sliding-sub');
        if (subPane) subPane.setAttribute('aria-hidden', 'true');
      }, 350);
    }
  }

  function slideBackToMain() {
    if (track) {
      track.classList.remove('is-sliding-sub');
      if (subPane) subPane.setAttribute('aria-hidden', 'true');
    }
  }

  if (hamburger) hamburger.addEventListener('click', openDrawer);
  closeBtns.forEach(function (btn) {
    btn.addEventListener('click', closeDrawer);
  });
  if (overlay) overlay.addEventListener('click', closeDrawer);
  if (backBtn) backBtn.addEventListener('click', slideBackToMain);

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && drawer && drawer.classList.contains('is-active')) {
      // If currently on sub-menu pane, Escape slides back to main menu first
      if (track && track.classList.contains('is-sliding-sub')) {
        slideBackToMain();
      } else {
        closeDrawer();
      }
    }
  });

  // Mobile Drilldown Swipe Navigation
  var parentMenuItems = document.querySelectorAll('.pl-mobile-menu .menu-item-has-children');
  parentMenuItems.forEach(function (item) {
    var parentLink = item.querySelector(':scope > a');
    var subMenu = item.querySelector(':scope > .sub-menu');
    if (parentLink && subMenu) {
      var titleText = parentLink.textContent.trim();
      var childLinks = subMenu.querySelectorAll('li > a');
      var count = childLinks.length;

      // Create a swipeable drilldown trigger button
      var trigger = document.createElement('div');
      trigger.className = 'pl-menu-parent-trigger';
      trigger.setAttribute('role', 'button');
      trigger.setAttribute('tabindex', '0');
      trigger.setAttribute('aria-haspopup', 'true');
      trigger.setAttribute('aria-expanded', 'false');
      trigger.setAttribute('aria-label', 'Buka submenu ' + titleText);
      trigger.innerHTML = 
        '<div class="pl-menu-parent-name">' +
          '<span>' + titleText + '</span>' +
        '</div>' +
        '<div class="pl-menu-parent-badge">' +
          '<span class="pl-child-count">' + count + ' Menu</span>' +
          '<svg class="pl-chevron-right" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>' +
        '</div>';

      parentLink.parentNode.replaceChild(trigger, parentLink);

      function activateSubmenu(e) {
        if (e) {
          e.preventDefault();
          e.stopPropagation();
        }
        if (!track || !subList || !subTitle) return;

        // Set category title in Pane 2
        subTitle.textContent = titleText;

        // Clear and populate child items in Pane 2
        subList.innerHTML = '';
        childLinks.forEach(function (child) {
          var href = child.getAttribute('href') || '#';
          var label = child.textContent.trim();
          var li = document.createElement('li');
          li.className = 'pl-fs-sub-item';
          li.innerHTML = 
            '<a href="' + href + '" class="pl-fs-sub-link">' +
              '<div class="pl-fs-sub-indicator"><span class="pl-fs-sub-dot"></span></div>' +
              '<span class="pl-fs-sub-text">' + label + '</span>' +
              '<svg class="pl-fs-sub-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' +
            '</a>';

          var aTag = li.querySelector('a');
          aTag.addEventListener('click', function () {
            setTimeout(closeDrawer, 180);
          });

          subList.appendChild(li);
        });

        // If parent has a valid page URL, offer a "Lihat Halaman Utama" link
        var originalHref = parentLink.getAttribute('href');
        if (originalHref && originalHref !== '#' && originalHref !== 'javascript:void(0);') {
          var parentLi = document.createElement('li');
          parentLi.className = 'pl-fs-sub-item pl-fs-sub-item-parent';
          parentLi.innerHTML = 
            '<a href="' + originalHref + '" class="pl-fs-sub-link" style="background:#f8fafc;border-style:dashed;">' +
              '<div class="pl-fs-sub-indicator" style="background:#f1f5f9;"><span class="pl-fs-sub-dot" style="background:#64748b;"></span></div>' +
              '<span class="pl-fs-sub-text" style="color:#475569;font-weight:600;">Lihat Halaman Utama ' + titleText + '</span>' +
              '<svg class="pl-fs-sub-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' +
            '</a>';
          var pLink = parentLi.querySelector('a');
          pLink.addEventListener('click', function () {
            setTimeout(closeDrawer, 180);
          });
          subList.appendChild(parentLi);
        }

        // Trigger horizontal swipe!
        track.classList.add('is-sliding-sub');
        if (subPane) subPane.setAttribute('aria-hidden', 'false');
        trigger.setAttribute('aria-expanded', 'true');
        if (backBtn) {
          setTimeout(function () { backBtn.focus(); }, 120);
        }
      }

      trigger.addEventListener('click', activateSubmenu);
      trigger.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          activateSubmenu();
        }
      });
    }
  });

  // Native Touch Swipe-right Gesture on Submenu Pane to return to main menu
  if (subPane) {
    var touchStartX = 0;
    var touchStartY = 0;
    subPane.addEventListener('touchstart', function (e) {
      if (e.changedTouches && e.changedTouches[0]) {
        touchStartX = e.changedTouches[0].screenX;
        touchStartY = e.changedTouches[0].screenY;
      }
    }, { passive: true });

    subPane.addEventListener('touchend', function (e) {
      if (e.changedTouches && e.changedTouches[0]) {
        var touchEndX = e.changedTouches[0].screenX;
        var touchEndY = e.changedTouches[0].screenY;
        var diffX = touchEndX - touchStartX;
        var diffY = touchEndY - touchStartY;
        // If swiped right by more than 55px and not mostly a vertical scroll
        if (diffX > 55 && Math.abs(diffY) < 65) {
          slideBackToMain();
        }
      }
    }, { passive: true });
  }

  // Close fullscreen menu when clicking any direct link
  var allDirectLinks = document.querySelectorAll('.pl-mobile-fullscreen a, .pl-mobile-drawer a');
  allDirectLinks.forEach(function (link) {
    link.addEventListener('click', function () {
      setTimeout(closeDrawer, 180);
    });
  });

  // 2. Sticky Header Shadow — IntersectionObserver sentinel, no scroll listener
  var header = document.querySelector('.pl-header');
  if (header && 'IntersectionObserver' in window) {
    var sentinel = document.createElement('div');
    sentinel.setAttribute('aria-hidden', 'true');
    sentinel.style.cssText = 'position:absolute;top:0;left:0;width:1px;height:32px;pointer-events:none;visibility:hidden;';
    document.body.prepend(sentinel);

    new IntersectionObserver(function (entries) {
      header.classList.toggle('is-scrolled', !entries[0].isIntersecting);
    }, { threshold: 0 }).observe(sentinel);
  } else if (header) {
    header.classList.add('is-scrolled');
  }

  // 3. Reveal on scroll — progressive enhancement, honours reduced motion
  var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var revealItems = document.querySelectorAll('.pl-reveal');
  if (!prefersReduced && 'IntersectionObserver' in window && revealItems.length) {
    document.documentElement.classList.add('pl-motion');
    var revealObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          revealObserver.unobserve(entry.target);
        }
      });
    }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });

    revealItems.forEach(function (item) { revealObserver.observe(item); });
  } else {
    revealItems.forEach(function (item) { item.classList.add('is-visible'); });
  }

  // 3. Image Lightbox Modal (Pembesar Gambar saat Diklik)
  function initImageModal() {
    var blankSrc = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';
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
            '<img src="' + blankSrc + '" alt="" class="pl-img-modal-target">' +
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
          modalImg.src = blankSrc;
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

  // 4. Table of Contents Scrollspy — menyorot item Daftar Isi sesuai posisi scroll
  var tocLinks = document.querySelectorAll('.pl-aside-toc a[data-pl-toc-link]');
  if (tocLinks.length) {
    var tocTargets = [];
    Array.prototype.forEach.call(tocLinks, function (link) {
      var id = link.getAttribute('data-pl-toc-link');
      var target = id ? document.getElementById(id) : null;
      if (target) {
        tocTargets.push({ link: link, target: target });
      }
    });

    if (tocTargets.length) {
      var tocTicking = false;

      function updateActiveToc() {
        tocTicking = false;
        var offset = 140;
        var active = null;

        Array.prototype.forEach.call(tocTargets, function (item) {
          if (item.target.getBoundingClientRect().top - offset <= 0) {
            active = item;
          }
        });

        // Tahan item terakhir saat halaman sudah digulir ke paling bawah
        if ((window.innerHeight + window.scrollY) >= (document.body.offsetHeight - 4)) {
          active = tocTargets[tocTargets.length - 1];
        }

        Array.prototype.forEach.call(tocLinks, function (link) {
          if (link.parentElement) {
            link.parentElement.classList.remove('is-active');
          }
        });

        if (active && active.link.parentElement) {
          active.link.parentElement.classList.add('is-active');
        }
      }

      window.addEventListener('scroll', function () {
        if (!tocTicking) {
          window.requestAnimationFrame(updateActiveToc);
          tocTicking = true;
        }
      }, { passive: true });

      window.addEventListener('resize', updateActiveToc);
      updateActiveToc();
    }
  }

  // 5. Content Carousel Slider — interaktivitas carousel gambar di dalam artikel blog
  function initContentCarousels() {
    var carousels = document.querySelectorAll('.pl-content-carousel[data-carousel="true"]');
    if (!carousels.length) return;

    Array.prototype.forEach.call(carousels, function (carousel) {
      var track = carousel.querySelector('.pl-carousel-track');
      var slides = carousel.querySelectorAll('.pl-carousel-slide');
      var prevBtn = carousel.querySelector('.pl-carousel-prev');
      var nextBtn = carousel.querySelector('.pl-carousel-next');
      var dots = carousel.querySelectorAll('.pl-carousel-dot');
      var counter = carousel.querySelector('.pl-carousel-counter');
      if (!track || !slides.length) return;

      var total = slides.length;
      var currentIndex = 0;

      function updateUI(index) {
        currentIndex = Math.max(0, Math.min(total - 1, index));
        if (counter) {
          counter.textContent = (currentIndex + 1) + ' / ' + total;
        }
        if (prevBtn) {
          prevBtn.disabled = (currentIndex === 0);
        }
        if (nextBtn) {
          nextBtn.disabled = (currentIndex === total - 1);
        }
        Array.prototype.forEach.call(dots, function (dot, i) {
          if (i === currentIndex) {
            dot.classList.add('is-active');
          } else {
            dot.classList.remove('is-active');
          }
        });
      }

      function scrollToSlide(index) {
        if (!slides[index]) return;
        var slideLeft = slides[index].offsetLeft;
        track.scrollTo({ left: slideLeft, behavior: 'smooth' });
        updateUI(index);
      }

      if (prevBtn) {
        prevBtn.addEventListener('click', function () {
          scrollToSlide(currentIndex - 1);
        });
      }

      if (nextBtn) {
        nextBtn.addEventListener('click', function () {
          scrollToSlide(currentIndex + 1);
        });
      }

      Array.prototype.forEach.call(dots, function (dot) {
        dot.addEventListener('click', function () {
          var target = parseInt(dot.getAttribute('data-target-index'), 10);
          if (!isNaN(target)) {
            scrollToSlide(target);
          }
        });
      });

      var scrollTimer = null;
      track.addEventListener('scroll', function () {
        clearTimeout(scrollTimer);
        scrollTimer = setTimeout(function () {
          var scrollLeft = track.scrollLeft;
          var closestIndex = 0;
          var minDiff = Infinity;
          Array.prototype.forEach.call(slides, function (slide, idx) {
            var diff = Math.abs(slide.offsetLeft - scrollLeft);
            if (diff < minDiff) {
              minDiff = diff;
              closestIndex = idx;
            }
          });
          updateUI(closestIndex);
        }, 50);
      }, { passive: true });

      updateUI(0);
    });
  }

  initContentCarousels();
});

