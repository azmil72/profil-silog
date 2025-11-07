# SILOG Laravel Docker Setup

## Quick Start

1. **Clone dan masuk ke direktori:**
```bash
cd silog-laravel
```

2. **Copy environment file:**
```bash
cp .env.docker .env
```

3. **Build dan jalankan containers:**
```bash
docker-compose up -d --build
```

4. **Generate application key:**
```bash
docker-compose exec app php artisan key:generate
```

5. **Jalankan migrasi (opsional):**
```bash
docker-compose exec app php artisan migrate
```

## Akses Aplikasi

- **Website:** http://localhost:8080
- **phpMyAdmin:** http://localhost:8081
  - Username: root
  - Password: root

## Perintah Berguna

```bash
# Melihat logs
docker-compose logs -f

# Masuk ke container app
docker-compose exec app bash

# Restart services
docker-compose restart

# Stop semua services
docker-compose down

# Stop dan hapus volumes
docker-compose down -v
```

## Database

Database MySQL akan otomatis disetup dengan data dari `mysql-setup.sql` saat pertama kali dijalankan.