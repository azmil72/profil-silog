# SILOG Website - Sistem CRUD Konten Beranda

## Deskripsi
Sistem CRUD (Create, Read, Update, Delete) untuk mengelola konten halaman beranda website SILOG. Sistem ini memungkinkan admin untuk mengelola semua konten dinamis di halaman beranda tanpa perlu mengubah kode.

## Fitur Utama

### 1. Dashboard Admin
- Overview statistik konten
- Navigasi mudah antar section
- Interface yang user-friendly

### 2. Manajemen Konten
Sistem dapat mengelola 6 jenis konten:

#### A. Hero Section
- **Fungsi**: Konten utama di bagian atas halaman
- **Field**: Title, Subtitle, Image
- **Fitur**: Auto-rotating content (berganti otomatis)

#### B. About Cards
- **Fungsi**: Kartu informasi tentang perusahaan
- **Field**: Title, Description, Icon (Font Awesome)
- **Tampilan**: Grid 3 kolom dengan animasi hover

#### C. Services
- **Fungsi**: Layanan utama perusahaan
- **Field**: Title, Description, Link
- **Tampilan**: Kartu dengan background gradient

#### D. Subsidiaries
- **Fungsi**: Anak perusahaan SILOG
- **Field**: Title, Description, Icon
- **Tampilan**: Kartu dengan logo circular

#### E. News
- **Fungsi**: Berita dan artikel terbaru
- **Field**: Title, Description, Date, Link
- **Tampilan**: Kartu berita dengan tanggal

#### F. Gallery
- **Fungsi**: Galeri foto/gambar
- **Field**: Title, Description, Image
- **Fitur**: Slider otomatis dengan caption

## Cara Menggunakan

### 1. Akses Admin Panel
```
URL: http://localhost:8000/admin
```

### 2. Navigasi Dashboard
- Klik menu di sidebar kiri untuk memilih jenis konten
- Overview menampilkan statistik semua konten

### 3. Menambah Konten Baru
1. Pilih section yang ingin ditambahkan konten
2. Klik tombol "Tambah [Jenis Konten]"
3. Isi form yang muncul:
   - **Title**: Judul konten (wajib)
   - **Subtitle**: Sub judul (opsional)
   - **Description**: Deskripsi konten (wajib)
   - **Image**: URL gambar (opsional)
   - **Icon**: Kode Font Awesome untuk icon (khusus About & Subsidiaries)
   - **Date**: Tanggal (khusus News)
   - **Link**: URL tujuan (khusus Services & News)
   - **Order**: Urutan tampil (angka, semakin kecil semakin atas)
4. Klik "Simpan"

### 4. Mengedit Konten
1. Klik icon edit (pensil) pada konten yang ingin diubah
2. Form akan terbuka dengan data yang sudah terisi
3. Ubah data sesuai kebutuhan
4. Klik "Simpan"

### 5. Mengaktifkan/Menonaktifkan Konten
- Klik icon mata untuk mengaktifkan/menonaktifkan konten
- Konten yang tidak aktif tidak akan tampil di website

### 6. Menghapus Konten
1. Klik icon trash (tempat sampah)
2. Konfirmasi penghapusan
3. Konten akan dihapus permanen

## Struktur Database

### Tabel: contents
```sql
- id (Primary Key)
- type (hero, about, service, subsidiary, news, gallery)
- title (VARCHAR 255)
- subtitle (TEXT, nullable)
- description (TEXT, nullable)
- image (VARCHAR 255, nullable)
- icon (VARCHAR 255, nullable)
- date (VARCHAR 255, nullable)
- link (VARCHAR 255, nullable)
- data (JSON, nullable) - untuk data tambahan
- order (INTEGER, default 0)
- is_active (BOOLEAN, default true)
- created_at (TIMESTAMP)
- updated_at (TIMESTAMP)
```

## Setup dan Instalasi

### 1. Persiapan Database
```bash
# Jalankan migration
php artisan migrate

# Jalankan seeder untuk data awal
php artisan db:seed --class=ContentSeeder
```

### 2. Menjalankan Server
```bash
php artisan serve
```

### 3. Akses Website
- **Frontend**: http://localhost:8000
- **Admin Panel**: http://localhost:8000/admin

## Tips Penggunaan

### 1. Icon Font Awesome
Untuk field icon, gunakan kode Font Awesome:
- `fas fa-star` - Bintang
- `fas fa-heart` - Hati
- `fas fa-home` - Rumah
- `fas fa-user` - User
- `fas fa-cog` - Setting

### 2. URL Gambar
- Gunakan URL lengkap: `https://example.com/image.jpg`
- Atau gunakan layanan seperti Unsplash: `https://images.unsplash.com/photo-xxx`

### 3. Urutan Konten
- Gunakan angka untuk mengatur urutan
- Angka kecil = tampil lebih atas
- Contoh: 1, 2, 3, 4, dst.

### 4. Link Internal
Untuk link ke bagian lain di website yang sama:
- `#about` - ke section about
- `#services` - ke section services
- `#contact` - ke section contact

## Troubleshooting

### 1. Konten Tidak Muncul
- Pastikan konten dalam status aktif (is_active = true)
- Periksa urutan (order) konten
- Clear cache browser

### 2. Gambar Tidak Tampil
- Pastikan URL gambar valid dan dapat diakses
- Periksa format gambar (jpg, png, gif)

### 3. Error 500
- Periksa log Laravel: `storage/logs/laravel.log`
- Pastikan database connection benar
- Periksa permission folder storage

## Keamanan

### 1. Validasi Input
- Semua input divalidasi di backend
- XSS protection aktif
- CSRF protection untuk form

### 2. Authorization
- Tambahkan middleware auth jika diperlukan
- Implementasi role-based access control

## Pengembangan Lanjutan

### 1. Menambah Field Baru
1. Tambah kolom di migration
2. Update model Content
3. Update form di admin panel
4. Update tampilan frontend

### 2. Menambah Jenis Konten Baru
1. Tambah type baru di database
2. Update controller dan view
3. Tambah menu di sidebar admin

### 3. Upload File
- Implementasi file upload untuk gambar
- Gunakan Laravel Storage
- Tambah validasi file type dan size

## Support
Untuk bantuan teknis atau pertanyaan, silakan hubungi tim development.