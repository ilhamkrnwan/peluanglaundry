# DESIGN SYSTEM & ATURAN DESAIN (GUIDELINES)
## Proyek: PeluangLaundry.com — PT Indotech Berkah Abadi (Orchid Brand)

Dokumen ini adalah standar resmi desain antarmuka, tata letak, komponen, dan nada komunikasi (tone of voice) untuk website **PeluangLaundry.com**. Seluruh penambahan halaman baru, modifikasi template, penulisan artikel, dan integrasi fitur harus mematuhi panduan ini.

---

## 1. Filosofi & Karakter Desain

1. **Corporate, Trustworthy & Transparent (B2B & B2C Franchise Standard)**:
   - Menghadirkan citra produsen dan mitra bisnis resmi, bukan sekadar penjual e-commerce musiman.
   - Tampilan bersih (*clean*), terstruktur rapi, dengan hierarki visual yang jelas.
2. **Bebas Gimmick Murahan (No Cheap Gimmicks)**:
   - **DILARANG** menggunakan animasi dot berkedip (*pulse dot*), teks berjalan (*marquee*), countdown timer palsu, atau pop-up spam.
   - **TIDAK ADA** kalkulator ROI spekulatif yang menjanjikan keuntungan fiktif; ganti dengan rincian spesifikasi paket, perhitungan riil HPP deterjen (1 kg konsentrat jadi 20 liter), dan transparansi modal.
3. **Fotografi Komersial Otentik**:
   - Utamakan visual mesin komersial riil, interior outlet mitra yang rapi, fasilitas laboratorium chemical Orchid, dan depo isi ulang sabun.
   - Gambar didukung fitur modal perbesar (*lightbox modal*) interaktif.

---

## 2. Palet Warna & Token CSS (`:root`)

Semua warna didefinisikan sebagai CSS Custom Properties di `assets/css/main.css`:

| Token CSS | Hex / Value | Penggunaan Utama |
|---|---|---|
| `--primary` | `#059669` (Emerald 600) | Brand utama: Tombol primer, highlight gradient, icon utama |
| `--primary-hover` | `#047857` (Emerald 700) | State hover tombol primer |
| `--primary-ink` | `#047857` (Emerald 700) | Teks aksen, link, dan label di atas permukaan terang (kontras aman) |
| `--on-brand` | `#04180f` | Teks di atas tombol WhatsApp/Tokopedia/Shopee yang berwarna terang |
| `--primary-dark` | `#064e3b` (Emerald 800) | Teks penekanan di atas badge hijau muda |
| `--primary-light` | `#ecfdf5` (Emerald 50) | Background badge, hero gradient tint, callout box |
| `--primary-border`| `#a7f3d0` (Emerald 200)| Border badge primer dan card highlight |
| `--dark` / `--ink` | `#0f172a` / `#0c1f17` | Heading utama (H1, H2, H3), teks harga besar |
| `--slate-700` / `--body` | `#334155` / `#40544a` | Teks paragraf tebal, label form |
| `--slate-600` | `#475569` (Slate 600) | Teks paragraf utama (body text) |
| `--muted` | `#5f7267` | Caption, tanggal, breadcrumb, subtitle (tetap ≥4.5:1) |
| `--slate-200` / `--line` | `#e2e8f0` / `#e3ebe6` | Border kartu, garis pemisah horizontal, form border |
| `--slate-100` / `--surface-tint` | `#f1f5f9` / `#eff7f1` | Background section selang-seling, badge netral |
| `--surface-warm` | `#f6faf7` | Background halaman dasar (hijau netral hangat) |
| `--white` | `#ffffff` | Background kartu, container, modal |
| `--radius-card` / `--radius-media` | `16px` | Radius kartu dan semua slot foto |
| `--radius-control` | `10px` | Radius tombol, input, dan kontrol kecil |

### Variasi Warna Status / Semantik (Badges & Alerts):
- **Warning / Rekomendasi (Amber)**: Background `#fef3c7`, Teks `#92400e`, Border `#fde68a`.
- **Info / Panduan (Sky Blue)**: Background `#e0f2fe`, Teks `#0369a1`, Border `#bae6fd`.
- **Promo / Perhatian (Coral Red)**: Background `#fee2e2`, Teks `#b91c1c`, Border `#fecaca`.

### Aturan Ketat Badge & Breadcrumbs:
1. **Dilarang Menggunakan Ikon / Emoji pada Badge**:
   - Seluruh elemen badge, chip, dan hero/section pill (seperti `.pl-hero-pill`, `.pl-section-pill`, `.pl-cta-pill`, `.pl-badge`) **WAJIB murni teks**.
   - **DILARANG KERAS** menggunakan icon, terlebih icon sistem/emoji OS (seperti 💼, 🌸, 🏢, ✨, 🔥, 🌿, 🧪, 🔍, 📚, dll.) di dalam badge.
