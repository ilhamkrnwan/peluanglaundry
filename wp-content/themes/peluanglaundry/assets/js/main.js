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
});
