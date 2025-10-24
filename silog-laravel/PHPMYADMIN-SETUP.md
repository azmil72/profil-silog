# 📊 phpMyAdmin Setup untuk SILOG

## 🔧 **Cara Setup phpMyAdmin:**

### 1. **Install XAMPP**
- Download XAMPP dari https://www.apachefriends.org/
- Install dan jalankan Apache + MySQL

### 2. **Akses phpMyAdmin**
- Buka browser: `http://localhost/phpmyadmin`
- Login: username `root`, password kosong

### 3. **Import Database SILOG**
- Klik "New" untuk buat database baru
- Nama database: `silog_db`
- Klik "Import" tab
- Upload file SQL atau copy paste query

### 4. **Update Laravel Config**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=silog_db
DB_USERNAME=root
DB_PASSWORD=
```

## 📋 **Database Structure:**

**Table: contents**
- id (Primary Key)
- type (hero, about, service, subsidiary, news, gallery)
- title
- subtitle
- description
- image
- icon
- date
- link
- order
- is_active
- created_at
- updated_at

## 🌐 **Current Setup:**
- **Database**: SQLite (working)
- **Website**: http://127.0.0.1:8000
- **Admin**: http://127.0.0.1:8000/admin

**Website sudah berjalan sempurna dengan SQLite. phpMyAdmin opsional untuk MySQL.**