2. **Breadcrumbs Ringkas & Rapi**:
   - Breadcrumb tidak boleh menampilkan judul SEO yang panjang dan bertumpuk (contoh: "Paket Usaha Laundry Kiloan Murah – Franchise Laundry Terbaik").
   - Breadcrumb wajib disaring dan diringkas ke nama pokok halaman (contoh: "Home / Paket Usaha", "Home / Pewangi Laundry") maksimal 2–3 kata agar tidak mendominasi atau merusak tampilan header.

---

## 3. Tipografi & Skala Hirarki

- **Font Family**: Plus Jakarta Sans (Google Fonts), didukung fallback System UI:
  ```css
  font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
  ```

| Elemen | Ukuran (Desktop) | Weight | Line Height | Keterangan |
|---|---|---|---|---|
| **H1 (Hero Title)** | `clamp(2.3rem, 3.5vw, 3.1rem)` | `800` (Extra Bold) | `1.04` | Maksimal 1 per halaman, letter-spacing `-0.038em` |
| **H2 (Section Title)** | `2.0rem` - `2.25rem` | `800` (Extra Bold) | `1.30` | Judul setiap babak konten |
| **H3 (Card / Subtitle)** | `1.25rem` - `1.5rem` | `700` (Bold) | `1.35` | Judul kartu paket, grup produk |
| **H4 (Item Title)** | `1.10rem` - `1.20rem` | `700` (Bold) | `1.40` | Judul fitur, FAQ question |
| **Body (Paragraf)** | `1.0rem` (`16px`) | `400` / `500` | `1.65` | Warna `--slate-600`, mudah dibaca |
| **Lead Paragraph** | `1.125rem` (`18px`) | `400` / `500` | `1.60` | Paragraf pembuka di bawah hero |
| **Badges / Pill Tags**| `11.5px` (`0.72rem`) | `700` (Bold) | `1.20` | Uppercase, tracking `0.04em` |
| **Small / Meta** | `0.875rem` (`14px`) | `400` / `500` | `1.50` | Catatan kaki, disclaimer |

> **Catatan font:** Plus Jakarta Sans dipertahankan sebagai identitas visual incumbent (bukan pilihan default baru). Detector Impeccable menandainya `overused-font`; ini pengecualian yang disengaja sampai ada keputusan rebrand dari pemilik brand.

---

## 4. Aturan Komponen Terpusat

### 4.1. Badge & Pill (`.pl-badge`)
- **Tujuan**: Menampilkan status kategori, label keunggulan, tipe paket, atau legalitas perusahaan.
- **Standar**:
  - `display: inline-flex; align-items: center; gap: 6px;`
  - `border-radius: 9999px;` (Pill shape)
  - `border: 1px solid <warna_border_semantik>;`
  - Didukung SVG icon 14px di sebelah kiri teks.
- **Aturan Responsive**:
  - Badge pendek (e.g. `BEST SELLER`, `KONSENTRAT 1:20`, `BEBAS ROYALTI`): Wajib `white-space: nowrap !important;`.
  - Hero badge panjang (identitas PT / slogan): Pada layar mobile (`<= 640px`) diizinkan *wrap* secara natural (`white-space: normal !important; text-align: center;`).
- **Larangan**: DILARANG menambahkan dot berkedip (*pulse dot*) atau efek kedip lainnya.

### 4.2. Tombol (*Buttons*)
- **Tombol Primer (`.pl-btn-primary`)**:
  - Background: Gradient halus Emerald (`#059669` ke `#047857`).
  - Teks putih, font-weight 600, radius 8px (`--radius-md`).
  - Hover: Sedikit mengangkat (`transform: translateY(-1px)`), bayangan lembut.
- **Tombol Sekunder / Garis (`.pl-btn-outline`)**:
  - Background putih, border `1px solid var(--slate-200)`.
  - Teks `--dark`, hover background `--slate-100`.
- **Tombol WhatsApp (`.pl-btn-wa` & `.pl-wa-float`)**:
  - Warna resmi WhatsApp `#25D366`, icon SVG WA resmi.
  - Tautan selalu menyertakan pesan otomatis relevan (*prefilled contextual message*):
    ```php
    peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya tertarik dengan Paket Usaha Laundry...');
    ```

### 4.3. Kartu (*Cards & Grids*)
- **Container**: Max width `1200px`, padding samping `20px` (responsif).
- **Grid Layout**: Gunakan CSS Grid modern:
  ```css
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 24px;
  ```
