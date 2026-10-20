# 📋 Master Plan: Pembuatan Custom WordPress Theme  PeluangLaundry

Dokumen ini adalah rencana komprehensif untuk merancang, membangun, dan mengimplementasikan **Custom Theme WordPress** modern, ringan, dan berkecepatan tinggi khusus untuk **peluangusahalaundry.com** (Orchid Brand).

---

## 🎯 1. Visi & Tujuan Proyek

* **Performa Ekstrem (Core Web Vitals A+):** Menghilangkan ketergantungan pada page builder berat (Elementor) dan plugin penambah beban untuk mencapai *PageSpeed Score 95+* dan LCP < 1.2 detik.
* **Desain Modern & Bernilai Konversi Tinggi:** Tampilan segar bernuansa *Green Cleaning & Fresh Laundry* (Orchid Brand), profesional, rapi di semua resolusi layar (mobile-first).
* **Integrasi Mulus dengan Konten Lama:** Mendukung langsung 239 konten yang sudah ada (185 artikel tips laundry & 54 halaman landing/penawaran kemitraan) tanpa merusak URL/SEO yang sudah terindeks Google.
* **Mesin Lead Generation & Penjualan:** Mengoptimalkan funnel pemesanan melalui WhatsApp otomatis, Tokopedia, dan Shopee.

---

## 🏗️ 2. Arsitektur & Spesifikasi Teknis

* **Nama Tema:** peluanglaundry
* **Lokasi Pengembangan:** c:\laragon\www\peluanglaundry\
* **Target Runtime:** PHP 8.0+ / MariaDB 10.x / OpenLiteSpeed / WordPress 6.x
* **Pendekatan Styling:** 
  * Modern Vanilla CSS dengan CSS Custom Properties (Design Tokens).
  * Tanpa framework CSS pihak ketiga yang berat (Zero bloated dependencies).
  * Micro-animations menggunakan hardware-accelerated CSS (	ransform, opacity).
* **Pendekatan Scripting:** Vanilla JavaScript (ES6+), native event delegation, tanpa jQuery dependency di frontend.
* **Integrasi Cache:** Native LiteSpeed Cache tags & ESI kompatibel.

---

## 🎨 3. Design System & Tokens

`css
:root {
  /* Brand Palette (Orchid Brand) */
  --color-primary: #059669;        /* Emerald Green Utama */
  --color-primary-dark: #047857;   /* Hover & Active */
  --color-primary-light: #ecfdf5;  /* Soft Background Tint */
  --color-accent: #10b981;         /* Bright Mint */
  --color-cta-wa: #25d366;         /* WhatsApp Green */
  --color-cta-shopee: #ee4d2d;     /* Shopee Orange */
  --color-cta-toped: #03ac0e;      /* Tokopedia Green */

  /* Neutral & Dark */
  --color-slate-900: #0f172a;      /* Text Utama & Heading */
  --color-slate-700: #334155;      /* Body Copy */
  --color-slate-500: #64748b;      /* Muted / Subtitle */
  --color-slate-200: #e2e8f0;      /* Border & Dividers */
  --color-slate-50: #f8fafc;       /* Surface Background */
  --color-white: #ffffff;

  /* Typography */
  --font-sans: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif;
  --font-heading: Inter, var(--font-sans);

  /* Container */
  --container-max: 1140px;
  --container-narrow: 840px;
}
`

---

## 📑 4. Struktur Template & Modul Tema

Folder tema akan distrukturkan mengikuti standar WordPress Hierarchy:

`	ext
c:/laragon/www/peluanglaundry/wp-content/themes/peluanglaundry/
├── assets/
│   ├── css/
│   │   ├── main.css              # Global layout, reset, & utility
│   │   ├── components.css        # Buttons, cards, badges, navbar
│   │   └── landing.css           # Styling khusus sales funnels
│   ├── js/
│   │   ├── main.js               # Mobile menu, sticky nav, scroll effect
│   │   └── wa-tracker.js         # Tracking klik CTA WhatsApp
│   └── img/
│       └── logo-orchid.png       # Logo default & SVG icons
├── inc/
│   ├── theme-setup.php           # Supports: title-tag, post-thumbnails, menus
│   ├── customizer.php            # Pengaturan nomor WA, link marketplace, logo
│   └── template-tags.php         # Breadcrumbs, reading time, formatted meta
├── template-parts/
│   ├── header/
│   │   └── site-nav.php          # Navbar responsive & search modal
│   ├── footer/
│   │   ├── site-info.php         # Copyright, legal links
│   │   └── floating-wa.php       # Tombol WA melayang interaktif
│   ├── cards/
│   │   ├── post-card.php         # Kartu artikel blog
│   │   └── product-card.php      # Kartu produk / paket kemitraan
│   └── landing/
│       ├── hero-comparison.php   # Komparasi sebelum & sesudah
│       ├── benefits-grid.php     # Grid 10 keunggulan
│       └── order-box.php         # Box order Tokopedia, Shopee & WA
├── page-templates/
│   ├── template-landing-sales.php# Template Landing Page (Fullwidth tanpa gangguan)
│   ├── template-package-bo.php   # Template Paket Kemitraan Laundry
│   └── template-catalog.php      # Halaman Katalog Produk Chemical
├── front-page.php                # Halaman depan modern dinamis
├── single.php                    # Halaman baca artikel dengan sidebar & TOC
├── page.php                      # Halaman statis standar (About, Kontak, dll.)
├── archive.php                   # Halaman arsip artikel & kategori
├── 404.php                       # Halaman error 404 ramah pengguna
├── header.php
├── footer.php
├── functions.php
└── style.css
`

