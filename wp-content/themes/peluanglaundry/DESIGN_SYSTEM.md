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
| `--primary-dark` | `#065f46` (Emerald 800) | Teks penekanan di atas badge hijau muda |
| `--primary-light` | `#ecfdf5` (Emerald 50) | Background badge, hero gradient tint, callout box |
| `--primary-border`| `#a7f3d0` (Emerald 200)| Border badge primer dan card highlight |
| `--dark` | `#0f172a` (Slate 900) | Heading utama (H1, H2, H3), teks harga besar |
| `--slate-700` | `#334155` (Slate 700) | Teks paragraf tebal, label form |
| `--slate-600` | `#475569` (Slate 600) | Teks paragraf utama (body text) |
| `--slate-500` | `#64748b` (Slate 500) | Teks caption, tanggal, breadcrumb, subtitle |
| `--slate-200` | `#e2e8f0` (Slate 200) | Border kartu, garis pemisah horizontal, form border |
| `--slate-100` | `#f1f5f9` (Slate 100) | Background section selang-seling, badge netral |
| `--light` | `#f8fafc` (Slate 50) | Background halaman dasar |
| `--white` | `#ffffff` | Background kartu, container, modal |

### Variasi Warna Status / Semantik (Badges & Alerts):
- **Warning / Rekomendasi (Amber)**: Background `#fef3c7`, Teks `#92400e`, Border `#fde68a`.
- **Info / Panduan (Sky Blue)**: Background `#e0f2fe`, Teks `#0369a1`, Border `#bae6fd`.
- **Promo / Perhatian (Coral Red)**: Background `#fee2e2`, Teks `#b91c1c`, Border `#fecaca`.

---

## 3. Tipografi & Skala Hirarki

- **Font Family**: Inter, didukung fallback System UI:
  ```css
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
  ```

| Elemen | Ukuran (Desktop) | Weight | Line Height | Keterangan |
|---|---|---|---|---|
| **H1 (Hero Title)** | `2.85rem` (`45.6px`) | `800` (Extra Bold) | `1.25` | Maksimal 1 per halaman, letter-spacing `-0.5px` |
| **H2 (Section Title)** | `2.0rem` - `2.25rem` | `800` (Extra Bold) | `1.30` | Judul setiap babak konten |
| **H3 (Card / Subtitle)** | `1.25rem` - `1.5rem` | `700` (Bold) | `1.35` | Judul kartu paket, grup produk |
| **H4 (Item Title)** | `1.10rem` - `1.20rem` | `700` (Bold) | `1.40` | Judul fitur, FAQ question |
| **Body (Paragraf)** | `1.0rem` (`16px`) | `400` / `500` | `1.65` | Warna `--slate-600`, mudah dibaca |
| **Lead Paragraph** | `1.125rem` (`18px`) | `400` / `500` | `1.60` | Paragraf pembuka di bawah hero |
| **Badges / Pill Tags**| `11.5px` (`0.72rem`) | `700` (Bold) | `1.20` | Uppercase, tracking `0.04em` |
| **Small / Meta** | `0.875rem` (`14px`) | `400` / `500` | `1.50` | Catatan kaki, disclaimer |

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
  - Border: `1px solid var(--slate-200)`.
  - Radius: `12px` (`--radius-lg`).
  - Box Shadow: `0 4px 6px -1px rgba(0, 0, 0, 0.05)`.
  - Hover Effect: `transform: translateY(-4px); box-shadow: 0 12px 24px -4px rgba(0, 0, 0, 0.08); transition: all 0.25s ease;`.
  - Padding dalam: `24px` hingga `32px`.

### 4.4. Gambar & Lightbox Modal
- Semua gambar dokumentasi komersial wajib menggunakan class `.pl-zoomable`.
- Saat diklik pengguna, lightbox modal vanilla JS di `header.php` / `main.js` otomatis membuka popup gambar resolusi penuh dengan backdrop gelap (`rgba(0, 0, 0, 0.85)`).
- Menutup modal dapat dilakukan via:
  1. Klik tombol Close (`&times;`) di pojok kanan atas.
  2. Klik sembarang area di luar gambar.
  3. Menekan tombol `Escape` pada keyboard.

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