- **Spesifikasi Kartu**:
  - Background: `#ffffff`.
  - Border: `1px solid var(--line)`.
  - Radius: `16px` (`--radius-card`); kontrol kecil memakai `10px` (`--radius-control`).
  - Elevation: pilih satu — border tipis **atau** `--shadow-md`, jangan keduanya pada kartu yang sama.
  - Hover Effect: `transform: translateY(-4px); box-shadow: 0 12px 24px -4px rgba(0, 0, 0, 0.08); transition: all 0.25s ease;`.
  - Padding dalam: `24px` hingga `32px`.

### 4.4. Gambar & Lightbox Modal
- Semua gambar dokumentasi komersial wajib menggunakan class `.pl-zoomable`.
- Saat diklik pengguna, lightbox modal vanilla JS di `header.php` / `main.js` otomatis membuka popup gambar resolusi penuh dengan backdrop gelap (`rgba(0, 0, 0, 0.85)`).
- Menutup modal dapat dilakukan via:
  1. Klik tombol Close (`&times;`) di pojok kanan atas.
  2. Klik sembarang area di luar gambar.
  3. Menekan tombol `Escape` pada keyboard.

### 4.5. Slot Foto (Image Slots)
Semua foto di theme didaftarkan di `inc/image-slots.php` dan dirender lewat helper, bukan tag `<img>` hardcoded. Pemilik situs mengganti foto dari **Tampilan → Sesuaikan → Slot Foto** tanpa mengedit kode.

**Cara kerja**
- Registry: `peluanglaundry_image_slots_registry()` — satu entri per slot, berisi label, file default, alt, rasio, ukuran, `object-position`, dan catatan editor.
- Render: `peluanglaundry_image_slot('home_hero_main', array('eager' => true));`
- Override tersimpan sebagai theme mod `peluanglaundry_img_{key}` (contoh: `peluanglaundry_img_home_hero_main`).
- Default memakai file di `assets/img/`. Jika foto diunggah ke Media Library, WordPress otomatis menyajikan `srcset` yang responsif.
- Rasio dikunci oleh wrapper `.pl-media` (`aspect-ratio`), jadi foto pengganti tidak akan merusak layout. Gunakan `position` pada registry untuk mengatur crop.
- Alt text berasal dari registry. Untuk gambar dekoratif murni, kirim `array('decorative' => true)`.

**Menambah slot baru**
1. Tambahkan entri ke registry dengan key stabil dan `section` yang sesuai (`home`, `about`, `catalog`, `partner`).
2. Panggil `peluanglaundry_image_slot('key_baru')` di template.
3. Jangan mengganti nama key yang sudah dipakai — theme mod lama akan hilang.

**Daftar slot**

*Beranda (19 slot)*

| Key | Penempatan | Ukuran disarankan | Rasio |
|---|---|---|---|
| `home_hero_main` | Foto hero utama | 1200 × 900 | 4:3 |
| `home_hero_inset` | Kartu kecil di hero (lab) | 800 × 800 | 1:1 |
| `home_about_main` | Sekilas perusahaan | 1200 × 900 | 4:3 |
| `home_about_inset` | Foto pendukung sekilas | 800 × 800 | 1:1 |
| `home_advantage` | Samping daftar keunggulan | 1000 × 1250 | 4:5 |
| `home_spotlight` | Sorotan produk DETERMAT | 1000 × 750 | 4:3 |
| `home_product_determat` | Kartu produk DETERMAT | 800 × 600 | 4:3 |
| `home_product_parfum` | Kartu produk parfum | 800 × 600 | 4:3 |
| `home_product_softener` | Kartu produk softener | 800 × 600 | 4:3 |
| `home_product_oxy` | Kartu produk Oxy Bleach | 800 × 600 | 4:3 |
| `home_product_dish` | Kartu sabun cuci piring | 800 × 600 | 4:3 |
| `home_product_alkali` | Kartu alkali/emulsifier | 800 × 600 | 4:3 |
| `home_package_starter` | Paket Mandiri | 1000 × 625 | 16:10 |
| `home_package_complete` | Paket Komplit Komersial | 1000 × 625 | 16:10 |
| `home_package_agent` | Paket Master Agen & Depo | 1000 × 625 | 16:10 |
| `home_roi` | Panel simulasi biaya | 900 × 1125 | 4:5 |
| `home_testimonial` | Blok testimoni mitra | 900 × 1125 | 4:5 |
| `home_faq` | Pendamping FAQ | 900 × 675 | 4:3 |
| `home_cta_bg` | Latar CTA penutup | 1600 × 700 | 16:7 |

*Tentang Kami (4 slot)*