---

## 🚀 5. Roadmap Tahapan Pengerjaan

### Tahap 1: Setup Lingkungan Lokal Laragon
- [x] Buat instalasi WordPress lokal di c:/laragon/www/peluanglaundry/. (WordPress 7.0 + wp-config.php siap)
- [ ] Buat virtual host lokal di Laragon (misal: peluanglaundry.test).
- [x] Download dump database dari live server (database_dump.sql, 255MB) & script import_db.py siap dijalankan

### Tahap 2: Fondasi Tema & Core Functions
- [ ] Buat style.css (header metadata tema WordPress) dan unctions.php.
- [ ] Registrasi menu navigasi (primary dan ooter).
- [x] Enqueue assets/css/main.css & assets/js/main.js
- [x] Buat sistem Theme Customizer (inc/customizer.php) untuk:
  - Nomor WhatsApp Customer Service & Agen.
  - Tautan Tokopedia & Shopee Resmi.
  - Teks promosi banner atas.

### Tahap 3: Implementasi Komponen Global
- [x] **Header Modern:** header.php dengan logo Orchid Brand, navigation bar, dan search form
- [x] **Mobile Navigation:** Native drawer di assets/css/main.css & assets/js/main.js
- [x] **Floating WA Button:** Komponen floating WhatsApp terpasang di footer.php
- [x] **Footer Profesional:** footer.php dengan 4 kolom info, kontak, katalog, dan copyright

### Tahap 4: Halaman Depan & Katalog
- [x] **Front-Page Banner (Hero):** Hero banner terintegrasi di front-page.php
- [x] **Featured Products:** Grid produk unggulan di front-page.php
- [x] **Kemitraan/Paket BO Section:** Section kemitraan di front-page.php
- [x] **Blog/Edukasi Feed:** Grid artikel tips laundry di front-page.php

### Tahap 5: Template Sales Funnel / Landing Page (Pengganti Elementor)
- [x] Bangun template native page-templates/template-landing-sales.php dengan sales funnel & order box
- [ ] Konversi halaman Determat (ID 6608) ke template native ini agar tidak lagi memerlukan editor Elementor.
- [ ] Sediakan template khusus untuk penawaran Kemitraan BO dan Pendaftaran Pelatihan Chemical.

### Tahap 6: Layout Artikel (Single Post) & Kategori
- [x] Single post layout (single.php) dengan TOC & conversion CTA box
- [ ] Box Rekomendasi Produk / Banner Kemitraan di akhir setiap artikel untuk meningkatkan konversi pembaca blog menjadi pembeli.
- [ ] Related articles & share buttons ringan tanpa JavaScript eksternal.

### Tahap 7: Audit Performa, SEO, & Deployment ke VPS
- [ ] Audit Lighthouse (Target: Performance 95+, Accessibility 95+, Best Practices 100, SEO 100).
- [ ] Validasi Open Graph Meta & Twitter Card via Rank Math.
- [ ] Package tema ke dalam file zip atau git, lalu pasang di VPS indotech /home/peluangusahalaundry.com/public_html/wp-content/themes/peluanglaundry/.
- [ ] Switch tema aktif di live production server dan flush LiteSpeed Cache.

---

## 💡 6. Catatan Khusus untuk Developer

1. **Jaga Struktur Permalink:** Struktur permalink jangan diubah agar ~90+ URL yang terindeks Google tidak mengalami 404.
2. **Backward Compatibility:** Pastikan shortcode atau konten lama dari era LandingPress (jika masih tersimpan di database) dapat di-render dengan rapi atau di-strip otomatis.
3. **No Framework Lock-in:** Jangan gunakan builder atau library yang menyuntikkan puluhan file CSS/JS asing. Kode bersih, modular, dan mudah dipelihara.