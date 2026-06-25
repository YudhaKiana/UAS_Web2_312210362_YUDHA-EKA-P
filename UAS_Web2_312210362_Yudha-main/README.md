# Laporan Proyek Akhir UAS Pemrograman Web 2
**Sistem Informasi Rental Buku / Komik Digital (E-Library)**

### Identitas Mahasiswa
* **Nama:** Akram Satya
* **NIM:** 312210461
* **Kelas:** I241A
* **Kampus:** Universitas Pelita Bangsa
* **Repositori:** `UAS_Web2_[312210461]_AkramSatya`

---

## 📌 1. Deskripsi Proyek
Proyek E-Library ini dikembangkan untuk mengelola data operasional penyewaan buku dan komik digital (meliputi data buku, kategori genre, penulis, anggota, dan status peminjaman). Sistem dibangun sepenuhnya menggunakan pendekatan **Decoupled Architecture**, di mana pemrosesan data di sisi peladen (Backend) terpisah 100% dari antarmuka pengguna (Frontend).

## ⚙️ 2. Spesifikasi Teknologi Terapan
Sistem ini memenuhi standar ekosistem teknologi modern sesuai ketentuan UAS:
* **Sisi Server (Backend):** CodeIgniter 4 yang dikonfigurasi murni sebagai RESTful API Server (Resource Controller).
* **Sisi Klien (Frontend):** *Single Page Application* (SPA) menggunakan VueJS 3 via CDN, dipadukan dengan Vue Router untuk navigasi mulus tanpa *hard-reload*.
* **Antarmuka (UI):** Didesain secara responsif dan modern menggunakan *utility-classes* dari TailwindCSS.
* **Komunikasi Data:** Memanfaatkan Axios untuk *HTTP Request* asinkron dan MySQL/MariaDB untuk basis data.

---

## 📂 3. Pengorganisasian Ruang Kerja
Sesuai standar pengumpulan, repositori ini dibagi menjadi dua modul utama:
1. `/backend-api/`: Memuat kerangka kerja CodeIgniter 4 beserta logika API dan filter keamanan.
2. `/frontend-spa/`: Memuat file `index.html`, modul komponen Vue, konfigurasi *Router*, serta pustaka TailwindCSS.

---

## 🖼️ 4. Lampiran Bukti Pemenuhan Fitur (Screenshots)

### A. Arsitektur Database (Bobot 35%)
Aplikasi telah menggunakan relasi minimal 3 tabel (contoh: users, buku, kategori).
> **Screenshot Skema Relasi phpMyAdmin:** 
> `![Skema Database](Masukkan_Link_Gambar_Di_Sini)`

### B. Proteksi Server-Side (Token & CORS)
Endpoint API dilindungi oleh *Authorization Bearer Token* via CI4 Filters. Berikut adalah pengujian penolakan akses oleh sistem jika token tidak disertakan.
> **Screenshot Error 401 Unauthorized (Postman):** 
> `![Error 401 Postman](Masukkan_Link_Gambar_Di_Sini)`

### C. Arsitektur Frontend & UI TailwindCSS (Bobot 45%)
Antarmuka telah dipecah menjadi komponen modular dan didesain murni menggunakan TailwindCSS (tanpa CSS tradisional).
> **Screenshot Halaman Login (Dilengkapi Axios POST):** 
> `![Login Page](Masukkan_Link_Gambar_Di_Sini)`
>
> **Screenshot Dashboard Utama Admin (Diproteksi Navigation Guards):** 
> `![Dashboard Admin](Masukkan_Link_Gambar_Di_Sini)`
> 
> **Screenshot Visualisasi Tabel Data TailwindCSS:** 
> `![Tabel Data](Masukkan_Link_Gambar_Di_Sini)`
>
> **Screenshot Form Modal Interaktif (Tambah/Edit Data):** 
> `![Form Modal](Masukkan_Link_Gambar_Di_Sini)`

---

## 🛠️ 5. Petunjuk Instalasi & Menjalankan Proyek
Untuk menguji coba aplikasi secara lokal, silakan ikuti tahapan berikut:

**Inisialisasi Backend:**
1. Masuk ke direktori `backend-api/`.
2. Lakukan duplikasi pada file `env` menjadi `.env`. Konfigurasikan variabel database (hostname, username, password, dan nama database) sesuai server lokal Anda.
3. Buka terminal di direktori tersebut lalu jalankan: `php spark serve`.

**Inisialisasi Frontend:**
1. Masuk ke direktori `frontend-spa/`.
2. Mengingat framework dipanggil via CDN, pastikan koneksi internet tersedia.
3. Buka file `index.html` menggunakan *Live Server* pada *code editor* Anda untuk memuat aplikasi di *browser*.

---

## 🔗 6. Tautan Evaluasi
* 🎬 **Video Presentasi YouTube (Maks 7 Menit):** [Masukkan Link YouTube Anda di sini]
* 🌍 **Demo Live Aplikasi:** [Masukkan Link Demo Anda di sini, hapus jika tidak ada]