| Key | Penempatan | Ukuran disarankan | Rasio |
|---|---|---|---|
| `about_hero` | Foto hero halaman | 1600 × 900 | 16:9 |
| `about_facility_lab` | Strip fasilitas — laboratorium | 1200 × 900 | 4:3 |
| `about_facility_showroom` | Strip fasilitas — showroom | 1200 × 900 | 4:3 |
| `about_facility_outlet` | Strip fasilitas — outlet pelatihan | 1200 × 900 | 4:3 |

*Katalog Produk (8 slot)*

| Key | Penempatan | Ukuran disarankan | Rasio |
|---|---|---|---|
| `catalog_product_determat_matic` | DETERMAT Matic | 800 × 600 | 4:3 |
| `catalog_product_determat_extra` | DETERMAT Extra Busa | 800 × 600 | 4:3 |
| `catalog_product_parfum` | Bibit Parfum | 800 × 600 | 4:3 |
| `catalog_product_softener` | Softener | 800 × 600 | 4:3 |
| `catalog_product_setrika` | Pelicin Setrika | 800 × 600 | 4:3 |
| `catalog_product_oxy` | Oxy Bleach | 800 × 600 | 4:3 |
| `catalog_product_rust` | Rust Remover | 800 × 600 | 4:3 |
| `catalog_product_alkali` | Alkali Booster | 800 × 600 | 4:3 |

*Kemitraan & Depo Chemical (8 slot)*

| Key | Penempatan | Ukuran disarankan | Rasio |
|---|---|---|---|
| `partner_outlet` | Outlet mitra | 1200 × 900 | 4:3 |
| `partner_depo` | Depo sabun | 1200 × 900 | 4:3 |
| `partner_machine` | Instalasi mesin | 1200 × 900 | 4:3 |
| `partner_lab` | Laboratorium | 1200 × 900 | 4:3 |
| `chemical_determat` | Produk DETERMAT | 1000 × 750 | 4:3 |
| `chemical_parfum` | Parfum laundry | 1000 × 750 | 4:3 |
| `chemical_softener` | Softener | 1000 × 750 | 4:3 |
| `chemical_spotting` | Spotting agent | 1000 × 750 | 4:3 |

---

## 5. Arsitektur Navigasi & Struktur Multi-Page

Navigasi utama dibatasi maksimal **6 item utama** untuk menjaga keterbacaan (*scannability*):

```text
[Header / Navbar]
├── 1. Home (/)
├── 2. Tentang Kami (/about-us/)
├── 3. Paket Usaha (/paket-usaha-laundry-kiloan-murah/)
├── 4. Depo Sabun (/depo-isi-ulang-sabaun/) [Dropdown]
│   ├── DETERMAT & Konsentrat (/determat/)
│   └── Bibit Parfum Laundry (/pewangi-laundry-tahan-lama-murah/)
├── 5. Keagenan & Pelatihan (/agen-resmi-orchid-brand/) [Dropdown]
│   ├── Agen Resmi Orchid Brand (/agen-resmi-orchid-brand/)
│   ├── Reseller Curah (Merek Sendiri) (/reseller/)
│   ├── Training Pembuatan Chemical (/pelatihan-pembuatan-chemical/)
│   └── SOP & Manajemen Laundry (/pelatihan-manajemen-operasional-laundry/)
└── 6. Kontak (/contact-us/)
[Action Button CTA]: "Konsultasi WhatsApp" (Tombol Kontak Cepat)
```

---

## 6. Standar Konten & Copywriting

1. **Jaminan 100% Bebas Royalti**:
   - Selalu tekankan bahwa mitra memiliki 100% hasil omset usaha mereka tanpa potongan persentase bulanan atau biaya franchise berkala (*zero royalty fee*).
2. **Keunggulan Formulasi Kimia**:
   - Tampilkan fakta komparasi teknis: **1 kg deterjen konsentrat diolah menjadi 20 liter sabun cair siap pakai**, menghemat ongkos kirim antarpulau hingga 80-90%.
3. **Legalitas & Kepercayaan**:
   - Tampilkan identitas PT Indotech Berkah Abadi, legalitas izin edar Kemenkes RI / standar laboratorium Orchid Brand, dan alamat kantor operasional nyata di Sleman, Yogyakarta.

---

## 7. Responsivitas & Breakpoints

- **Mobile Small (< 480px)**: 1 kolom, font judul hero `1.85rem` - `2.0rem`, padding kartu `18px`, tombol *full-width*.
- **Mobile Medium / Phablet (481px - 640px)**: 1 kolom, hero badge teks wrap rapi.
- **Tablet (641px - 991px)**: 2 kolom grid, menu navigasi beralih ke mobile drawer toggle.
- **Desktop (992px - 1199px)**: 3-4 kolom grid, menu horizontal dengan dropdown hover lembut.
- **Large Desktop (>= 1200px)**: Max container `1200px`, padding 20px, tata letak seimbang.
