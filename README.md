# LAPORAN PROYEK AKHIR UAS

# UAS Web 2 - Sistem Informasi Rental Buku / Komik Digital (E-Library)

**Mata Kuliah:** Pemrograman Web 2  
**Nama:** Yudha Eka P  
**NIM:** 312210362
**Kelas:** I241A
**Kampus:** Universitas Pelita Bangsa
**Repositori:** UAS_Web2_[312210362]_Yudha Eka P

## 📖 Deskripsi Proyek
[cite_start]Proyek ini adalah aplikasi Sistem Informasi Rental Buku dan Komik Digital (E-Library) yang dibangun menggunakan *Decoupled Architecture* (Arsitektur Terpisah) antara server (Backend) dan klien (Frontend)[cite: 4, 18]. [cite_start]Sistem ini berfungsi untuk mengelola data buku, kategori genre, penulis/penerbit, status peminjaman, serta data anggota[cite: 19]. [cite_start]Aplikasi ini memisahkan hak akses antara pengunjung publik (hanya dapat melihat beranda) dan Administrator (akses penuh untuk CRUD data master)[cite: 53, 54, 56].

## 🛠️ Spesifikasi Teknologi
[cite_start]Aplikasi ini dibangun menggunakan ekosistem teknologi modern berikut[cite: 7]:
* [cite_start]**Backend:** PHP Framework CodeIgniter 4 (CI4) sebagai RESTful API Server (Resource Controller)[cite: 8].
* [cite_start]**Frontend:** VueJS 3 (via CDN) dengan ekosistem Vue Router untuk *Single Page Application* (SPA)[cite: 9].
* [cite_start]**User Interface (UI):** TailwindCSS (via CDN) untuk tampilan *utility-first* yang responsif[cite: 10].
* [cite_start]**Data Transfer & Database:** Axios (HTTP Request) dan MySQL/MariaDB[cite: 11].

## 📂 Struktur Direktori
[cite_start]Repositori ini dibagi menjadi dua bagian utama[cite: 61]:
* [cite_start]`/backend-api/`: Berisi kode sumber RESTful API menggunakan CodeIgniter 4[cite: 62].
* [cite_start]`/frontend-spa/`: Berisi antarmuka pengguna berbasis VueJS 3, Vue Router, TailwindCSS, dan file `index.html`[cite: 63].

## 🗄️ Skema Database
[cite_start]Sistem ini menggunakan minimal 3 tabel yang saling berelasi, yaitu `users` (untuk otentikasi admin), `kategori_genre`, dan `buku`[cite: 23, 24].

![Skema Relasi Tabel Database](Link_Screenshot_phpMyAdmin_Anda_Di_Sini)
[cite_start]*(Catatan: Ganti teks di atas dengan link gambar screenshot desainer relasi tabel phpMyAdmin Anda)*[cite: 66].

## 🔒 Dokumentasi Keamanan & Pengujian API
[cite_start]API diproteksi menggunakan **CodeIgniter Filters** dengan validasi *Authorization Bearer Token*[cite: 26, 27]. Berikut adalah bukti pengujian apabila endpoint diakses tanpa token (Error 401 Unauthorized):

![Uji Coba Tembak API Gagal (Error 401)](Link_Screenshot_Postman_Anda_Di_Sini)
[cite_start]*(Catatan: Ganti dengan link screenshot Postman Anda)*[cite: 67].

## 💻 Antarmuka Aplikasi (Screenshots)
[cite_start]*(Catatan: Unggah gambar Anda ke folder repositori atau image hosting, lalu masukkan linknya di bawah ini)*[cite: 68]:

1.  **Halaman Login**
    ![Halaman Login](Link_Screenshot_Login)
2.  **Halaman Dashboard Admin**
    ![Dashboard Admin](Link_Screenshot_Dashboard)
3.  **Tampilan Tabel Data (TailwindCSS)**
    ![Tabel Data](Link_Screenshot_Tabel)
4.  **Form Modal (Tambah/Edit Data)**
    ![Form Modal](Link_Screenshot_Form)

## 🚀 Petunjuk Instalasi (Cara Menjalankan Proyek)
[cite_start]Ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer lokal[cite: 69]:

**1. Menjalankan Backend (CodeIgniter 4):**
1. Masuk ke folder `backend-api/`.
2. Salin file `env` menjadi `.env` dan atur konfigurasi database Anda (nama database, user, password).
3. Buka terminal, arahkan ke folder tersebut, dan jalankan perintah:
   `php spark serve`
4. Server API akan berjalan di `http://localhost:8080`.

**2. Menjalankan Frontend (VueJS SPA):**
1. Masuk ke folder `frontend-spa/`.
2. [cite_start]Pastikan Anda memiliki koneksi internet yang stabil (karena Vue, Router, dan Tailwind dipanggil melalui CDN)[cite: 9, 10].
3. Buka file `index.html` menggunakan fitur **Live Server** pada VS Code atau browser pilihan Anda.
4. Aplikasi klien dapat diakses melalui browser Anda.

## 🔗 Tautan Proyek
* [cite_start]**Demo Aplikasi Web:** [Masukkan URL Hosting/Demo Anda di sini, jika ada] [cite: 70]
* [cite_start]**Video Presentasi Proyek:** [Masukkan Link Video YouTube Anda di sini] [cite: 70, 76]
