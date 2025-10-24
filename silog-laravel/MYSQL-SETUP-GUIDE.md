# 🚀 Setup MySQL untuk SILOG Website

## 📋 **Langkah Setup:**

### 1. **Buka phpMyAdmin**
- URL: `http://localhost/phpmyadmin`
- Login: username `root`, password kosong

### 2. **Import Database**
- Klik tab **"SQL"**
- Copy semua isi file `mysql-setup.sql`
- Paste ke SQL editor
- Klik **"Go"** untuk execute

### 3. **Verifikasi Database**
- Database `silog_db` akan terbuat
- Tabel `contents` berisi 21 records
- Semua konten dari design original

### 4. **Test Website**
```bash
cd silog-laravel
php artisan serve --host=127.0.0.1 --port=8000
```

## 🌐 **Access URLs:**
- **Website**: http://127.0.0.1:8000
- **Admin Panel**: http://127.0.0.1:8000/admin
- **phpMyAdmin**: http://localhost/phpmyadmin

## 📊 **Database Content:**
- **Hero**: 4 rotating banners
- **About**: 3 info cards
- **Services**: 3 main services  
- **Subsidiaries**: 4 companies
- **News**: 3 articles
- **Gallery**: 4 images

**Total: 21 content records**

## ✅ **Features:**
- ✅ Full CRUD admin panel
- ✅ MySQL database dengan phpMyAdmin
- ✅ Semua konten dari design original
- ✅ Responsive & optimized

**Website SILOG siap dengan MySQL + phpMyAdmin!**