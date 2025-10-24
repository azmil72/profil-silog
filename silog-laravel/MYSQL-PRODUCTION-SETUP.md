# 🚀 MYSQL SETUP UNTUK PROYEK PERUSAHAAN

## 1. Install XAMPP (Recommended)
Download dan install XAMPP dari: https://www.apachefriends.org/

### Setelah Install XAMPP:
1. Buka XAMPP Control Panel
2. Start **Apache** dan **MySQL**
3. Klik **Admin** pada MySQL untuk buka phpMyAdmin

## 2. Setup Database via phpMyAdmin

### Buat Database:
1. Buka http://localhost/phpmyadmin
2. Klik **New** di sidebar kiri
3. Nama database: `silog_db`
4. Klik **Create**

### Import Data:
1. Pilih database `silog_db`
2. Klik tab **Import**
3. Choose file: `mysql-setup.sql`
4. Klik **Go**

## 3. Jalankan Laravel

```bash
cd "d:\Magang\web silog beta\silog-laravel"
php artisan serve
```

## 4. Test Website
- Homepage: http://127.0.0.1:8000
- Admin Panel: http://127.0.0.1:8000/admin

## 🔧 Jika Masih Error "could not find driver":

### Untuk XAMPP:
1. Buka `xampp/php/php.ini`
2. Cari dan uncomment:
   ```
   extension=pdo_mysql
   extension=mysqli
   ```
3. Restart Apache di XAMPP

### Untuk PHP Standalone:
1. Download php_pdo_mysql.dll
2. Copy ke folder `ext/`
3. Edit php.ini, uncomment:
   ```
   extension=pdo_mysql
   extension=mysqli
   ```

## ✅ Setelah Setup Berhasil:
- Database MySQL siap untuk production
- 21 content records ter-load
- Admin panel fully functional
- Website optimized untuk perusahaan