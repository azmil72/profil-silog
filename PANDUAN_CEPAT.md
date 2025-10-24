# PANDUAN CEPAT - SILOG Website dengan CRUD

## 🚀 Cara Menjalankan

### 1. Setup Database (Pertama Kali)
```bash
cd "silog-laravel"
php artisan migrate
php artisan db:seed --class=ContentSeeder
```

**ATAU** jalankan file batch:
```bash
cd "silog-laravel"
setup_content.bat
```

### 2. Jalankan Server Laravel
```bash
cd "silog-laravel"
php artisan serve
```

### 3. Akses Website
- **Website Utama**: http://localhost:8000
- **Admin Panel**: http://localhost:8000/admin

## 📁 Struktur File

```
web silog beta/
├── index.html                    # Website asli (static)
├── index_with_laravel.html       # Website terintegrasi Laravel
├── admin-panel.html              # Admin panel asli (static)
├── silog-laravel/                # Aplikasi Laravel
│   ├── public/
│   │   ├── css/app.css          # Styling
│   │   ├── js/app.js            # JavaScript
│   │   └── assets/images/       # Gambar
│   ├── resources/views/
│   │   ├── home.blade.php       # Homepage dinamis
│   │   └── admin/dashboard.blade.php # Admin panel dinamis
│   └── database/seeders/
│       └── ContentSeeder.php    # Data awal
└── PANDUAN_CEPAT.md             # File ini
```

## 🎯 Fitur CRUD

### Jenis Konten yang Bisa Dikelola:
1. **Hero Section** - Banner utama
2. **About Cards** - Kartu tentang perusahaan  
3. **Services** - Layanan perusahaan
4. **Subsidiaries** - Anak perusahaan
5. **News** - Berita dan artikel
6. **Gallery** - Galeri foto

### Operasi CRUD:
- ✅ **Create** - Tambah konten baru
- ✅ **Read** - Lihat semua konten
- ✅ **Update** - Edit konten existing
- ✅ **Delete** - Hapus konten
- ✅ **Toggle** - Aktifkan/nonaktifkan konten

## 🔧 Cara Menggunakan Admin Panel

1. **Akses Admin**: http://localhost:8000/admin
2. **Pilih Section**: Klik menu di sidebar kiri
3. **Tambah Konten**: Klik tombol "Tambah [Jenis]"
4. **Edit Konten**: Klik icon pensil pada konten
5. **Hapus Konten**: Klik icon trash
6. **Toggle Status**: Klik icon mata

## 📝 Field yang Tersedia

| Field | Hero | About | Service | Subsidiary | News | Gallery |
|-------|------|-------|---------|------------|------|---------|
| Title | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |
| Subtitle | ✅ | ❌ | ❌ | ❌ | ❌ | ❌ |
| Description | ❌ | ✅ | ✅ | ✅ | ✅ | ✅ |
| Image | ✅ | ❌ | ❌ | ❌ | ❌ | ✅ |
| Icon | ❌ | ✅ | ❌ | ✅ | ❌ | ❌ |
| Date | ❌ | ❌ | ❌ | ❌ | ✅ | ❌ |
| Link | ❌ | ❌ | ✅ | ❌ | ✅ | ❌ |
| Order | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |

## 🎨 Tips Desain

### Icon Font Awesome:
- `fas fa-star` - Bintang
- `fas fa-heart` - Hati  
- `fas fa-home` - Rumah
- `fas fa-cog` - Setting
- `fas fa-user` - User

### URL Gambar:
- Gunakan URL lengkap: `https://example.com/image.jpg`
- Unsplash: `https://images.unsplash.com/photo-xxx`

### Link Internal:
- `#about` - ke section about
- `#services` - ke section services
- `#contact` - ke section contact

## 🔄 Perbandingan Versi

| Fitur | Static HTML | Laravel + CRUD |
|-------|-------------|----------------|
| Konten | Hard-coded | Database |
| Edit | Manual coding | Admin panel |
| Backup | File copy | Database export |
| Multi-user | ❌ | ✅ (bisa ditambah) |
| Version control | ❌ | ✅ (timestamps) |
| Search | ❌ | ✅ (bisa ditambah) |

## 🚨 Troubleshooting

### Error "Class ContentSeeder not found"
```bash
composer dump-autoload
php artisan db:seed --class=ContentSeeder
```

### Error "No such file or directory"
Pastikan berada di folder `silog-laravel`:
```bash
cd "silog-laravel"
```

### Konten tidak muncul
1. Cek status aktif di admin panel
2. Clear browser cache
3. Restart server Laravel

### Database error
1. Cek file `.env` di folder `silog-laravel`
2. Pastikan database SQLite ada
3. Jalankan ulang migration

## 📞 Support

Jika ada masalah:
1. Cek file log: `silog-laravel/storage/logs/laravel.log`
2. Restart server: `Ctrl+C` lalu `php artisan serve`
3. Reset database: hapus file `database.sqlite` lalu jalankan setup ulang