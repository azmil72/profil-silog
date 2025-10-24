# Setup Proyek Laravel SILOG

## Langkah-langkah Setup

### 1. Persiapan Database MySQL
1. Buka **phpMyAdmin** di browser (biasanya `http://localhost/phpmyadmin`)
2. Login dengan username `root` dan password kosong
3. Klik tab **SQL** 
4. Copy dan paste seluruh isi file `database_setup.sql` ke dalam text area
5. Klik **Go** untuk menjalankan script
6. Database `silog_db` akan terbuat dengan semua tabel dan data contoh

### 2. Konfigurasi Laravel
File `.env` sudah dikonfigurasi dengan:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=silog_db
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Install Dependencies (jika belum)
```bash
composer install
```

### 4. Generate Application Key (jika belum)
```bash
php artisan key:generate
```

### 5. Jalankan Server Laravel
```bash
php artisan serve
```

### 6. Akses Website
Buka browser dan kunjungi: `http://localhost:8000`

## Struktur Proyek

### File Utama yang Dibuat:
- `app/Http/Controllers/HomeController.php` - Controller untuk halaman beranda
- `app/Models/Banner.php` - Model untuk data banner
- `resources/views/layouts/app.blade.php` - Layout utama
- `resources/views/home.blade.php` - Halaman beranda
- `database/migrations/2025_10_23_005547_create_banners_table.php` - Migration tabel banners
- `database/seeders/BannerSeeder.php` - Seeder data banner
- `routes/web.php` - Route untuk halaman beranda

### Assets:
- `public/assets/images/` - Folder untuk gambar (logo, aset, dll)

## Fitur yang Sudah Diimplementasi

### 1. Halaman Beranda Dinamis
- Hero section dengan data dari database
- Auto-changing banner jika ada multiple data
- Semua section responsive dan interaktif

### 2. Database Integration
- Tabel `banners` untuk mengelola hero section
- Data banner dapat diubah melalui database
- Fallback ke data statis jika database kosong

### 3. Layout System
- Layout utama yang dapat digunakan ulang
- Navigation dan footer terintegrasi
- CSS dan JavaScript terorganisir

## Cara Mengelola Data Banner

### Melalui phpMyAdmin:
1. Buka phpMyAdmin
2. Pilih database `silog_db`
3. Klik tabel `banners`
4. Klik **Insert** untuk menambah data baru
5. Atau **Edit** untuk mengubah data yang ada

### Field yang tersedia:
- `title` - Judul banner
- `subtitle` - Subtitle/deskripsi banner  
- `image` - Nama file gambar (harus ada di `public/assets/images/`)

## Pengembangan Selanjutnya

### Halaman yang Bisa Ditambahkan:
1. **Admin Panel** - Untuk mengelola konten
2. **Halaman Tentang** - Sejarah, visi misi, dll
3. **Halaman Layanan** - Detail logistik, konstruksi, distribusi
4. **Halaman Berita** - Sistem berita dinamis
5. **Halaman Kontak** - Form kontak dan informasi

### Fitur yang Bisa Ditambahkan:
1. **Authentication** - Login admin
2. **CRUD Banner** - Kelola banner via web interface
3. **File Upload** - Upload gambar banner
4. **SEO Optimization** - Meta tags dinamis
5. **Multi-language** - Bahasa Indonesia dan Inggris

## Troubleshooting

### Jika ada error database:
1. Pastikan MySQL/XAMPP sudah running
2. Cek konfigurasi di file `.env`
3. Pastikan database `silog_db` sudah dibuat
4. Jalankan ulang script `database_setup.sql`

### Jika gambar tidak muncul:
1. Pastikan file gambar ada di `public/assets/images/`
2. Cek nama file di database sesuai dengan file fisik
3. Pastikan permission folder sudah benar

### Jika CSS/JS tidak load:
1. Jalankan `php artisan serve` dari root folder Laravel
2. Akses via `http://localhost:8000` bukan file path langsung

## Kontak
Untuk pertanyaan lebih lanjut, silakan hubungi tim development.